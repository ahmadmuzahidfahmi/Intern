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


<div class="bg-white rounded-lg shadow p-4 mb-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

        <!-- Search -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Search Customer
            </label>
            <input
                type="text"
                placeholder="Name, email, phone..."
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
            >
        </div>

        <!-- Status Filter -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Status
            </label>
            <select
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
            >
                <option>All Statuses</option>
                <option>Active</option>
                <option>Inactive</option>
                <option>Lead</option>
            </select>
        </div>

        <!-- Company Filter -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">
                Company
            </label>
            <select
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500"
            >
                <option>All Companies</option>
                <option>Visivest</option>
                <option>ABC Sdn Bhd</option>
                <option>XYZ Tech</option>
            </select>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-end gap-2">
            <button
                class="bg-cyan-600 text-white px-4 py-2 rounded-lg hover:bg-cyan-700 transition">
                Search
            </button>

            <button
                class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300 transition">
                Reset
            </button>
        </div>

    </div>
</div>

<!-- Customer Table -->
<div class="bg-white rounded-lg shadow overflow-hidden">

    <div class="px-6 py-4 border-b">
        <h2 class="text-lg font-semibold text-gray-800">
            Customer List
        </h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">

            <!-- Table Header -->
<thead class="bg-gray-50 text-gray-600 uppercase text-xs">
    <tr>
        <!-- Customer (always visible) -->
        <th class="px-6 py-3">Customer</th>

        <!-- Email (hidden on mobile, visible on md+) -->
        <th class="px-6 py-3 hidden md:table-cell">Email</th>

        <!-- Company (always visible) -->
        <th class="px-6 py-3">Company</th>

        <!-- Phone (hidden on mobile, visible on md+) -->
        <th class="px-6 py-3 hidden md:table-cell">Phone</th>

        <!-- Status (always visible) -->
        <th class="px-6 py-3">Status</th>

        <!-- Last Contact (hidden on mobile, visible on lg+) -->
        <th class="px-6 py-3 hidden lg:table-cell">Last Contact</th>

        <!-- Actions (always visible) -->
        <th class="px-6 py-3">Actions</th>
    </tr>
</thead>


            <!-- Table Body -->
<tbody class="divide-y divide-gray-200">

@foreach($customers as $customer)
        <tr class="hover:bg-gray-50">

            <td class="px-6 py-4 font-medium text-gray-900">
                {{ $customer['name'] }}
            </td>

            <td class="px-6 py-4">
                {{ $customer['email'] }}
            </td>

            <td class="px-6 py-4">
                {{ $customer['company'] }}
            </td>

            <td class="px-6 py-4">
                {{ $customer['phone'] }}
            </td>

            <td class="px-6 py-4">

                @if($customer['status'] == 'Active')
                    <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700">
                        Active
                    </span>

                @elseif($customer['status'] == 'Lead')
                    <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-700">
                        Lead
                    </span>

                @else
                    <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-700">
                        Inactive
                    </span>
                @endif

            </td>

            <td class="px-6 py-4">
                {{ $customer['last_contact'] }}
            </td>

            <td class="px-6 py-4">
                <button class="text-cyan-600 hover:text-cyan-800">
                    View
                </button>
            </td>

        </tr>
@endforeach

</tbody>

        </table>
    </div>

</div>

<div class="flex items-center justify-between px-6 py-4">
<p class="text-sm text-gray-500">
    Showing {{ $customers->firstItem() }}–{{ $customers->lastItem() }}
    of {{ $customers->total() }} customers
</p>
</div>

<div class="px-6 py-4 border-t">
   <div class="flex items-center justify-center gap-2 mt-6">

    @if ($customers->onFirstPage())
        <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-lg">
            Previous
        </span>
    @else
        <a href="{{ $customers->previousPageUrl() }}"
           class="px-4 py-2 bg-white border rounded-lg hover:bg-gray-50">
            Previous
        </a>
    @endif

    @for ($i = 1; $i <= $customers->lastPage(); $i++)
        <a href="{{ $customers->url($i) }}"
           class="px-4 py-2 rounded-lg
           {{ $customers->currentPage() == $i
               ? 'bg-cyan-600 text-white'
               : 'bg-white border hover:bg-gray-50' }}">
            {{ $i }}
        </a>
    @endfor

    @if ($customers->hasMorePages())
        <a href="{{ $customers->nextPageUrl() }}"
           class="px-4 py-2 bg-white border rounded-lg hover:bg-gray-50">
            Next
        </a>
    @else
        <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-lg">
            Next
        </span>
    @endif

</div>
</div>
@endsection
