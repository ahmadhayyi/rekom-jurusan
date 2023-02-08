<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequestJawaban;
use App\Models\Mapel;
use App\Models\Minat;
use App\Models\Nilai;
use App\Models\Soal;
use App\Models\User;
use Illuminate\Http\Request;

class JawabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jawab.index',[
            'mapel' => Mapel::all(),
            'nilai' => Nilai::where('user_id', auth()->user()->id)->orderBy('mapel_id')->get(),
            'minat' => Nilai::where('user_id', auth()->user()->id)->where('mapel_id', 0)->get()[0],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('dashboard.jawab.create',[
            'soal' => Soal::where('mapel_id', $request->id)->get(),
        ]);
    }

    public function createMinat(Request $request)
    {
        return view('dashboard.jawab.create_minat',[
            'minat' => Minat::all(),
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $jawaban = $request->input('jawaban');
        foreach ($jawaban as $key => $value) {
            $soal_id = Soal::find($key);
            $jawab[] = $soal_id->jawaban == $value ? 1 : 0;
        }
        $true = 0;
        foreach ($jawab as $jwb) {
            $true += ($jwb == 1) ? 1 : 0;
        }
        $total_soal = collect($jawaban)->count();
        $nilai_max = 100;
        $nilai = ($nilai_max/$total_soal) * $true;
        $data = [
            'nilai' => $nilai,
        ];
        Nilai::where('user_id', auth()->user()->id)->where('mapel_id', $request->mapel_id)->update($data);
        return redirect('/jawab')->with('success', 'Jawaban berhasil disimpan!');
    }

    public function storeMinat(Request $request)
    {
        $jawaban = $request->input('jawaban');
        $hasil = "";
        foreach ($jawaban as $key => $value) {
            $hasil = ($key == 0) ? $value : $hasil . "," . $value;
        }

        $data = [
            'nilai' => 80,
            'ket' => $hasil,
        ];
        
        Nilai::where('user_id', auth()->user()->id)->where('mapel_id', 0)->update($data);
        return redirect('/jawab')->with('success', 'Jawaban berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
