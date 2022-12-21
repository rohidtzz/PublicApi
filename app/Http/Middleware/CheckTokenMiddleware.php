<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Auth;

use App\Models\User;

class CheckTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $user = User::where('token',$request->token)->first();



        if($request->token == null || !$user){

            $error = [
                'status' => 'failed',
                'message' => 'Unauthorized Token'
            ];

            return response()->json($error, 401);
        }


        return $next($request);
    }
}
