<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Token;

use App\Models\Role;

use Validator;


use Auth;

class AuthController extends Controller
{

    public function register(Request $request)
    {

        $Validator = Validator::make($request->all(),[
            'username' => 'required | unique:users',
            'password' => 'required'
        ]);


        if($Validator->fails()){
            return response()->json([
                'status' => 'failed',
                'message' => $Validator->errors()
            ],400);
        }

        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ]);

        if(!$user){
            return response()->json([
                'status' => 'failed',
                'message' => 'erros'
            ],400);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'register success',
            'role' => 'user'
        ],200);

    }


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

    public function logout(Request $request)
    {

        if($request->token == null){
            return response()->json([
                'status' => "error",
                'message' => "code invalid"
            ],402);
        }

        $users = User::where('token',$request->token)->update([
            'token' => null
        ]);

        if(!$users){
            return response()->json([
                'status' => "error",
                'message' => "token invalid"
            ],402);
        }

        Auth::logout();

        return response()->json([
            'status' => "success",
            'data' => "logout successfuly"
        ],200);

    }
}
