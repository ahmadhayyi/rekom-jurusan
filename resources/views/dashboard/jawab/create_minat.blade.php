@extends('dashboard.layout.main')

@section('container')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Daftar Soal
</h2>
<form action="/jawab/minat" method="post">
    @csrf @method('post')
    <input type="hidden" name="user_id" value="2">
    <input type="hidden" name="mapel_id" value="0">
    <div class="px-4 py-3 mb-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="block">
            <span class="text-gray-700 dark:text-gray-400">Pilih Minat dan Bakat Anda</span>
        </label>
        <div class="mt-4 text-sm">
            <div class="mt-2">
                @foreach ($minat as $item)
                <label class="inline-flex mx-3 my-3 items-center text-gray-600 dark:text-gray-400">
                    <input type="checkbox"
                        class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        name="jawaban[]" value="{{ $item->nama }}"/>
                    <span class="ml-2 capitalize">{{ $item->nama }}</span>
                </label>
                @endforeach
            </div>
        </div>
    </div>
    <div class="text-right">
        <button type="submit"
            class="p-3 py-2 text-center cursor-pointer inline text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Simpan Jawaban
        </button>
    </div>
</form>
@endsection