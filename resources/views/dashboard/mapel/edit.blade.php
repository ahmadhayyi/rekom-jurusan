@extends('dashboard.layout.main')

@section('container')
<h2 class="my-6 text-2xl font-semibold bg- text-gray-700 dark:text-gray-200">
    Edit Mata Pelajaran
</h2>
<div class="px-4 py-3 mb-8 w-3/4 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <form action="/mapel/{{ $mapel->id }}" method="post">
        @csrf @method('put')
        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Nama Mata Pelajaran</span>
            <input
                class="block w-full mt-5 p-2 rounded-lg text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="" value="{{ old('nama', $mapel->nama) }}" name="nama" autofocus />
        </label>

        <div class="mt-5 text-right">
            <button type="submit"
                class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Simpan Mapel
            </button>
        </div>
    </form>
</div>
@endsection
