<?php

namespace App\Http\Controllers;

use App\Models\Minat;
use App\Http\Requests\StoreMinatRequest;
use App\Http\Requests\UpdateMinatRequest;
use App\Models\Nilai;
use App\Models\Soal;

class MinatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.minat.index',[
            'data' => Minat::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.minat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMinatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMinatRequest $request)
    {
        Minat::create($request->all());
        return redirect('/minat')->with('success', 'Minat berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Minat  $minat
     * @return \Illuminate\Http\Response
     */
    public function show(Minat $minat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Minat  $minat
     * @return \Illuminate\Http\Response
     */
    public function edit(Minat $minat)
    {
        return view('dashboard.minat.edit',[
            'minat' => $minat,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMinatRequest  $request
     * @param  \App\Models\Minat  $minat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMinatRequest $request, Minat $minat)
    {
        Minat::find($minat->id)->update($request->all());
        return redirect('/minat')->with('success', 'Minat berhasil ditambah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Minat  $minat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Minat $minat)
    {
        Minat::find($minat->id)->delete();
        Soal::where('mapel_id', $minat->id)->delete();
        Nilai::where('mapel_id', $minat->id)->delete();
        return redirect('/minat')->with('success', 'Minat Berhasil dihapus');
    }
}
