@if(session()->has('success'))
    <p class="text-red-500 text-center my-2">{{ session('success') }}</p>
@else
    <p class="text-red-500 text-center my-2">{{ session('failed') }}</p>
@endif
