<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Requests\Api\LoginRequest;
use App\Contracts\PaymentInterface;
class AuthController extends Controller
{
    protected AuthService $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function register(RegisterRequest $request)
    {
        $user = $this->authService->register($request->validated());

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'User registered successfully',
            'data' => [
                'user' => $user,
                'token' => $token,
            ]
        ], 201);
    }
    public function login(LoginRequest $request): JsonResponse
    {
        $result = $this->authService->login($request->validated());
        if (!$result['success']) {
            return response()->json([
                'status' => 'error',
                'message' => $result['message'],
            ], 401);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Login successful',
            'data' => [
                'user' => $result['user'],
                'token' => $result['token'],
            ]
        ]);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Logged out successfully',
        ]);
    }
    public function user(Request $request): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'data' => $request->user(),
        ]);
    }
}
