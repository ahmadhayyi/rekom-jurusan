<!-- Notifications menu -->
<li class="relative">
    <button class="focus:shadow-outline-purple relative rounded-md align-middle focus:outline-none" aria-label="Notifications" aria-haspopup="true" @click="toggleNotificationsMenu" @keydown.escape="closeNotificationsMenu">
        <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
        </svg>
        <!-- Notification badge -->
        <span class="absolute top-0 right-0 inline-block h-3 w-3 translate-x-1 -translate-y-1 transform rounded-full border-2 border-white bg-red-600 dark:border-gray-800" aria-hidden="true"></span>
    </button>
    <template x-if="isNotificationsMenuOpen">
        <ul class="absolute right-0 mt-2 w-56 space-y-2 rounded-md border border-gray-100 bg-white p-2 text-gray-600 shadow-md dark:border-gray-700 dark:bg-gray-700 dark:text-gray-300" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeNotificationsMenu" @keydown.escape="closeNotificationsMenu">
            <li class="flex">
                <a class="inline-flex w-full items-center justify-between rounded-md px-2 py-1 text-sm font-semibold transition-colors duration-150 hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                    <span>Messages</span>
                    <span class="inline-flex items-center justify-center rounded-full bg-red-100 px-2 py-1 text-xs font-bold leading-none text-red-600 dark:bg-red-600 dark:text-red-100">
                        13
                    </span>
                </a>
            </li>
            <li class="flex">
                <a class="inline-flex w-full items-center justify-between rounded-md px-2 py-1 text-sm font-semibold transition-colors duration-150 hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                    <span>Sales</span>
                    <span class="inline-flex items-center justify-center rounded-full bg-red-100 px-2 py-1 text-xs font-bold leading-none text-red-600 dark:bg-red-600 dark:text-red-100">
                        2
                    </span>
                </a>
            </li>
            <li class="flex">
                <a class="inline-flex w-full items-center justify-between rounded-md px-2 py-1 text-sm font-semibold transition-colors duration-150 hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="#">
                    <span>Alerts</span>
                </a>
            </li>
        </ul>
    </template>
</li>
