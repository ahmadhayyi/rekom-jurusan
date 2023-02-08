@extends('dashboard.layout.main')

@php
    $title = explode('/', Request::url())[count(explode('/', Request::url())) - 2];
@endphp

@section('container')
<h2 class="my-6 text-2xl font-semibold bg- text-gray-700 dark:text-gray-200 capitalize">
    Tambah {{ $title }}
</h2>
<div class="px-4 py-3 mb-8 w-3/4 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <form action="/{{ $title }}" method="post">
        @csrf @method('post')
        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400 capitalize">Nama {{ $title }}</span>
            <input
                class="block w-full mt-5 p-2 rounded-lg text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="" value="{{ old('nama') }}" name="nama" required autofocus />
        </label>

        <div class="mt-5 text-right">
            @include('dashboard.components.save')
        </div>
    </form>
</div>
@endsection
