<?php

namespace App\Http\Controllers\Admin\Api;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middlare('auth:api', ['except' => ['login']]);
    // }

    public function login(Request $request)
    {
        header("Access-Control-Allow-Origin: *");

        $admin = Admin::where([
            ['username', $request->username],
            ['password', md5($request->password)],
            ])->first();
        if ($admin){
            return $this->response->array(['code' => 1, 'title' => '登录成功', 'msg' => '欢迎您，'. $request->username]);
            // return $this->responseWithToken($token);
        }
        return $this->response->array(['code' => -1, 'title' => '登录失败', 'msg' => '账号或密码错误']);
    }
}
