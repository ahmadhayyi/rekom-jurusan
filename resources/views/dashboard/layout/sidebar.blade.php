<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 flex-shrink-0 overflow-y-auto bg-white dark:bg-gray-800 md:block">
    <div class="text-gray-500 py-4 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200 capitalize" href="#">
            {{ auth()->user()->level == 1 ? auth()->user()->username : auth()->user()->nisn }}
        </a>
        <ul class="mt-6">
            @if (auth()->user()->level == 1)
            <li class="relative px-6 py-3 {{ Request::is('/') ? 'bg-slate-700' : '' }}">
                @if (Request::is('/'))
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600"
                    aria-hidden="true"></span>
                @endif
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="/">
                    <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
            <li class="relative px-6 py-3 {{ Request::is('mapel*') ? 'bg-slate-700' : '' }}">
                @if (Request::is('mapel*'))
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600"
                    aria-hidden="true"></span>
                @endif
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="/mapel">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span class="ml-4">Mapel</span>
                </a>
            </li>
            <li class="relative px-6 py-3 {{ Request::is('minat*') ? 'bg-slate-700' : '' }}">
                @if (Request::is('minat*'))
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600"
                    aria-hidden="true"></span>
                @endif
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="/minat">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span class="ml-4">Minat</span>
                </a>
            </li>
            <li class="relative px-6 py-3 {{ Request::is('soal*') ? 'bg-slate-700' : '' }}">
                @if (Request::is('soal*'))
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600" aria-hidden="true"></span>
                @endif
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="/soal">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                        </path>
                    </svg>
                    <span class="ml-4">Soal</span>
                </a>
            </li>
            <li class="relative px-6 py-3 {{ Request::is('jurusan*') ? 'bg-slate-700' : '' }}">
                @if (Request::is('jurusan*'))
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600"
                    aria-hidden="true"></span>
                @endif
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="/jurusan">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span class="ml-4">Jurusan</span>
                </a>
            </li>
            <li class="relative px-6 py-3 {{ Request::is('siswa*') ? 'bg-slate-700' : '' }}">
                @if (Request::is('siswa*'))
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600" aria-hidden="true"></span>
                @endif
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="/siswa">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    <span class="ml-4">Siswa</span>
                </a>
            </li>
            <li class="relative px-6 py-3 {{ Request::is('kmeans*') ? 'bg-slate-700' : '' }}">
                @if (Request::is('kmeans*'))
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600" aria-hidden="true"></span>
                @endif
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="/kmeans">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                        </path>
                    </svg>
                    <span class="ml-4">K Means</span>
                </a>
            </li>
            {{-- <li class="relative px-6 py-3 {{ Request::is('admin') ? 'bg-slate-700' : '' }}">
                @if (Request::is('admin*'))
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600" aria-hidden="true"></span>
                @endif
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="/admin">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    <span class="ml-4">Admin</span>
                </a>
            </li> --}}
            @endif
            @if (auth()->user()->level == 2)
            <li class="relative px-6 py-3 {{ Request::is('informasi') ? 'bg-slate-700' : '' }}">
                @if (Request::is('informasi*'))
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600"
                    aria-hidden="true"></span>
                @endif
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="/informasi">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                        </path>
                    </svg>
                    <span class="ml-4">Informasi</span>
                </a>
            </li>
            <li class="relative px-6 py-3 {{ Request::is('jawab') ? 'bg-slate-700' : '' }}">
                @if (Request::is('jawab*'))
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600"
                    aria-hidden="true"></span>
                @endif
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="/jawab">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                        </path>
                    </svg>
                    <span class="ml-4">Rekomendasi</span>
                </a>
            </li>
            <li class="relative px-6 py-3 {{ Request::is('hasil') ? 'bg-slate-700' : '' }}">
                @if (Request::is('hasil*'))
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600"
                    aria-hidden="true"></span>
                @endif
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="/hasil">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                        </path>
                    </svg>
                    <span class="ml-4">Hasil</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</aside>
<!-- Mobile sidebar -->
<!-- Backdrop -->
<div class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"></div>
<aside class="fixed inset-y-0 z-20 mt-16 w-64 flex-shrink-0 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
    x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
    @keydown.escape="closeSideMenu">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#"> Windmill </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600"
                    aria-hidden="true"></span>
                <a class="inline-flex w-full items-center text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:text-gray-100 dark:hover:text-gray-200"
                    href="index.html">
                    <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>
        <div class="my-6 px-6">
            <button
                class="focus:shadow-outline-purple flex items-center justify-between rounded-lg border border-transparent bg-purple-600 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 hover:bg-purple-700 focus:outline-none active:bg-purple-600">
                Create account
                <span class="ml-2" aria-hidden="true">+</span>
            </button>
        </div>
    </div>
</aside>
