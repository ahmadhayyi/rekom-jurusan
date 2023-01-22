<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jurusan;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Soal;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(13)->create();
        // Nilai::factory(300)->create();

        $this->call(MapelSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(SoalSeeder::class);
        $this->call(NilaiSeeder::class);
        $this->call(UserSeeder::class);
    }
}
