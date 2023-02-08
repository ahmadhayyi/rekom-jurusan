@extends('dashboard.layout.main')

@section('container')
<h2 class="my-6 text-2xl font-semibold bg- text-gray-700 dark:text-gray-200 capitalize">
    daftar {{ last(explode('/', Request::url())) }}
</h2>
{{-- <div class="button">
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
</div> --}}
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-center text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">No</th>
                    {{-- <th class="px-4 py-3">Nama</th> --}}
                    <th class="px-4 py-3">NISN</th>
                    @foreach ($mapel as $item)
                    <th class="px-4 py-3">{{ $item->nama }}</th>
                    @endforeach
                    <th class="px-4 py-3">Bakat</th>
                    <th class="px-4 py-3">Jurusan</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($data as $key => $item)
                <tr class="text-gray-700 dark:text-gray-400 text-center">
                    <td class="px-4 py-3 w-[10px]">{{ (($data->currentPage() - 1) * $data->perPage()) +
                            $loop->iteration }}</td>
                    <td class="px-4 py-3 text-xs">
                        {{ $item->nisn }}
                    </td>
                    @php $urutan = []; @endphp
                    @foreach ($item->nilai as $n ) @php $urutan[] = $n->mapel_id; @endphp @endforeach
                    @php $urutan[] = 0; @endphp
                    @foreach ($urutan as $key => $i)
                    @if ($i != 0)
                    @php $color = $item->nilai[$key]->nilai >= 80 ? 'bg-green-700 text-green-100' : ($item->nilai[$key]->nilai >= 60 && $item->nilai[$key]->nilai <= 79 ? 'bg-yellow-700 text-yellow-100' : 'bg-red-700 text-red-100' ); @endphp
                    <td class="px-4 py-3 text-xs">
                        <span class="px-2 py-1 font-semibold leading-tight rounded-full {{ $item->nilai[$key]->nilai !== null ? $color : ''}}"> {{ $item->nilai[$key]->nilai }}</span>
                    </td>
                    @endif
                    @endforeach
                    @php $sisa = (count($mapel) + 1) - count($urutan) ; @endphp
                    @for ($i = 0; $i < $sisa; $i++)
                        <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight rounded-full"></span>
                        </td>
                    @endfor

                    @foreach ($item->nilai as $item1)
                    @if ($item1->mapel_id == 0)
                        @php $color = $item1->nilai >= 80 ? 'bg-green-700 text-green-100' : ($item1->nilai >= 60 && $item1->nilai <= 79 ? 'bg-yellow-700 text-yellow-100' : 'bg-red-700 text-red-100' ); @endphp
                        <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight rounded-full {{ $color }}"> {{ $item1->nilai }}</span>
                        </td>
                        @endif
                    @endforeach
                    
                    <td class="px-4 py-3"> 
                        @if (isset($item->kmeans[0]))
                            {{ $item->kmeans[0]->jurusan->nama }} 
                        @endif
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center justify-center space-x-4 text-sm">
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
</div>
@endsection
