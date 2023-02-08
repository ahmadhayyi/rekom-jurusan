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
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Mata Pelajaran</span>
            <select name="mapel_id"
                class="form-select block mt-2 p-2 rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray">
                @foreach ($mapel as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </label>

        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400 capitalize">{{ $title }}</span>
            {{-- <textarea
                class="block w-full mt-2 p-2 rounded-lg text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                name="" id="" cols="30" rows="10"></textarea> --}}
            <input
                class="block w-full rounded-lg mt-2 p-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Tulis Pertanyaan" value="{{ old('pertanyaan') }}" name="pertanyaan" />
        </label>

        <div class="mt-6 text-sm">

            <span class="text-gray-700 dark:text-gray-400">
                Jawaban
            </span>
            <div class="mt-2">
                <label class="items-center mb-2 block w-full text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio mx-2 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban" value="a" checked />
                    <input type="text" name="a"
                        class=" mt-2 checked:bg-purple-500 p-2 w-[96.2%] rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jawaban A" value="{{ old('a') }}">
                </label>
                <label class="items-center mb-2 block w-full text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio mx-2 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban" value="b" />
                    <input type="text" name="b"
                        class=" mt-2 checked:bg-purple-500 p-2 w-[96.2%] rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jawaban B" value="{{ old('b') }}">
                </label>
                <label class="items-center mb-2 block w-full text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio mx-2 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban" value="c" />
                    <input type="text" name="c"
                        class=" mt-2 checked:bg-purple-500 p-2 w-[96.2%] rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jawaban C" value="{{ old('c') }}">
                </label>
                <label class="items-center mb-2 block w-full text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio mx-2 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban" value="d" />
                    <input type="text" name="d"
                        class=" mt-2 checked:bg-purple-500 p-2 w-[96.2%] rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jawaban D" value="{{ old('d') }}">
                </label>
            </div>
        </div>
        <div class="mt-5 text-right">
            @include('dashboard.components.save')
        </div>
    </form>
</div>
@endsection