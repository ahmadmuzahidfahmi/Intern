<head> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Customers</h1>

    <button class="px-4 py-2 bg-cyan-600 text-white rounded-lg hover:bg-cyan-700">
        + Add Customer
    </button>
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
                    <th class="px-6 py-3">Customer</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3">Company</th>
                    <th class="px-6 py-3">Phone</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Last Contact</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody class="divide-y divide-gray-200">

                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium text-gray-900">
                        John Doe
                    </td>
                    <td class="px-6 py-4">
                        john@example.com
                    </td>
                    <td class="px-6 py-4">
                        ABC Sdn Bhd
                    </td>
                    <td class="px-6 py-4">
                        012-3456789
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        30 Jun 2026
                    </td>
                    <td class="px-6 py-4 space-x-2">
                        <button class="text-cyan-600 hover:text-cyan-800">
                            View
                        </button>
                        <button class="text-yellow-600 hover:text-yellow-800">
                            Edit
                        </button>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium text-gray-900">
                        Sarah Lim
                    </td>
                    <td class="px-6 py-4">
                        sarah@example.com
                    </td>
                    <td class="px-6 py-4">
                        XYZ Tech
                    </td>
                    <td class="px-6 py-4">
                        017-9876543
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700">
                            Lead
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        29 Jun 2026
                    </td>
                    <td class="px-6 py-4 space-x-2">
                        <button class="text-cyan-600 hover:text-cyan-800">
                            View
                        </button>
                        <button class="text-yellow-600 hover:text-yellow-800">
                            Edit
                        </button>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium text-gray-900">
                        Ahmad Rahman
                    </td>
                    <td class="px-6 py-4">
                        ahmad@example.com
                    </td>
                    <td class="px-6 py-4">
                        Visivest
                    </td>
                    <td class="px-6 py-4">
                        018-1234567
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-700">
                            Inactive
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        25 Jun 2026
                    </td>
                    <td class="px-6 py-4 space-x-2">
                        <button class="text-cyan-600 hover:text-cyan-800">
                            View
                        </button>
                        <button class="text-yellow-600 hover:text-yellow-800">
                            Edit
                        </button>
                    </td>
                </tr>

            </tbody>

        </table>
    </div>

</div>

<div class="flex items-center justify-between px-6 py-4 border-t bg-white">
    <p class="text-sm text-gray-500">
        Showing 1-10 of 50 customers
    </p>

    <div class="flex gap-2">
        <button class="px-3 py-1 border rounded">
            Previous
        </button>

        <button class="px-3 py-1 bg-cyan-600 text-white rounded">
            1
        </button>

        <button class="px-3 py-1 border rounded">
            2
        </button>

        <button class="px-3 py-1 border rounded">
            Next
        </button>
    </div>
</div>
@endsection
