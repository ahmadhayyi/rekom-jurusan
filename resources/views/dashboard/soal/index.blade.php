@extends('dashboard.layout.main')

@section('container')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Soal
</h2>
<div class="flex justify-between mb-7">
    @include('dashboard.components.create')
    <select name="mapel_id" id="mapel_id"
        class="form-select p-3 py-2 rounded-lg dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray">
        <option value="00">Semua Soal</option>
        @foreach ($mapel_sidebar as $item)
        <option value="{{ $item->id }}">{{ $item->nama }}</option>
        @endforeach
    </select>
</div>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Pertanyaan</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody id="content" class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($soal as $item)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 font-bold align-top">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <div>
                                <p class="font-semibold text-gray-50 mb-3">{{ $item->pertanyaan }}</p>
                                <p class="text-xs mt-3 text-gray-600 dark:text-gray-400">
                                    <p
                                        class="my-2 {{ $item->jawaban == 'a' ? 'bg-purple-600 text-gray-50 inline' : ''  }} rounded-md mx-1 px-2 py-1 font-bold">a.
                                        {{ $item->a }}</p>
                                    <p
                                        class="my-2 {{ $item->jawaban == 'b' ? 'bg-purple-600 text-gray-50 inline' : ''  }} rounded-md mx-1 px-2 py-1 font-bold">b.
                                        {{ $item->b }}</p>
                                    <p
                                        class="my-2 {{ $item->jawaban == 'c' ? 'bg-purple-600 text-gray-50 inline' : ''  }} rounded-md mx-1 px-2 py-1 font-bold">c.
                                        {{ $item->c }}</p>
                                    <p
                                        class="my-2 {{ $item->jawaban == 'd' ? 'bg-purple-600 text-gray-50 inline' : ''  }} rounded-md mx-1 px-2 py-1 font-bold">d.
                                        {{ $item->d }}</p>
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                            @include('dashboard.components.edit')
                            @include('dashboard.components.delete')
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        @endsection


        @section('footer')
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script>
            $('#mapel_id').on('change', function(){
                let mapel_id = $(this).val();
                if (mapel_id) {
                    $.ajax({
                        url: `/soal/mapel/${mapel_id}`,
                        method: 'get',
                        datatype: 'json',
                        success: (data) => {
                            // console.log(data);
                            $('#content').empty();
                            $.each(data, function (i, v) {
                                $('#content').append(
                                    `<tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3 font-bold align-top">${i+1}</td>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold text-gray-50">${v.pertanyaan}</p>
                                                    <p class="text-xs mt-3 text-gray-600 dark:text-gray-400">
                                                        <p
                                                            class="my-2 ${ v.jawaban == 'a' ? 'bg-purple-600 text-gray-50 inline' : '' } rounded-md mx-1 px-2 py-1 font-bold">a.
                                                            ${v.a}</p>
                                                        <p
                                                            class="my-2 ${ v.jawaban == 'b' ? 'bg-purple-600 text-gray-50 inline' : '' } rounded-md mx-1 px-2 py-1 font-bold">b.
                                                            ${v.b}</p>
                                                        <p
                                                            class="my-2 ${ v.jawaban == 'c' ? 'bg-purple-600 text-gray-50 inline' : '' } rounded-md mx-1 px-2 py-1 font-bold">c.
                                                            ${v.c}</p>
                                                        <p
                                                            class="my-2 ${ v.jawaban == 'd' ? 'bg-purple-600 text-gray-50 inline' : '' } rounded-md mx-1 px-2 py-1 font-bold">d.
                                                            ${v.d}</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center space-x-4 text-sm">
                                                <a href="/soal/${v.id}/edit"
                                                    class="flex items-center justify-between px-1 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                    aria-label="Edit">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <form action="/soal/${v.id}" method="post">
                                                    @csrf @method('delete')
                                                    <button type="submit" onclick="return confirm('Yakin untuk menghapus data?')"
                                                        class="flex items-center justify-between px-1 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                        aria-label="Delete">
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>`
                                );
                            });
                        },
                        error: (err) => {
                            console.log(err);
                        }
                    });
                }
            });
        </script>
        @endsection
