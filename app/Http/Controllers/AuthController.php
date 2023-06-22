<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $token = auth()->user()->createToken('ArenaSunset')->accessToken;
            return response()->json([
                'success' => true,
                'data' => [
                    'token' => $token
                ]]);

        } else {
            return response()->json([
                'success' => false,
                'data' => [
                    'errors' => ['user' => ['Incorrect email or password']]
                ]], 401);
        }
    }
}
