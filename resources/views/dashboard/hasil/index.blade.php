@extends('dashboard.layout.main')

@section('container')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Hasil
</h2>
<h4 style="font-size: 25px" class="text-6xl font-semibold text-gray-800 dark:text-gray-300">
    <mark class="px-6 py-3 rounded-lg">Jurusan {{ isset($data[0]->jurusan->nama) ? $data[0]->jurusan->nama : '....' }}
    </mark>
</h4>
@endsection
