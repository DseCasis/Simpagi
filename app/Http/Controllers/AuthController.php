<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{

    public function login(Request $request){
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response ([
                'message'=> 'credenciales invalidas'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::user();

        return $user;
    }

    public function user(){
        return 'authenticated user';
    }
}
