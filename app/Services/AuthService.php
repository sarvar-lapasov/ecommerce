<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthService extends Service
{
    /**
     * @param $user
     * @param LoginRequest $request
     * @return void
     * @throws ValidationException
     */
    public function checkCredentials($user, $request): void
    {
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credetials are incorrect'],
            ]);
        }
    }
}
