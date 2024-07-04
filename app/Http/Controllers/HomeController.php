<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'slider' => Slider::all()
        ]);
    }

    public function about()
    {
        return view('home.about', [
            'title' => 'About',
        ]);
    }

    public function contact()
    {
        return view('home.contact', [
            'title' => 'Contact',
        ]);
    }

    public function pengumuman()
    {
        return view('home.pengumuman', [
            'title' => 'Pengumuman',
        ]);
    }
}
