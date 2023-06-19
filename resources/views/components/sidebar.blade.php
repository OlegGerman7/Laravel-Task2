<div class="bg-red-500 px-4 py-8 text-gray-50 w-80 flex-shrink-0 rounded-2xl">
    <ul class="px-1">
        <li>
            <a
            href="/dashboard"
            class="{{Request::is('dashboard') ? 'underline ' : '' }} px-3 py-2 transition-colors duration-200 relative block hover:text-gray-50 text-gray-100"
            >
            <svg
                class="w-5 mr-2 inline-block"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                />
            </svg>
            Dashboard
            </a>
        </li>
        <li>
            <a
            href="/dashboard/posts/"
            class="{{Request::is('dashboard/posts*') ? 'underline ' : '' }} px-3 py-2 transition-colors duration-200 relative block hover:text-gray-50 text-gray-100"
            >
            <svg
                class="w-5 mr-2 inline-block"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                />
            </svg>
            Posts
            </a>
        </li>
        <li>
            <a
            href="/dashboard/users/"
            class="{{Request::is('dashboard/users*') ? 'underline ' : '' }} px-3 py-2 transition-colors duration-200 relative block hover:text-gray-50 text-gray-100"
            >
            <svg
                class="w-5 mr-2 inline-block"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                />
            </svg>
            Users
            </a>
        </li>
    </ul>
</div>