<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.slider.index', [
            'title' => 'Data Slider',
            'sliders' => Slider::paginate(5)
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
            'nama_slider' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,webp'
        ]);

        if ($request->has('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('assets/img/slider', $nama_gambar);
            $validator['gambar'] = $nama_gambar;
        }

        Slider::create($validator);

        return redirect('/dashboard/data-slider')->with('success', 'Slider Baru Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

        $slider = Slider::findOrFail($id);
        $rules = [
            'nama_slider' => 'required',
            'deskripsi' => 'required'
        ];

        $validator = $request->validate($rules);

        if ($request->has('gambar')) {
            File::delete('assets/img/slider/' . $slider->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('assets/img/slider', $nama_gambar);
            $validator['gambar'] = $nama_gambar;
        } else {
            unset($validator['gambar']);
        }

        Slider::where('id', $slider->id)->update($validator);

        return redirect('/dashboard/data-slider')->with('success', 'Slider Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $slider = Slider::findOrFail($id);
        File::delete('assets/img/slider/' . $slider->gambar);
        Slider::destroy($slider->id);

        return redirect('/dashboard/data-slider')->with('success', 'Slider Berhasil di Hapus');
    }
}
