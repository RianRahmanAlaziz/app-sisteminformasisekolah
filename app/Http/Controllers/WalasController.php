<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Walas;
use Illuminate\Http\Request;

class WalasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.walas.index', [
            'title' => 'Data Wali Kelas',
            'walas' => Walas::paginate(5),
            'kelas' => Kelas::all(),
            'guru' => Guru::all(),
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
            'guru_id' => 'required',
            'kelas_id' => 'required'
        ]);

        Walas::create($validator);
        return redirect('/dashboard/data-walikelas')->with('success', 'Wali Kelas Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Walas $walas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Walas $walas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

        $walas = Walas::findOrFail($id);
        $rules = [
            'guru_id' => 'required',
            'kelas_id' => 'required'
        ];

        $validator = $request->validate($rules);
        Walas::where('id', $walas->id)->update($validator);

        return redirect('/dashboard/data-walikelas')->with('success', 'Wali Kelas Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $walas = Walas::findOrFail($id);
        Walas::destroy($walas->id);

        return redirect('/dashboard/data-walikelas')->with('success', 'Wali Kelas Berhasil di Hapus');
    }
}
