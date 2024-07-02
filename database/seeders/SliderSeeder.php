<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::updateOrCreate(
            [
                'nama_slider' => 'Berfikir Keratif & inovatif',
                'deskripsi' => 'Bagi kami Kerativitas merupakan gerbang masa depan.
                Kreativitas akan mendorong inovasi.
                Itulah yang di lakukan kami',
                'gambar' => '17199095254.jpeg'
            ],
            [
                'nama_slider' => 'Berfikir Keratif & inovatif',
                'deskripsi' => 'Bagi kami Kerativitas merupakan gerbang masa depan.
                Kreativitas akan mendorong inovasi.
                Itulah yang di lakukan kami',
                'gambar' => '17199095254.jpeg'
            ]
        );
    }
}
