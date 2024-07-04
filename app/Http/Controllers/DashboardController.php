<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }

    public function updateprofil(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'alamat' => 'required',
            'password' => 'nullable',
        ]);

        $user = User::findOrFail($id);
        // Update data untuk tabel 'guru'
        $guruData = [
            'nama' => $validated['nama'],
            'no_hp' => $validated['no_hp'],
            'alamat' => $validated['alamat'],
        ];

        // Update data untuk tabel 'user'
        $userData = [
            'name' => $validated['nama'],
            'email' => $validated['email'],
        ];

        if ($request->filled('password')) {
            $userData['password'] = Hash::make($validated['password']);
        }

        try {
            Guru::where('user_id', $user->id)->update($guruData);
            // Update tabel 'user'
            $user->update($userData);
            return redirect('/dashboard/user-profil')->with('success', 'Data Berhasil di Update');
        } catch (\Exception $e) {
            return redirect('/dashboard/user-profil')->with('error', 'Gagal MengUpdate . Silakan coba lagi.');
        }
    }
}
