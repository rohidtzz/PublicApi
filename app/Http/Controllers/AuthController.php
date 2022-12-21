<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Token;

use App\Models\Role;


use Auth;

class AuthController extends Controller
{


    public function login(Request $request)
    {


        $login = Auth::attempt(['username' => $request->username, 'password' => $request->password]);

        if(!$login){
            $error = [
                'status' => 'failed',
                'message' => 'Username atau passowrd Salah'
            ];

            return response()->json($error, 401);
        }

        $user = User::where('username',$request->username)->first();


        if($user->token == null){
            $token = bcrypt($request->password);

            $user->update([
                'token' => $token
            ]);
        } else {

            $token = $user->token;
        }


        $result = [
            'token' => $token,
            'role' => $user->role
        ];

        return response()->json($result, 200);

    }
}
