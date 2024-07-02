<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pelajaran.index', [
            'title' => 'Data Pelajaran',
            'pelajaran' => Pelajaran::paginate(5)
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

        Pelajaran::create($validator);
        return redirect('/dashboard/data-pelajaran')->with('success', 'Data Pelajaran Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelajaran $pelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

        $pelajaran = Pelajaran::findOrFail($id);
        $rules = [
            'nama' => 'required',
        ];

        $validator = $request->validate($rules);
        Pelajaran::where('id', $pelajaran->id)->update($validator);

        return redirect('/dashboard/data-pelajaran')->with('success', 'Data Pelajaran Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $pelajaran = Pelajaran::findOrFail($id);
        Pelajaran::destroy($pelajaran->id);

        return redirect('/dashboard/data-pelajaran')->with('success', 'Data pelajaran Berhasil di Hapus');
    }
}
