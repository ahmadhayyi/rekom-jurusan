<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mapel::create([
            'nama' => 'Indonesia',
        ]);
        Mapel::create([
            'nama' => 'Inggris',
        ]);
        Mapel::create([
            'nama' => 'Matematika',
        ]);
    }
}
