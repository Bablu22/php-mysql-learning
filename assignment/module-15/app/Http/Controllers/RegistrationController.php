<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRegistrationRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(UserRegistrationRequest $request): JsonResponse
    {
        return response()->json(['message' => 'User registered successfully']);
    }
}
