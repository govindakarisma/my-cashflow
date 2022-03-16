<?php

namespace App\Http\Controllers;

use App\Models\Cashflow;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('index', [
            "page" => "Dashboard",
            "cashflows" => collect(Cashflow::all())
        ]);
    }
}
