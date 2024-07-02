<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.guru.index', [
            'title' => 'Data Guru',
            'guru' => Guru::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,webp',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('assets/img/guru', $nama_gambar);
            $validator['gambar'] = $nama_gambar;
        }
        $data = [
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt('112233'),
            'email_verified_at' => now()
        ];

        $user = User::create($data);
        $user->assignRole('Guru');

        $a = User::all()->last();
        $validator['user_id'] = $a->id;

        Guru::create($validator);
        return redirect('/dashboard/data-guru')->with('success', 'Data Guru Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $guru = Guru::findOrFail($id);
        $rules = [
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ];

        $validator = $request->validate($rules);

        if ($request->has('gambar')) {
            File::delete('assets/img/guru/' . $guru->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('assets/img/guru', $nama_gambar);
            $validator['gambar'] = $nama_gambar;
        } else {
            unset($validator['gambar']);
        }

        Guru::where('id', $guru->id)->update($validator);

        return redirect('/dashboard/data-guru')->with('success', 'Guru Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $user_id = $guru->user->id;

        try {
            File::delete('assets/img/guru/' . $guru->gambar);
            Guru::destroy($guru->id);
            User::destroy($user_id);
            return redirect('/dashboard/data-guru')->with('success', 'Data Guru Berhasil di Hapus');
        } catch (\Exception $e) {
            return redirect('/dashboard/data-guru')->with('error', 'Gagal Menghapus Data Guru. Silakan Coba Lagi.');
        }
    }
}
