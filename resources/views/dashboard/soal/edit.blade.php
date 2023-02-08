@extends('dashboard.layout.main')

@php
    $title3 = explode('/', Request::url())[count(explode('/', Request::url())) - 3];
@endphp

@section('container')
<h2 class="my-6 text-2xl font-semibold bg- text-gray-700 dark:text-gray-200 capitalize">
    Edit {{ $title3 }}
</h2>
<div class="px-4 py-3 mb-8 w-3/4 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <form action="/{{ $title3 }}/{{ $soal->id }}" method="post">
        @csrf @method('put')
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Soal</span>
            {{-- <textarea
                class="block w-full mt-2 p-2 rounded-lg text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                name="" id="" cols="30" rows="10"></textarea> --}}
            <input
                class="block w-full mt-2 p-2 rounded-lg text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Tulis Pertanyaan" value="{{ $soal->pertanyaan }}" name="pertanyaan" />
        </label>

        <div class="mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
                Jawaban
            </span>
            <div class="mt-2">
                <label class="items-center mb-2 block w-full text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio mx-2 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban" @if ($soal->jawaban == 'a')
                    checked
                    @endif value="a"/>
                    <input type="text" name="a"
                        class=" mt-2 checked:bg-purple-500 p-2 w-[96.2%] rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jawaban A" value="{{ old('a', $soal->a) }}">
                </label>
                <label class="items-center mb-2 block w-full text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio mx-2 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban" @if ($soal->jawaban == 'b')
                    checked
                    @endif value="b"/>
                    <input type="text" name="b"
                        class=" mt-2 checked:bg-purple-500 p-2 w-[96.2%] rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jawaban B" value="{{ old('b', $soal->b) }}">
                </label>
                <label class="items-center mb-2 block w-full text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio mx-2 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban" @if ($soal->jawaban == 'c')
                    checked
                    @endif value="c"/>
                    <input type="text" name="c"
                        class=" mt-2 checked:bg-purple-500 p-2 w-[96.2%] rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jawaban C" value="{{ old('c', $soal->c) }}">
                </label>
                <label class="items-center mb-2 block w-full text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio mx-2 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban" @if ($soal->jawaban == 'd')
                    checked
                    @endif value="d"/>
                    <input type="text" name="d"
                        class=" mt-2 checked:bg-purple-500 p-2 w-[96.2%] rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jawaban D" value="{{ old('d', $soal->d) }}">
                </label>
            </div>
        </div>
        <div class="mt-5 text-right">
            @include('dashboard.components.save')
        </div>
    </form>
</div>
@endsection
