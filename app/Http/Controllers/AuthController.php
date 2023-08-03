<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'email' => ['The provided credetials are incorrect'],
            ]);
        }

        return response()->json([
            'token'=> $user->createToken($request->email)->plainTextToken
        ]);
    }

    public function  logout()
    {

    }


    public function  register()
    {

    }

    public function user(Request $request): UserResource
    {
        return new UserResource($request->user());
    }
}
