<!-- Profile menu -->
<li class="relative">
    <button class="focus:shadow-outline-purple rounded-full align-middle focus:outline-none" aria-label="Account" aria-haspopup="true" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu">
        <img class="h-8 w-8 rounded-full object-cover" src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82" alt="" aria-hidden="true" />
    </button>
    <template x-if="isProfileMenuOpen">
        <ul class="absolute right-0 mt-2 w-56 space-y-2 rounded-md border border-gray-100 bg-white p-2 text-gray-600 shadow-md dark:border-gray-700 dark:bg-gray-700 dark:text-gray-300" aria-label="submenu" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu">
            {{-- <li class="flex">
                <a class="inline-flex w-full items-center rounded-md px-2 py-1 text-sm font-semibold transition-colors duration-150 hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                    <svg class="mr-3 h-4 w-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>Profile</span>
                </a>
            </li>
            <li class="flex">
                <a class="inline-flex w-full items-center rounded-md px-2 py-1 text-sm font-semibold transition-colors duration-150 hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                    <svg class="mr-3 h-4 w-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Settings</span>
                </a>
            </li> --}}
            <li class="flex">
                <form class="w-full" action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="inline-flex w-full items-center rounded-md px-2 py-1 text-sm font-semibold transition-colors duration-150 hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                        <svg class="mr-3 h-4 w-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        Log out
                    </button>
                </form>
            </li>
        </ul>
    </template>
</li>
