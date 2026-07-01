<head> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


</head>
@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Customers</h1>

    <a href="{{ route('customers.create') }}" class="px-4 py-2 bg-cyan-600 text-white rounded-lg hover:bg-cyan-700">
        + Add Customer
    </a>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">

    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500">Total Leads</p>
        <p class="text-3xl font-bold text-blue-600">12</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500">New Leads</p>
        <p class="text-3xl font-bold text-cyan-600">4</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500">Won Leads</p>
        <p class="text-3xl font-bold text-green-600">5</p>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500">Lost Leads</p>
        <p class="text-3xl font-bold text-red-600">3</p>
    </div>

</div>
@endsection
