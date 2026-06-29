<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mini CRM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- Header / Navigation -->
<nav class="bg-gradient-to-r from-indigo-700 to-indigo-600 text-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo & Brand -->
        <div class="flex items-center space-x-3">
            <div class="bg-white text-indigo-700 p-2 rounded-lg shadow">
            <img
                src="{{ asset('image/Visivest Logo.png') }}"
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
                class="font-medium hover:text-indigo-200 transition duration-200">
                Dashboard
            </a>

            <a href="#"
                class="font-medium hover:text-indigo-200 transition duration-200">
                Customers
            </a>

            <a href="#"
                class="font-medium hover:text-indigo-200 transition duration-200">
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
