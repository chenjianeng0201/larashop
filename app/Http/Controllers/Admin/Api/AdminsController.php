<?php

namespace App\Http\Controllers\Admin\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(Request $request)
    {
        $credentials = [
            'username' => $request->username, 
            'password' => $request->password
        ];
        
        if (!$token = auth('api')->attempt($credentials)){
            return response()->json(['code' => 401, 'error' => 'Unauthorized']);
            // return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->respondWithToken($token);
        // return $this->response->array(['code' => 200, 'title' => '登录成功', 'msg' => '欢迎您，'. $request->username]);
        
    }

    public function test()
    {
        dd('in');
    }

    public function logout()
    {

        auth('api')->logout();

        return response()->json(['code' => 200]);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
