<head> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-gray-800 mb-6">
        Dashboard
    </h1>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white rounded-lg shadow p-8 sm:p-6">
            <p class="text-base sm:text-sm text-gray-500">Total Customers</p>
            <p class="text-4xl sm:text-3x1 font-bold text-indigo-600">0</p>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500">Total Leads</p>
            <p class="text-3xl font-bold text-green-600">0</p>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500">Won Leads</p>
            <p class="text-3xl font-bold text-emerald-600">0</p>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500">Lost Leads</p>
            <p class="text-3xl font-bold text-red-600">0</p>
        </div>
    </div>

    <!-- Customer Growth Graph -->
    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">
            Customer Growth
        </h2>

        <div class="h-64 flex items-center justify-center text-gray-400">
            Graph will go here
        </div> 
    </div>
<!-- Recent Customers & Upcoming Follow-Ups -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

    <!-- Recent Customers -->
    <div class="bg-white rounded-lg shadow p-6 mb-3">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">
            Recent Customers
        </h2>

        <table class="w-full text-sm">
            <thead>
                <tr class="border-b">
                    <th class="text-left py-2">Name</th>
                    <th class="text-left py-2">Company</th>
                    <th class="text-left py-2">Date Added</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="py-2">John Doe</td>
                    <td>ABC Sdn Bhd</td>
                    <td>30 Jun 2026</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2">Sarah Lim</td>
                    <td>XYZ Tech</td>
                    <td>29 Jun 2026</td>
                </tr>
                <tr>
                    <td class="py-2">Ahmad Rahman</td>
                    <td>Visivest</td>
                    <td>28 Jun 2026</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Upcoming Follow-Ups -->
    <div class="bg-white rounded-lg shadow p-6 mb-3">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">
            Upcoming Follow-Ups
        </h2>

        <div class="space-y-3">
            <div class="border-l-4 border-blue-500 pl-3">
                <p class="font-medium">John Doe</p>
                <p class="text-sm text-gray-500">Product demo - Today</p>
            </div>

            <div class="border-l-4 border-yellow-500 pl-3">
                <p class="font-medium">Sarah Lim</p>
                <p class="text-sm text-gray-500">Follow-up call - Tomorrow</p>
            </div>

            <div class="border-l-4 border-green-500 pl-3">
                <p class="font-medium">Ahmad Rahman</p>
                <p class="text-sm text-gray-500">Contract discussion - 2 Jul</p>
            </div>
        </div>
    </div>

<!-- Recent Activity Feed ) -->
<div class="bg-white rounded-lg shadow p-6 col-span-1 lg:col-span-2">
    <h2 class="text-lg font-semibold text-gray-800 mb-4">
        Recent Activity
    </h2>

    <div class="space-y-4">

        <div class="flex items-start space-x-3">
            <div class="w-2 h-2 mt-2 rounded-full bg-green-500"></div>
            <div>
                <p class="text-sm text-gray-800">
                    <span class="font-semibold">Ahmad</span> added a new customer
                </p>
                <p class="text-xs text-gray-500">2 minutes ago</p>
            </div>
        </div>

        <div class="flex items-start space-x-3">
            <div class="w-2 h-2 mt-2 rounded-full bg-blue-500"></div>
            <div>
                <p class="text-sm text-gray-800">
                    <span class="font-semibold">Sarah</span> updated customer details
                </p>
                <p class="text-xs text-gray-500">15 minutes ago</p>
            </div>
        </div>

    </div>
</div>
</div>
    
@endsection