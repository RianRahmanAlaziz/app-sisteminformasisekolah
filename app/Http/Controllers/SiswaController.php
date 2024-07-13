<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.siswa.index', [
            'title' => 'Data Siswa',
            'siswa' => Siswa::paginate(5),
            'kelas' => Kelas::all()
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
            'email' => 'required',
            'nama' => 'required',
            'n_ortu' => 'required',
            'kelas_id' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,webp',
            'f_ortu' => 'required|image|mimes:jpg,png,jpeg,webp',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('assets/img/siswa', $nama_gambar);
            $validator['gambar'] = $nama_gambar;
        }

        if ($request->has('f_ortu')) {
            $f_ortu = $request->file('f_ortu');
            $nama_f_ortu = time() . rand(1, 9) . '.' . $f_ortu->getClientOriginalExtension();
            $f_ortu->move('assets/img/siswa', $nama_f_ortu);
            $validator['f_ortu'] = $nama_f_ortu;
        }

        $data = [
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt('112233'),
            'email_verified_at' => now()
        ];


        $user = User::create($data);
        $user->assignRole('Wali Siswa');

        $a = User::all()->last();
        $validator['user_id'] = $a->id;

        Siswa::create($validator);
        return redirect('/dashboard/data-siswa')->with('success', 'Data Siswa Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

        $siswa = Siswa::findOrFail($id);
        $rules = [
            'nama' => 'required',
            'n_ortu' => 'required',
            'kelas_id' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ];

        $validator = $request->validate($rules);

        if ($request->has('gambar')) {
            File::delete('assets/img/siswa/' . $siswa->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('assets/img/siswa', $nama_gambar);
            $validator['gambar'] = $nama_gambar;
        } else {
            unset($validator['gambar']);
        }

        Siswa::where('id', $siswa->id)->update($validator);

        return redirect('/dashboard/data-siswa')->with('success', 'Siswa Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = siswa::findOrFail($id);

        try {
            File::delete('assets/img/siswa/' . $siswa->gambar);
            siswa::destroy($siswa->id);
            return redirect('/dashboard/data-siswa')->with('success', 'Data Siswa Berhasil di Hapus');
        } catch (\Exception $e) {
            return redirect('/dashboard/data-siswa')->with('error', 'Gagal Menghapus Data Siswa. Silakan Coba Lagi.');
        }
    }
}
