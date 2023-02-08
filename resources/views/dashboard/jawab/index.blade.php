@extends('dashboard.layout.main')

@section('container')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Soal
</h2>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Mapel</th>
                    <th class="px-4 py-3">Soal</th>
                    <th class="px-4 py-3">Nilai</th>
                    <th class="px-4 py-3">Kerjakan</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($mapel as $key => $item)
                @if ($item->soal->count() != 0)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full"
                                    src="https://robohash.org/{{ $item->id }}" alt="" loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                </div>
                            </div>
                            <div>
                                <p class="font-semibold">{{ $item->nama }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">{{ $item->soal->count() }}</td>
                    <td class="px-4 py-3 text-xs">
                        @foreach ($nilai as $n)
                            @if ($item->id == $n->mapel_id)
                                @if ($n->nilai >= 80)
                                    <span class="px-2 py-1 font-semibold leading-tight rounded-full bg-green-700 text-green-100">{{ $n->nilai }}</span>
                                @elseif ($n->nilai >= 60 && $n->nilai <= 79)
                                    <span class="px-2 py-1 font-semibold leading-tight rounded-full bg-warning-700 text-warning-100">{{ $n->nilai }}</span>
                                @elseif ($n->nilai === null)
                                    {{-- <span class="px-2 py-1 font-semibold leading-tight rounded-full bg-red-700 text-red-100">{{ $n->nilai }}</span> --}}
                                @else
                                    <span class="px-2 py-1 font-semibold leading-tight rounded-full bg-red-700 text-red-100">{{ $n->nilai }}</span>
                                @endif
                            @endif
                        @endforeach
                    </td>
                    @foreach ($nilai as $key =>  $n)
                        @if ($item->id == $n->mapel_id)
                            @if ($n->nilai === null)
                                <td class="px-4 py-3 text-sm"><a href="/jawab/create?id={{ $item->id }}" class="px-3 py-2 text-center cursor-pointer w-[120px] inline text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Jawab </a></td>
                            @else
                                <td class="px-4 py-3 text-sm"><a class="px-3 py-2 text-center opacity-30 cursor-not-allowed w-[120px] inline text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600focus:outline-none focus:shadow-outline-purple">Jawab </a></td>
                            @endif
                        @endif
                    @endforeach
                </tr>
                @endif
                @endforeach
                
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full" src="https://robohash.org/{{ rand(10,100)}}" alt=""
                                    loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                </div>
                            </div>
                            <div>
                                <p class="font-semibold">Minat</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3">
                        -
                    </td>
                    @if ($minat->mapel_id == 0 && $minat->nilai == 0)
                        <td class="px-4 py-3 text-xs"></td>
                    @else
                        <td class="px-4 py-3 text-xs">
                            @if ($minat->nilai >= 80)
                                <span class="px-2 py-1 font-semibold leading-tight rounded-full bg-green-700 text-green-100">{{ $minat->nilai }}</span>
                            @elseif ($minat->nilai >= 60 && $minat->nilai <= 79) 
                                <span class="px-2 py-1 font-semibold leading-tight rounded-full bg-warning-700 text-warning-100">{{ $minat->nilai }}</span>
                            @else
                                <span class="px-2 py-1 font-semibold leading-tight rounded-full bg-red-700 text-red-100">{{ $minat->nilai }}</span>
                            @endif
                        </td>
                    @endif
                    <td class="px-4 py-3">
                        @if ($minat->nilai == 0)
                            <a href="/jawab/minat" class="px-3 py-2 text-center cursor-pointer w-[120px] inline text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Jawab </a>
                        @else
                            <a class="px-3 py-2 text-center opacity-30 cursor-not-allowed w-[120px] inline text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600focus:outline-none focus:shadow-outline-purple">Jawab </a>
                        @endif
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
@endsection
