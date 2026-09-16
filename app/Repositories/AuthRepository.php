<?php
namespace App\Repositories;
use App\Contracts\AuthRepositoryInterface;
use Illuminate\Support\Facades\Auth;
class AuthRepository implements AuthRepositoryInterface
{
    public function login(array $data): array
    {
        if (Auth::attempt($data)) {
            return [
                'success' => true,
                'message' => 'login successful'
            ];
        }
        return [
            'success' => false,
            'message' => 'Invalid credentials',
        ];
    }
}