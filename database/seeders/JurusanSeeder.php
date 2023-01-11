<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'nama' => 'Akuntansi',
        ]);
        Jurusan::create([
            'nama' => 'Pemasaran',
        ]);
        Jurusan::create([
            'nama' => 'Multimedia',
        ]);
        Jurusan::create([
            'nama' => 'Perhotelan',
        ]);
        Jurusan::create([
            'nama' => 'Perbankan',
        ]);
        Jurusan::create([
            'nama' => 'Perkantoran',
        ]);
    }
}
