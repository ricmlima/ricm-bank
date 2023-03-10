<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Login a user based on account number and password
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('account_number', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('api_token')->plainTextToken;

            $response = [
                'message' => 'Authenticated',
                'data' => [
                    'user' => $user,
                    'token' => $token,
                ]
            ];

            if ($request->isJson()) {
                return response()->json($response);
            } else {
                return view('auth.success', ['data' => $response]);
            }
        }

        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }

    /**
     * Logout the authenticated user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        $response = [
            'message' => 'Logged out'
        ];

        if ($request->isJson()) {
            return response()->json($response);
        } else {
            return view('auth.success', ['data' => $response]);
        }
    }
}
