<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeadController extends Controller
{
    public function index()
    {
        $leads = json_decode(
            Storage::get('leads.json'),
            true
        );

        $totalLeads = count($leads);

        return view('leads', compact(
            'leads',
            'totalLeads'
        ));
    }
}