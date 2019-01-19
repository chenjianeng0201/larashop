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
        }

        return $this->respondWithToken($token);
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
