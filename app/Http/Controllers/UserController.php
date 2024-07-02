<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.user.index', [
            'title' => 'User Management',
            'user' => User::paginate(5),
            'roles' => Role::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        $user->assignRole($request->roles);
        return redirect('/dashboard/data-user-management')->with('success', 'Data User Berhasil di Tambahkan');
    }

    public function update(Request $request,  $id)
    {
        $validator = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'nullable|min:2'
        ]);
        if ($request->filled('password')) {
            $validator['password'] = Hash::make($validator['password']);
        } else {
            // Jika password tidak diisi, hapus password dari array validator
            unset($validator['password']);
        }


        try {
            $user = User::findOrFail($id);
            $user->roles()->detach();
            $user->update($validator);

            if ($request->filled('roles')) {
                $user->assignRole($request->roles); // Menggunakan syncRoles untuk mengganti peran yang ada
            }

            return redirect('/dashboard/data-user-management')->with('success', 'Data User Berhasil di Update');
        } catch (\Exception $e) {
            return redirect('/dashboard/data-user-management')->with('error', 'Gagal MengUpdate User. Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        try {
            User::destroy($user->id);
            return redirect('/dashboard/data-user-management')->with('success', 'Data User Berhasil di Hapus');
        } catch (\Exception $e) {
            return redirect('/dashboard/data-user-management')->with('error', 'Gagal menghapus User. Silakan coba lagi.');
        }
    }
}
