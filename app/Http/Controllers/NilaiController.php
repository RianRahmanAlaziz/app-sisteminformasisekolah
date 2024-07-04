<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Pelajaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.nilai.index', [
            'title' => 'Input Nilai',
            'nilai' => Nilai::all(),
            'siswa' => Siswa::all(),
            'pelajaran' => Pelajaran::all(),
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
        $siswa_id = $request->input('siswa_id');
        $pelajaran_id = $request->input('pelajaran_id');
        $nilai = $request->input('nilai');

        foreach ($pelajaran_id as $index => $pelajaran_id) {
            $nilaiMapel = $nilai[$index];
            Nilai::create([
                'siswa_id' => $siswa_id,
                'pelajaran_id' => $pelajaran_id,
                'nilai' => $nilaiMapel,
            ]);
        }

        return redirect('/dashboard/data-nilai')->with('success', 'Input Berhasil Berhasil di Tambahkan');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
