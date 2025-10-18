<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{
    /**
     * Display the reports page
     */
    public function index()
    {
        $user = Auth::user();
        
        // You can add report data here later
        // Example: $reports = Report::all();
        
        return view('reports', compact('user'));
    }
}