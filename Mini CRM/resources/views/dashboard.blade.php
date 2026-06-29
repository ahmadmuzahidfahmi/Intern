<head> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500">Total Customers</p>
            <p class="text-3xl font-bold text-indigo-600">0</p>
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
        <div class="bg-red-500 text-white text-4xl p-10">
    TAILWIND TEST
</div>

        <div x-data="{ count: 0 }" class="p-4 bg-white rounded shadow">
    <button @click="count++" class="px-4 py-2 bg-indigo-600 text-white rounded">
        Increment
    </button>
    <span class="ml-3 text-lg font-bold" x-text="count"></span>

    <div x-data="{ message: 'wow!' }">
    <p x-text="message"></p>
</div>

</div>


    </div>
@endsection
