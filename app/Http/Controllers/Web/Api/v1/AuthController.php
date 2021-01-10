<?php

namespace App\Http\Controllers\Web\Api\v1;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\JWTAuth;
class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('username','password');
        $rules = ['username'=>'required','password'=>'required'];
        $validator = Validator::make($credentials,$rules, [
            'username.required' => 'username or phone number is required',
            'password.required' => 'password is required'
        ]);
        if($validator->fails()) {
            return response()->json(['status'=>2,'message'=>$validator->messages()]);
        }
    }
}
