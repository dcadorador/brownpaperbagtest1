<?php

namespace App\Http\Controllers\Web\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function index()
    {
        return view('auth.login');
    }


    public function logout(Request $request)
    {
        auth()->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
