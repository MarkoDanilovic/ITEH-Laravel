<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AFKontroler extends Controller
{
    public function register(Request $request)
    {
        $checkFields = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($checkFields->fails()) {
            return response()->json($checkFields->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $tokenR = $user->createToken('token_register')->plainTextToken;

        return response()->json([
            'User ' => $user,
            'Token ' => $tokenR
        ]);
    }



    public function login(Request $request)
    {
        $checkFields = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($checkFields->fails()) {
            return response()->json($checkFields->errors());
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json('Greška prilikom logovanja');
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $tokenL = $user->createToken('token_login')->plainTextToken;

        return response()->json([
            'User ' => $user,
            'Token ' => $tokenL
        ]);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json(['Info' => 'Uspešan logout sa sistema']);
    }
}
