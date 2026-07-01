<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;

class CustomerController extends Controller
{
public function index()
{
    $customers = json_decode(
        Storage::get('customers.json'),
        true
    );

    $perPage = 10;
    $currentPage = request()->get('page', 1);

    $currentItems = array_slice(
        $customers,
        ($currentPage - 1) * $perPage,
        $perPage
    );

    $customers = new LengthAwarePaginator(
        $currentItems,
        count($customers),
        $perPage,
        $currentPage,
        [
            'path' => request()->url(),
            'query' => request()->query(),
        ]
    );

    return view('customers', compact('customers'));
}

public function create()
{
    return view('create');
}
public function store(Request $request)
{
    // Save customer here

    return redirect()->route('customers');
}
}