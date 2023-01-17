<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\KMeans;
use App\Models\Mapel;
use App\Models\Nilai;
use Illuminate\Http\Request;

class KMeansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Nilai::whereNull('nilai')->count() > 0){
            return redirect('/siswa')->with('failed', 'Nilai siswa belum lengkap');
        }

        // Reset semua data
        KMeans::truncate();

        // Jumlah Cluster
        $jml_cluster = Jurusan::count();
        // Jumlah Atribut Data
        $jml_mapel = Mapel::count();
        // Ambil data nilai
        $nilai = Nilai::orderBy('user_id')->orderBy('mapel_id')->get();
        // mengatur array data siswa
        $baris = 0;
        for ($siswa=0; $siswa < count($nilai); $siswa+=$jml_mapel) {
            for ($mapel=0; $mapel < $jml_mapel; $mapel++) {
                $data[$baris][$mapel] = $nilai[$siswa+$mapel]->nilai;
            }
            $user[] = $nilai[$siswa]->user_id;
            $baris++;
        }

        // Function
        function jarakTerdekat($jml_data, $jml_cluster, $iterasi) {
            for ($siswa=0; $siswa < count($jml_data); $siswa++) {
                $m = [];
                // cluster
                for ($c=0; $c < $jml_cluster; $c++) {
                    $m[] = $iterasi[$c][$siswa];
                }

                // mencari nilai terkecil
                $index = collect($m)->min();
                $iterasi_min[] = array_search($index, $m)+1;
            }

            return $iterasi_min;
        }

        function total($jml_data, $jml_cluster, $jml_mapel, $iterasi_cluster) {
            for ($c=0; $c < $jml_cluster; $c++){
                // mapel
                for ($mapel=0; $mapel < $jml_mapel; $mapel++){
                    // di reset kembali setiap mapel
                    $total = 0;
                    // siswa
                    for ($siswa=0; $siswa < count($jml_data); $siswa++) {
                        // menghitung total
                        $total += $iterasi_cluster[$c][$siswa][$mapel];
                    }
                    // masukkan total
                    $iterasi_jumlah[$c][$mapel] = $total;
                }
            }

            return $iterasi_jumlah;
        }

        function rata($jml_data, $jml_cluster, $jml_mapel, $iterasi_cluster, $total) {
            for ($c=0; $c < $jml_cluster; $c++){
                // mapel
                for ($mapel=0; $mapel < $jml_mapel; $mapel++){
                    // di reset kembali setiap mapel
                    $jml_selain_0 = 0;
                    // siswa
                    for ($siswa=0; $siswa < count($jml_data); $siswa++) {
                        // menghitung yang tidak bernilai 0
                        $jml_selain_0 += ($iterasi_cluster[$c][$siswa][$mapel] != 0) ? 1 : 0;
                    }
                    // masukkan rata-rata
                    if ($jml_selain_0 === 0) {
                        $iterasi_rata_rata[$c][$mapel] = 0;
                    } else {
                        $iterasi_rata_rata[$c][$mapel] = $total[$c][$mapel] / $jml_selain_0;
                    }
                    
                }
            }

            return $iterasi_rata_rata;
        }

        function hitungUlang($data, $jml_cluster, $jml_mapel, $iterasi_rata_rata, $iterasi_min, $jml){
            for ($siswa=0; $siswa < count($data); $siswa++) {
                $m = [];
                // cluster
                for ($c=0; $c < $jml_cluster; $c++) {
                    // reset kembali
                    $x = 0;
                    // kuadrat mapel
                    for ($mapel=0; $mapel < $jml_mapel; $mapel++) {
                        $x += pow($data[$siswa][$mapel] - $iterasi_rata_rata[$c][$mapel], 2);
                    }
                    $iterasi_n[$c][$siswa] = sqrt($x);
                }
            }

            // mencari jarak terdekat
            $iterasi_n_min = jarakTerdekat($data, $jml_cluster, $iterasi_n);

            $hitung = 0;

            // for ($jarak_terdekat=$jml; $jarak_terdekat < count($iterasi_min)+1; $jarak_terdekat++) {
                for ($siswa=0; $siswa < count($data); $siswa++) {
                    if ($iterasi_n_min[$siswa] != $iterasi_min[$siswa]) {
                        $hitung++;
                    }
                }
            // }

            for ($c=0; $c < $jml_cluster; $c++){
                // siswa
                for ($siswa=0; $siswa < count($data); $siswa++) {
                    // mapel
                    for ($mapel=0; $mapel < $jml_mapel; $mapel++){
                        // membandingkan dengan jarak terdekat
                        $iterasi_n_cluster[$c][$siswa][$mapel] = ($iterasi_n_min[$siswa] == $c+1) ? $data[$siswa][$mapel] : 0;
                    }
                }
            }

            // menghitung total
            $iterasi_n_jumlah = total($data, $jml_cluster, $jml_mapel, $iterasi_n_cluster);

            // menghitung rata rata
            $iterasi_n_rata_rata = rata($data, $jml_cluster, $jml_mapel, $iterasi_n_cluster, $iterasi_n_jumlah);

            // return untuk iterasi, iterasi_min, iterasi_cluster, iterasi_jumlah, iterasi_rata_rata
            return array($iterasi_n, $iterasi_min, $iterasi_n_cluster, $iterasi_n_jumlah, $iterasi_n_rata_rata, $hitung);
        }

        // ITERASI 1

        // Pusat cluster secara acak
        $pst_cluster = 1;
        // jarak antara cluster
        $jrk_antr_cluster = 2;
        // Maksimum Iterasi
        $max_iterasi = 100;

        // Iterasi 1

        // cluster
        for ($c=0; $c < $jml_cluster; $c++) {
            // siswa
            for ($siswa=0; $siswa < count($data); $siswa++) {
                // reset kembali
                $x = 0;
                // kuadrat mapel
                for ($mapel=0; $mapel < $jml_mapel; $mapel++) {
                    $x += pow($data[$siswa][$mapel] - $data[$pst_cluster][$mapel], 2);
                }
                // mengisi akar pangkat dari
                $iterasi[0][$c][$siswa] = sqrt($x);
            }
            // jarak antara cluster
            $pst_cluster+=$jrk_antr_cluster;
        }

        // mencari jarak terdekat
        $iterasi_min[0] = jarakTerdekat($data, $jml_cluster, $iterasi[0]);

        // Cluster

        // cluster
        for ($c=0; $c < $jml_cluster; $c++){
            // siswa
            for ($siswa=0; $siswa < count($data); $siswa++) {
                // mapel
                for ($mapel=0; $mapel < $jml_mapel; $mapel++){
                    // membandingkan dengan jarak terdekat
                    $iterasi_cluster[0][$c][$siswa][$mapel] = ($iterasi_min[0][$siswa] == $c+1) ? $data[$siswa][$mapel] : 0;
                }
            }
        }

        // menghitung total
        $iterasi_jumlah[0] = total($data, $jml_cluster, $jml_mapel, $iterasi_cluster[0]);

        // menghitung rata rata
        $iterasi_rata_rata[0] = rata($data, $jml_cluster, $jml_mapel, $iterasi_cluster[0], $iterasi_jumlah[0]);


        do {
            $iter = 1;
            $hasil = hitungUlang($data, $jml_cluster, $jml_mapel, $iterasi_rata_rata[0], $iterasi_min[0], $iter);
            $iterasi[$iter] = $hasil[0];
            $iterasi_min[$iter] = $hasil[1];
            $iterasi_cluster[$iter] = $hasil[2];
            $iterasi_jumlah[$iter] = $hasil[3];
            $iterasi_rata_rata[$iter] = $hasil[4];
            $iter++;
            $iter >= $max_iterasi ? $hasil[5] = 0 : '';
        } while ($hasil[5] != 0);

        // Rangkuman Baca Iterasi

        // CARA MEMBACA :

        // return $iterasi;
        // iterasi->cluster->siswa

        // return $iterasi_min;
        // iterasi->siswa

        // return $iterasi_cluster;
        // iterasi->cluter->siswa->mapel

        // return $iterasi_jumlah;
        // iterasi->cluter->mapel

        // return $iterasi_rata_rata;
        // iterasi->cluter->mapel


        for ($siswa=0; $siswa < count($user); $siswa++) {
            KMeans::create([
                'user_id' => $user[$siswa],
                'jurusan_id' => $iterasi_min[1][$siswa],
            ]);
        }
        return redirect('/siswa')->with('success', 'KMeans berhasil diproses!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KMeans  $kMeans
     * @return \Illuminate\Http\Response
     */
    public function show(KMeans $kMeans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KMeans  $kMeans
     * @return \Illuminate\Http\Response
     */
    public function edit(KMeans $kMeans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KMeans  $kMeans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KMeans $kMeans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KMeans  $kMeans
     * @return \Illuminate\Http\Response
     */
    public function destroy(KMeans $kMeans)
    {
        KMeans::truncate();
        return redirect('/siswa')->with('success', 'Jurusan berhasil direset!');
    }
}
