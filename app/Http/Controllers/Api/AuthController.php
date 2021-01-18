<?php

namespace App\Http\Controllers\Api;

use App\ApiCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email','password');

        if (!$token = auth('api')->attempt($credentials)) {
            return $this->respondUnAuthenticated(ApiCode::INVALID_CREDENTIALS);
        }

        return $this->respondWithToken($token);
    }

    public function respondWithToken($token)
    {
        return $this->respond([
            'token' => $token,
            'access_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    public function me()
    {
        return $this->respond(auth()->user());
    }

    
}
