<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		JWTAuth::parseToken()->authenticate();
		if (auth()->guard('api')->check()) {
			\Config::set('auth.defaults.guard', 'api');
			$user_token = auth('api')->user()->remember_token;
		}
		$token = $request->header('Authorization');
		$header_token = explode('Bearer ', $token);
		if ($user_token != $header_token[1]) {
			if (auth()->guard('api')->check()) {
				JWTAuth::invalidate($token);
				return response(['status' => 3, 'message' => 'Token can not be used, get new one'], 401);
			}
		}
        return $next($request);
    }
}
