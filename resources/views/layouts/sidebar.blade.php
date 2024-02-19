<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="fixed top-0 z-50 w-full bg-primary">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-white sm:hidden hover:bg-secondary">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="/dashboard" class="flex ms-2 md:me-24">
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">DASHBOARD</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div class="flex">
                            <p class="text-white">Annyeong👋 {{ auth()->user()->username }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-secondary border-r border-secondary sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-secondary">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center p-2 text-white hover:bg-primary rounded-lg group">
                        <i class="fa-solid fa-gauge fa-fw text-xl pr-2"></i>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('a-user') }}"
                        class="flex items-center p-2 text-white hover:bg-primary rounded-lg group">
                        <i class="fa-solid fa-user fa-fw text-xl pr-2"></i>
                        <span class="ms-3">Users</span>
                    </a>
                </li>
                <hr>
                <li>
                    <a href="/" class="flex items-center p-2 text-white hover:bg-primary rounded-lg group">
                        <i class="fa-regular fa-eye fa-fw text-xl pr-2"></i>
                        <span class="ms-3">View Page</span>
                    </a>
                </li>
                <hr>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" onclick="return confirm('Apakah kamu yakin ingin logout?')"
                            class="w-full block px-4 py-2 font-semibold text-white rounded-lg bg-red-600">Log Out
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            @yield('container')
        </div>
    </div>

</body>

</html>
