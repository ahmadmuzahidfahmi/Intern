<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mini CRM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="bg-indigo-600 text-white p-4">
        <div class="flex justify-between">
            <span class="font-bold">Mini CRM</span>
            <div>
                <a href="{{ route('dashboard') }}" class="px-3">Dashboard</a>
                <a href="#" class="px-3">Customers</a>
                <a href="#" class="px-3">Leads</a>
            </div>
        </div>
    </nav>
    <!-- page content -->
    <main class="p-6">
        @yield('content')
    </main>
    <footer class="bg-gray-200 text-center p-4">
       Mini CRM &copy; {{ date('Y') }} 
    </footer>
</body>
</html>
