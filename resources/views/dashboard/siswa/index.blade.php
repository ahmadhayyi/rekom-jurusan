@extends('dashboard.layout.main')

@section('container')
<h2 class="my-6 text-2xl font-semibold bg- text-gray-700 dark:text-gray-200">
    Daftar Siswa
</h2>
<div class="button">
    <form class="inline" action="/kmeans/1" method="post">
        @csrf @method('delete')
        <button type="submit" class="p-3 py-2 mb-6 text-center cursor-pointer inline text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Reset Clustering
        </button>
    </form>
    <form class="inline" action="/kmeans" method="post">
        @csrf @method('post')
        <button type="submit" class="p-3 py-2 mb-6 text-center cursor-pointer text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Proses Jurusan [K Means Clustering]
        </button>
    </form>
    <div class="inline p-3 py-2">
        @if(session()->has('failed'))
        <span class="text-red-500">Proses gagal, {{ session('failed') }}!</span>
        @endif
    </div>
</div>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">No</th>
                    {{-- <th class="px-4 py-3">Nama</th> --}}
                    <th class="px-4 py-3">NISN</th>
                    @foreach ($mapel_sidebar as $item)
                    <th class="px-4 py-3">{{ $item->nama }}</th>
                    @endforeach
                    @if ($kmeans->count())
                    <th class="px-4 py-3">Jurusan</th>
                    @endif
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($data as $item)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 w-[10px]">{{ (($data->currentPage() - 1) * $data->perPage()) +
                        $loop->iteration }}</td>
                    <td class="px-4 py-3 text-xs">
                        {{ $item->nisn }}
                    </td>
                    @php $urutan = []; @endphp
                    @foreach ($item->nilai as $n ) @php $urutan[] = $n->mapel_id; @endphp @endforeach
                    @foreach ($urutan as $i)
                        @php $color = $item->nilai[$i-1]->nilai >= 80 ? 'bg-green-700 text-green-100' : ($item->nilai[$i-1]->nilai >= 60 && $item->nilai[$i-1]->nilai <= 79 ? 'bg-yellow-700 text-yellow-100' : 'bg-red-700 text-red-100' ); @endphp
                        <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight rounded-full {{ $item->nilai[$i-1]->nilai !== null ? $color : ''}}"> {{ $item->nilai[$i-1]->nilai }}</span>
                        </td>
                    @endforeach
                    @if (isset($item->kmeans[0]))
                    <td class="px-4 py-3">{{ $item->kmeans[0]->jurusan->nama }}</td>
                    @endif
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                            {{-- @include('dashboard.components.edit') --}}
                            @include('dashboard.components.delete')
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('dashboard.components.paginate')
    {{-- {{ $siswa->links() }} --}}
    {{-- <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3">
            Data ke {{ $siswa->firstItem() }}-{{ $siswa->lastItem() }} dari {{ $siswa->total() }}
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
                <ul class="inline-flex items-center">
                    @if (!$siswa->onFirstPage())
                    <li>
                        <a href="{{ $siswa->previousPageUrl() }}"
                            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                            aria-label="Previous">
                            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    @endif
                    @for ($i = 1; $i <= $siswa->lastPage(); $i++)
                        <li>
                            <a href="{{ $siswa->url($i) }}"
                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple {{ $i == $currentPage ? 'text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600' : '' }}">
                                {{ $i }}
                            </a>
                        </li>
                        @endfor
                        @if ($siswa->hasMorePages())
                        <li>
                            <a href="{{ $siswa->nextPageUrl() }}"
                                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Next">
                                <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                    <path
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        @endif
                </ul>
            </nav>
        </span>
    </div> --}}

</div>
@endsection
