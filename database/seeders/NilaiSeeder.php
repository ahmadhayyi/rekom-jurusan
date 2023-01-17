<?php

namespace Database\Seeders;

use App\Models\Nilai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $data = [
                    [50, 95, 97, 95, 85, 95, 50, 97, 95, 55, 90, 80, 95],
                    [96, 98, 96, 86, 94, 94, 90, 98, 98, 90, 97, 90, 86],
                    [90, 96, 90, 98, 86, 92, 86, 98, 86, 90, 92, 95, 92],
                ];



        for ($mapel=0; $mapel < count($data); $mapel++) {
            for ($siswa=0; $siswa < count($data[0]); $siswa++) {
                Nilai::create([
                    'user_id' => $siswa+1,
                    'mapel_id' => $mapel+1,
                    'nilai' => $data[$mapel][$siswa],
                ]);
            }
        }
    }
}
