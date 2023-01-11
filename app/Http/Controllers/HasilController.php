<?php

namespace App\Http\Controllers;

use App\Models\KMeans;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function __invoke(){
        return view('dashboard.hasil.index',[
            'data' => KMeans::where('user_id', auth()->user()->id)->get(),
        ]);
    }
}
