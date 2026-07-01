<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class DashboardController extends Controller
{
public function index()
{
    $customers = json_decode(
        Storage::get('customers.json'),
        true
    );

    $totalCustomers = count($customers);

    return view('dashboard', compact('totalCustomers'));
}
}

