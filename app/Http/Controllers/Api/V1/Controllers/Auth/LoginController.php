<?php

namespace App\Http\Controllers\Api\V1\Controllers\Auth;

use App\Http\Controllers\Api\V1\Controllers\ApiController;
use Illuminate\Http\Request;

class LoginController extends ApiController {

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(auth()->attempt($credentials)) {
            return $this->response(true, 'Successfully login', ['user' => auth()->user()]);
        }

        return $this->response(false, 'Invalid credentials');
    }

}
