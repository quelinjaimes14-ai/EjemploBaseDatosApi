<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function register(Request $request)
    {
       //validacion de los datos del usuario
       $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
       ]);

         //crear usuario
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

            //crear token de acceso
            $token = $user->createToken('auth_token')->plainTextToken;

            //respuesta de datos del usuario y token de acceso
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user
            ],201);
    }

public function login(Request $request)
    {
        // Validacion de los datos del usuario
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Verificacion de las credenciales
        $user = User::where('email', $request->email)->first();

        if (!$user || !\Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        // Creacion del token de autenticacion
        $token = $user->createToken('auth_token')->plainTextToken;

        // Respuesta con el usuario y el token
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
    }   
}
