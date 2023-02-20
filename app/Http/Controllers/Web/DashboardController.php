<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('dashboard');
    }

    public function contacts(Request $request)
    {
        return view('contacts');
    }

    public function payments(Request $request)
    {
        return view('payments');
    }
}