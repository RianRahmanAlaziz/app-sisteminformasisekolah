<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kelas.index', [
            'title' => 'Data Kelas',
            'kelas' => Kelas::paginate(5)
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
            'nama' => 'required'
        ]);

        Kelas::create($validator);
        return redirect('/dashboard/data-kelas')->with('success', 'Data Kelas Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $kelas = Kelas::findOrFail($id);
        $rules = [
            'nama' => 'required',
        ];

        $validator = $request->validate($rules);
        Kelas::where('id', $kelas->id)->update($validator);

        return redirect('/dashboard/data-kelas')->with('success', 'Data Kelas Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        Kelas::destroy($kelas->id);

        return redirect('/dashboard/data-kelas')->with('success', 'Data Kelas Berhasil di Hapus');
    }
}
