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
            'nama' => 'Bhs Indonesia',
        ]);
        Mapel::create([
            'nama' => 'Bhs Inggris',
        ]);
        Mapel::create([
            'nama' => 'Matematika',
        ]);
    }
}
