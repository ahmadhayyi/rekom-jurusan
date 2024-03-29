<?php

namespace App\Http\Controllers;


use App\Models\Mapel;
use App\Models\Nilai;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Models\KMeans;
use App\Models\User;

use function GuzzleHttp\Promise\all;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.siswa.index',[
            'currentPage' => request()->input('page', 1),
            'data' => User::where('level', 2)->Paginate(8),
            'mapel' => Mapel::all(),
            'kmeans' => KMeans::all(),
            // 'minat' => KMeans::where('mapel_id', 0)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiswaRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(User $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(User $siswa)
    {
        return view('dashboard.siswa.edit',[
            'mapel' => Mapel::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswaRequest  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiswaRequest $request, User $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $siswa)
    {
        User::find($siswa->id)->delete();
        Nilai::where('user_id', $siswa->id)->delete();
        KMeans::where('user_id', $siswa->id)->delete();
        return redirect('/siswa')->with('success', 'Siswa berhasil dihapus!');
    }
}
