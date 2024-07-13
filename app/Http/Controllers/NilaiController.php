<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Pelajaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function daftar()
    {
        return view('dashboard.nilai.daftar', [
            'title' => 'Rekap Nilai',
            'nilai' => Nilai::all(),
            'siswa' => Siswa::paginate(10),
            'pelajarans' => Pelajaran::all(),

        ]);
    }

    public function nilai()
    {
        return view('dashboard.nilai.nilai', [
            'title' => 'Rekap Nilai',
            'nilai' => Nilai::all(),
            'pelajarans' => Pelajaran::all(),
            'siswa' => Siswa::where('user_id', auth()->user()->id)->paginate(10),

        ]);
    }
    public function index()
    {
        return view('dashboard.nilai.index', [
            'title' => 'Input Nilai',
            'siswa' => Siswa::all(),
            'kelas' => Kelas::all(),
            'pelajaran' => Pelajaran::all(),
        ]);
    }

    public function getSiswa($kelas_id)
    {
        $siswa = Siswa::where('kelas_id', $kelas_id)->get();
        return response()->json($siswa);
    }

    public function getNilai($siswa_id)
    {
        $nilai = Nilai::with('pelajaran')->where('siswa_id', $siswa_id)->get();
        return response()->json($nilai);
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
        $siswa_id = $request->input('siswa_id');
        $pelajaran_id = $request->input('pelajaran_id');
        $nilai = $request->input('nilai');

        foreach ($pelajaran_id as $index => $pelajaran_id) {
            $nilaiMapel = $nilai[$index];
            // Mencari data Nilai berdasarkan id
            $nilaiToUpdate = Nilai::where('siswa_id', $siswa_id)
                ->where('pelajaran_id', $pelajaran_id)
                ->first();

            // Jika data ditemukan, perbarui; jika tidak, buat data baru
            if ($nilaiToUpdate) {
                $nilaiToUpdate->update([
                    'nilai' => $nilaiMapel,
                ]);
            } else {
                Nilai::create([
                    'siswa_id' => $siswa_id,
                    'pelajaran_id' => $pelajaran_id,
                    'nilai' => $nilaiMapel,
                ]);
            }
        }

        return redirect('/dashboard/data-nilai')->with('success', 'Input Nilai Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        $siswa_id = $request->input('siswa_id');
        $pelajaran_id = $request->input('pelajaran_id');
        $nilai = $request->input('nilai');

        foreach ($pelajaran_id as $index => $pelajaran_id) {
            $nilaiMapel = $nilai[$index];
            // Mencari data Nilai berdasarkan id
            $nilaiToUpdate = Nilai::where('siswa_id', $siswa_id)
                ->where('pelajaran_id', $pelajaran_id)
                ->first();

            // Jika data ditemukan, perbarui; jika tidak, buat data baru
            if ($nilaiToUpdate) {
                $nilaiToUpdate->update([
                    'nilai' => $nilaiMapel,
                ]);
            } else {
                Nilai::create([
                    'siswa_id' => $siswa_id,
                    'pelajaran_id' => $pelajaran_id,
                    'nilai' => $nilaiMapel,
                ]);
            }
        }

        return redirect('/dashboard/data-nilai')->with('success', 'Update Nilai Berhasil di Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
