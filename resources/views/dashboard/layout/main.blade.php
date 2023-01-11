<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="/dashboard/js/init-alpine.js"></script>
    {{--
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
        <script src="./assets/js/charts-lines.js" defer></script>
        <script src="./assets/js/charts-pie.js" defer></script> --}}
    <title>Rekomendasi Jurusan</title>
    @yield('title')
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('dashboard.layout.sidebar')
        <div class="flex w-full flex-1 flex-col">
            <header class="z-10 bg-white py-4 shadow-md dark:bg-gray-800">
                <div
                    class="container mx-auto flex h-full items-center justify-between px-6 text-purple-600 dark:text-purple-300">
                    <!-- Mobile hamburger -->
                    <button class="focus:shadow-outline-purple mr-5 -ml-1 rounded-md p-1 focus:outline-none md:hidden"
                        aria-label="Menu" @click="toggleSideMenu">
                        <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Search input -->
                    <div class="flex flex-1 justify-center lg:mr-32">
                        <div class="relative mr-6 w-full max-w-xl focus-within:text-purple-500">
                        </div>
                    </div>
                    <ul class="flex flex-shrink-0 items-center space-x-6">
                        {{-- @include('dashboard.components.theme')
                        @include('dashboard.components.notifications') --}}
                        @include('dashboard.components.profile')
                    </ul>
                </div>
            </header>
            <main class="h-full overflow-y-auto">
                <div class="container bg px-6 mx-auto grid">
                    @yield('container')
                </div>
            </main>
        </div>
    </div>
    @yield('footer')
</body>

</html>
