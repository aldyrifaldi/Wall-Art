<?php

namespace App\Http\Controllers\Api;

use App\ApiCode;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

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

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required|integer',
        ]);

        $request->merge([
            'password_hashed' => Hash::make($request->password),
        ]);

        try {
            User::create($request->only('first_name','last_name','email','phone_number','password_hashed'));
            return $this->respondNoContent(Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return $this->respondWithError(ApiCode::SOMETHING_WENT_WRONG,Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
