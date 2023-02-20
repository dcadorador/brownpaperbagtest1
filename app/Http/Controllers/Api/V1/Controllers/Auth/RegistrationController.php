<?php

namespace App\Http\Controllers\Api\V1\Controllers\Auth;

use App\Http\Controllers\Api\V1\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends ApiController {

    //
    public function register(Request $request)
    {
        $data = $request->except('_token');
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        auth()->login($user);
        return $this->response(true, 'Successfully login', ['user' => $user]);
    }

}
