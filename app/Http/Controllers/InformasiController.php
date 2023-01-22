<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function __invoke(){
        return view('dashboard.informasi.index',[
            'informasi' => Jurusan::all(),
        ]);
    }
}
