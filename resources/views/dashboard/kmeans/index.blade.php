@extends('dashboard.layout.main')

@section('container')
<h2 class="my-6 text-2xl font-semibold bg- text-gray-700 dark:text-gray-200">
    Perhitungan K Means
</h2>
<div class="button">
    <form class="inline" action="/kmeans/1" method="post">
        @csrf @method('delete')
        <button type="submit"
            class="p-3 py-2 mb-6 text-center cursor-pointer inline text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Reset Clustering
        </button>
    </form>
    <form class="inline" action="/kmeans" method="post">
        @csrf @method('post')
        <button type="submit"
            class="p-3 py-2 mb-6 text-center cursor-pointer text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Proses Jurusan [K Means Clustering]
        </button>
    </form>
    <div class="inline p-3 py-2">
        @if(session()->has('failed'))
        <span class="text-red-500">Proses gagal, {{ session('failed') }}!</span>
        @endif
    </div>
</div>
@if(isset($iterasi))
<h2 class="my-4 text-2xl uppercase font-semibold bg- text-gray-700 dark:text-gray-200">
    Kesimpulan
</h2>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">X</th>
                    <th class="px-4 py-3">Soal</th>
                    <th class="px-4 py-3">Atribut</th>
                    <th class="px-4 py-3">Iterasi</th>
                    <th class="px-4 py-3">Cluster</th>
                    <th class="px-4 py-3">Siswa</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <tr
                    class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Jumlah</th>
                    <th class="px-4 py-3">{{ $jml_soal }}</th>
                    <th class="px-4 py-3">{{ count($iterasi_cluster[0][0][0]) }}</th>
                    <th class="px-4 py-3">{{ count($iterasi) }}</th>
                    <th class="px-4 py-3">{{ count($iterasi[0]) }}</th>
                    <th class="px-4 py-3">{{ count($iterasi[0][0]) }}</th>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<h2 class="my-4 text-2xl font-semibold uppercase bg- text-gray-700 dark:text-gray-200">
    Pusat Centroid
</h2>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">ATRIBUT</th>
                    @foreach ($jurusan as $key1 => $i1)
                    <th class="px-4 py-3">{{ $i1->nama }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                {{-- <tr
                    class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    @for ($i = 1; $i <= count($jurusan)*$jrk_antr_cluster; $i+=$jrk_antr_cluster) 
                        <th class="px-4 py-3">{{ $data[$i][1] }}</th>
                    @endfor
                </tr> --}}
                @for ($i = 0; $i < count($mapel) + 1; $i++)
                <tr class="text-xs font-semibold text-center tracking-wide text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">{{ $i > 0 ? $mapel[$i-1]->nama : 'Minat'}}</th>
                    @for ($j = 1; $j <= count($jurusan)*$jrk_antr_cluster; $j+=$jrk_antr_cluster)
                        <th class="px-4 py-3">{{ $data[$j][$i] }} </th>
                    @endfor
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@foreach ($iterasi as $key1 => $i1)
<h2 class="my-6 text-2xl uppercase font-semibold bg- text-gray-700 dark:text-gray-200">
    Iterasi ke {{ $key1+1 }}
</h2>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">SISWA <br> NISN</th>
                    {{-- @php
                    $huruf = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
                    's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
                    $hr = $huruf[count($huruf)-count($mapel)-1];
                    @endphp
                    @foreach ($mapel as $key2 => $i2)
                    <th class="px-4 py-3">{{ $i2->nama }} ({{ $hr++ }})</th>
                    @endforeach
                    <th class="px-4 py-3">Bakat ({{ end($huruf) }})</th> --}}
                    @foreach ($iterasi_cluster[0] as $key2 => $i2)
                    <th class="px-4 py-3">Cluster {{ $key2+1 }} <br> ({{ $jurusan[$key2]->nama }})</th>
                    {{-- <th class="px-4 py-3">{{ $jurusan[$key2]->nama }} (C{{ $key2+1 }})</th> --}}
                    @endforeach
                    <th class="px-4 py-3">cluster <br> (jurusan)</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($iterasi_cluster[0][0] as $key2 => $i2)
                <tr class="text-gray-700 dark:text-gray-400 text-center">
                    <td class="px-4 py-3 text-xs">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3 text-xs">{{ $siswa[$user[$key2]-1]->nisn }}</td>
                    @foreach ($iterasi_jumlah[$key1] as $key3 => $i3)
                    <td class="px-4 py-3 text-xs">
                        <small hidden>
                            @php
                            // if($key3 > 0){
                            // $pst_cluster=+$jrk_antr_cluster;
                            // }
                            // $pst_cluster=+$jrk_antr_cluster;
                            $pst = 1;
                            @endphp
                            @php $str = "SQRT(" @endphp
                            @php
                            foreach ($data[0] as $key4 => $i4){
                            $tutup = "+";
                            count($data[0]) - $key4 == 1 ? $tutup = ")" : $tutup = "+";
                            $str .= "(".$data[$key2][$key4] ."-" . $data[$pst+=2][$key4].")^2". $tutup;
                            }
                            @endphp
                            {{ $str }}
                            <br>
                        </small>
                        {{ number_format($iterasi[$key1][$key3][$key2], 2) }}
                    </td>
                    @endforeach
                    <td class="px-4 py-3 text-xs">C{{ $iterasi_min[$key1][$key2] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- @include('dashboard.components.paginate') --}}
</div>
@endforeach
@endif

@endsection