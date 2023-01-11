@extends('dashboard.layout.main')

@section('container')
<h2 class="my-6 text-2xl font-semibold bg- text-gray-700 dark:text-gray-200">
    Jurusan
</h2>
<div class="flex justify-between mb-7">
    @include('dashboard.components.create')
</div>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($data as $item)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 w-[10px]">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3">{{ $item->nama }}</td>
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
    @include('dashboard.components.paginate')
</div>
@endsection
