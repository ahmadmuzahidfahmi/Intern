<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mini CRM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- Header / Navigation -->
    <nav class="bg-[rgb(70,192,189)] text-white shadow-lg sticky top-0 z-50">   
<div class="w-full px-6 py-4 flex items-center justify-between">
        <!-- Logo & Brand -->
        <div class="flex items-center space-x-3">
            <div>
            <img
                src="{{ asset('image/Visivest Logo_White.png') }}"
                alt="Visivest Logo"
                style="height:150px; width:auto;">
            </div>

            <div>
                <h1 class="font-bold text-xl tracking-wide">
                    Customer Management System
                </h1>
            </div>
        </div>

        <!-- Navigation -->
        <div class="hidden md:flex items-center space-x-8">
            <a href="{{ route('dashboard') }}"
            class="text-white pb-1 {{ request()->routeIs('dashboard') ? 'border-b-2 border-white' : '' }}">
                Dashboard
            </a>

            <a href="{{ route('customers') }}"
            class="text-white pb-1 {{ request()->routeIs('customers') ? 'border-b-2 border-white' : '' }}">
                Customers
            </a>

            <a href="{{ route('leads') }}"
            class="text-white pb-1 {{ request()->routeIs('leads') ? 'border-b-2 border-white' : '' }}">
                Leads
            </a>

            <a href="#"
                class="font-medium hover:text-indigo-200 transition duration-200">
                Reports
            </a>
        </div>

        <!-- User Profile -->
        <div class="flex items-center space-x-3">
            <div class="text-right hidden sm:block">
                <p class="font-semibold">Admin</p>
                <p class="text-xs text-indigo-200">System Manager</p>
            </div>

            <div
                class="w-10 h-10 rounded-full bg-white text-indigo-700 flex items-center justify-center font-bold shadow">
                A
            </div>
        </div>

    </div>
</nav>

    <!-- Page content -->
    <main class="p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-gray-600 text-sm text-center py-4 mt-10">
        <p>&copy; {{ date('Y') }} Mini CRM. All rights reserved.</p>
    </footer>

</body>
</html>
