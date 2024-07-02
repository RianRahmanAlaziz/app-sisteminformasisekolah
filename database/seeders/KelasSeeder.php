<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::updateOrCreate(
            [
                'nama' => 'Kelas A'
            ],
            [
                'nama' => 'Kelas A'
            ]
        );
        Kelas::updateOrCreate(
            [
                'nama' => 'Kelas B'
            ],
            [
                'nama' => 'Kelas B'
            ]
        );
    }
}
