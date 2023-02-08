<?php

namespace Database\Seeders;

use App\Models\Minat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MinatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minat = array("seni rupa", "fotografi", "musik", "tari", "desain grafis", "tata rias", "penulisan", "animasi", "pemrograman", "pembuatan film", "karya tangan", "desain interior", "komik", "pertukangan", "fashion", "kuliner", "arsitektur", "ilustrasi", "dekorasi", "keterampilan teknik", "video game", "graffiti", "teater", "kesenian", "kecantikan", "cinematic", "editor video", "akrobatik", "teknik audio", "sastra");
        
        for ($i=0; $i < count($minat); $i++) { 
            Minat::create([
                'nama' => $minat[$i],
            ]);
        }
    }
}
