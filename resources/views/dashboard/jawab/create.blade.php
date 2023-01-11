@extends('dashboard.layout.main')

@section('container')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Daftar Soal
</h2>
<form action="/jawab" method="post">
    @csrf @method('post')
    <input type="hidden" name="user_id" value="2">
    <input type="hidden" name="mapel_id" value="{{ $soal[0]->mapel->id }}">
    @foreach ($soal as $item)
    <div class="px-4 py-3 mb-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="block">
            <span class="text-gray-700 dark:text-gray-400">{{ $item->pertanyaan }}</span>
        </label>
        <div class="mt-4 text-sm">
            <div class="mt-2">
                <label class="inline-flex mx-3 items-center text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban[{{ $item->id }}]" value="a" required/>
                    <span class="ml-2">{{ $item->a }}</span>
                </label>
                <label class="inline-flex mx-3 items-center text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban[{{ $item->id }}]" value="b" required/>
                    <span class="ml-2">{{ $item->b }}</span>
                </label>
                <label class="inline-flex mx-3 items-center text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban[{{ $item->id }}]" value="c" required/>
                    <span class="ml-2">{{ $item->c }}</span>
                </label>
                <label class="inline-flex mx-3 items-center text-gray-600 dark:text-gray-400">
                    <input type="radio"
                        class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban[{{ $item->id }}]" value="d" required/>
                    <span class="ml-2">{{ $item->d }}</span>
                </label>
            </div>
        </div>
    </div>
    @endforeach
    <div class="text-right">
        <button type="submit"
            class="p-3 py-2 text-center cursor-pointer inline text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Simpan Jawaban
        </button>
    </div>
</form>
@endsection
