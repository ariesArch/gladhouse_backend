<?php

namespace App\Http\Controllers\Web\Api\v1;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\Staff;
class AuthController extends Controller
{
    public function login(Request $request) {
        \Config::set('auth.defaults.guard', 'api');
        $credentials = $request->only('username','password');
        $rules = ['username'=>'required','password'=>'required'];
        $validator = Validator::make($credentials,$rules, [
            'username.required' => 'username or phone number is required',
            'password.required' => 'password is required'
        ]);
        if($validator->fails()) {
            return response()->json(['status'=>2,'message'=>$validator->messages()],422);
        }
        if(auth()->validate($credentials)) {
            $remember_token = JWTAuth::attempt($credentials);
            if(is_numeric($request->username)) {
                $staff = DB::table('staffs')->where('phone_number',$request->username)->first();
            }else{
                $staff = DB::table('staffs')->where('username',$request->username)->first();
            }
            Staff::find($staff->id)->update(['remember_token'=>$remember_token]);
            return $this->respondWithToken($remember_token);
        }else{
            return response()->json(['status'=>2,'message'=>'Wrong Credentials'],422);
        }
    }

    protected function respondWithToken($token)
    {
        $user = Auth::Guard('api')->user();
        return response()->json([
            'status' => 1,
            'data' => [
                'access_token' => $token,
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'phone' => $user->phone,
                ],
                'token_type' => 'bearer',
                'expires_in' => auth('api')->factory()->getTTL() * 60 * 24,
            ],
        ], 200);
    }
}
