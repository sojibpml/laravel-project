<?php
namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class AuthService
{
    public function register(array $data): User
    {
        try {
            DB::beginTransaction();
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]);
            DB::commit();
            return $user;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Registration  failed :" . $e->getMessage());
            throw $e;
        }
    }

    public function login(array $credentials): array
    {
        $user = User::where("email", $credentials['email'])->first();
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return [
                'success' => false,
                'message' => 'Invalid credentials',
            ];
        }
        return [
            'success' => true,
            'user' => $user,
            'token' => $user->createToken('auth_token')->plainTextToken,
        ];
    }
}