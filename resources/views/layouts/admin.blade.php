<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="flex-shrink-0 w-64 flex flex-col border-r border-gray-200 bg-white transition-all duration-300"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0 fixed md:static h-full z-30'">
            <div class="h-16 flex items-center justify-center border-b border-gray-200">
                <span class="text-xl font-bold text-gray-800">Admin Panel</span>
            </div>
            <nav class="flex-1 overflow-y-auto py-4">
                <ul class="space-y-1 px-4">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md {{ request()->routeIs('admin.dashboard') ? 'bg-gray-100 font-semibold' : '' }}">
                            <i class="fas fa-home w-5 mr-3 text-blue-600"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.hero-sections.index') }}"
                            class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md {{ request()->routeIs('admin.hero-sections.*') ? 'bg-gray-100 font-semibold' : '' }}">
                            <i class="fas fa-images w-5 mr-3 text-blue-600"></i>
                            Hero Sections
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.vouchers.index') }}"
                            class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md {{ request()->routeIs('admin.vouchers.*') ? 'bg-gray-100 font-semibold' : '' }}">
                            <i class="fas fa-ticket-alt w-5 mr-3 text-blue-600"></i>
                            Vouchers
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.benefits.index') }}"
                            class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md {{ request()->routeIs('admin.benefits.*') ? 'bg-gray-100 font-semibold' : '' }}">
                            <i class="fas fa-star w-5 mr-3 text-blue-600"></i>
                            Benefits
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.testimonials.index') }}"
                            class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md {{ request()->routeIs('admin.testimonials.*') ? 'bg-gray-100 font-semibold' : '' }}">
                            <i class="fas fa-comments w-5 mr-3 text-blue-600"></i>
                            Testimonials
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.faqs.index') }}"
                            class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md {{ request()->routeIs('admin.faqs.*') ? 'bg-gray-100 font-semibold' : '' }}">
                            <i class="fas fa-question-circle w-5 mr-3 text-blue-600"></i>
                            FAQs
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.settings.index') }}"
                            class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md {{ request()->routeIs('admin.settings.index') ? 'bg-gray-100 font-semibold' : '' }}">
                            <i class="fas fa-cog w-5 mr-3 text-blue-600"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="p-4 border-t border-gray-200">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 rounded-md flex items-center">
                        <i class="fas fa-sign-out-alt w-5 mr-3"></i>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            <!-- Navbar -->
            <header class="bg-white border-b border-gray-200 shadow-sm z-10">
                <div class="px-4 py-4 flex items-center justify-between">
                    <button @click="sidebarOpen = !sidebarOpen"
                        class="md:hidden text-gray-500 hover:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <div class="text-gray-800 font-semibold">
                        @yield('header', 'Admin Dashboard')
                    </div>
                    <div class="flex items-center">
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open"
                                class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 focus:outline-none transition">
                                <span class="text-sm font-medium">{{ Auth::user()->name ?? 'Admin' }}</span>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-200"
                                    :class="open ? 'rotate-180' : ''"></i>
                            </button>

                            <div x-show="open" @click.away="open = false"
                                x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg py-2 z-20">
                                <a href="{{ route('profile.edit') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition">
                                    <i class="fas fa-user-circle mr-2 text-blue-600"></i> Edit Profile
                                </a>
                                <hr class="my-1 border-gray-100">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto bg-gray-100 p-6">
                @if(session('success'))
                    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                @yield('content')
            </main>
        </div>

        <!-- Overhead for sidebar on mobile -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 z-20 bg-black opacity-50 md:hidden">
        </div>
    </div>
</body>

</html>