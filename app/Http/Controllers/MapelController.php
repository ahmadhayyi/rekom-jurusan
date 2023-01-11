<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Siswa;
use App\Models\Mapel;
use App\Http\Requests\StoreMapelRequest;
use App\Http\Requests\UpdateMapelRequest;
use App\Models\Nilai;
use App\Models\Soal;
use App\Models\User;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mapel.index',[
            'mapel_sidebar' => Mapel::all(),
            'data' => Mapel::Paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.mapel.create',[
            'mapel_sidebar' => Mapel::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMapelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMapelRequest $request)
    {
        $mapel = Mapel::create($request->all());
        $user = User::all();
        foreach($user as $us){
            Nilai::create([
                'user_id' => $us->id,
                'mapel_id' => $mapel->id,
                'nilai' => null,
            ]);
        }

        return redirect('/mapel')->with('success', 'Mata Pelajaran berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        return view('dashboard.mapel.edit',[
            'mapel' => $mapel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMapelRequest  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMapelRequest $request, Mapel $mapel)
    {
        Mapel::find($mapel->id)->update($request->all());
        return redirect('/mapel')->with('success', 'Mata Pelajaran berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        Mapel::find($mapel->id)->delete();
        Soal::where('mapel_id', $mapel->id)->delete();
        Nilai::where('mapel_id', $mapel->id)->delete();
        return redirect('/mapel')->with('success', 'Mapel Berhasil dihapus');
    }
}
