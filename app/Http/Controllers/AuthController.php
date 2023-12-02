<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
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

        return $this->success(
            '',
            ['token'=> $user->createToken($request->email)->plainTextToken]
        );

    }

    public function  logout()
    {

    }


    public function  register(RegisterRequest $request)
    {
//        dd($request);
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        $user->assignRole('customer');

        if ($request->hasFile('photo')){
            $path = $request->file('photo')->store('users/'.$user->id, 'public');
            $user->photos()->create([
                'full_name' =>  $request->file('photo')->getClientOriginalName(),
                'path' => $path
            ]);
        }

       return $this->success(
           'user created',
           ['token'=> $user->createToken($request->email)->plainTextToken]
       );
    }

    public function changePassword()
    {

    }

    public function user(Request $request)
    {
//        return $request->user()->getAllPermissions();
        return $this->response(new UserResource($request->user()));
    }
}
