<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mapel;
use App\Models\Soal;
use App\Models\Jurusan;
use App\Models\Nilai;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(){
        return view('dashboard.index',[
            'siswa' => User::where('level', 2)->count(),
            'mapel' => Mapel::count(),
            'soal' => Soal::count(),
            'jurusan' => Jurusan::count(),
            'nilai' => Nilai::where('mapel_id', '!=', '0')->whereNotNull('nilai')->latest()->take(8)->get(),
            'total' => Nilai::whereNotNull('nilai')->count(),
        ]);
    }
}
