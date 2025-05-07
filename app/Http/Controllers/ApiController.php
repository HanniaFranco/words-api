<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class ApiController extends Controller
{
    /**
     * Registro
     */
    public function register(Request $request) 
    {
        // $request->validate([
        //     "name" => "required|string",
        //     "email" => "required|string|email|unique:users",
        //     "password" => "required|confirmed" //Conformación de contraseña
        // ]);

        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "email" => "required|string|email|unique:users",
            "password" => "required|confirmed" //Conformación de contraseña
        ]);

        if ($validator->fails()) {
            $errorMessage =  $validator->errors()->first();
            $response = [
                'status' => false,
                'message' => $errorMessage,
            ];
            return response()->json($response, 401);
        }

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        //Respuesta que aparece cuando se registra un nuevo usuario
        return response()->json([
            "status" => true,
            "message" => "Usuario registrado exitosamente"
        ]);
    }


    /**
     * Login
     */
    public function login(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            "email" => "required",
            "password" => "required"
        ]);

        if ($validator->fails()) {
            $errorMessage = $validator->errors()->first();
            $response = [
                "status" => false,
                "message" => $errorMessage,
            ];
            return response()->json($response, 401);
        }

        //Verificar usuario por email
        $user = User::where("email", $request->email)->first();

        //Verificar usuario por contraseña
        if (!empty($user)) {

            if (Hash::check($request->password, $user->password)) {

                //Login Correcto
                $tokenInfo = $user->createToken("cairocoders-ednalan");

                $token = $tokenInfo->plainTextToken; //Este es el valor del Token

                return response()->json([
                    "status" => true,
                    "message" => "Inicio de sesión exitoso",
                    "token" => $token
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "message" => "La contraseña no es correcta."
                ]);
            }
        } else {

            return response()->json([
                "status" => false,
                "message" => "Lo sentimos. Las credenciales son inválidas."
            ]);
        }

    }

    
    /**
     * Perfil (Aqui con GET, AuthToken)
     */
    public function profile() 
    {
        $userData = auth()->user();

        return response()->json([
            "status" => true,
            "message" => "Perfil del Usuario",
            "data" => $userData
        ]);
    }

    /**
     * Logout (Aqui con GET, AuthToken)
     */
    public function logout() 
    {
        //Para obtener todos los tokens del usuario conectado y eliminarlos
        request()->user()->tokens()->delete();

        return response()->json([
            "status" => true,
            "message" => "Cierre de sesión exitoso"
        ]);
    }

    /**
     * Refresh del Token (Aqui con GET, AuthToken)
     */
    public function refreshToken() 
    {
        $tokenInfo = request()->user()->createToken("newtokencairocdoers-ednalan");

        $newToken = $tokenInfo->plainTextToken; //Valor del Token

        return response()->json([
            "status" => true,
            "message" => "Token Refresheado",
            "access_token" => $newToken
        ]);
    }
}
