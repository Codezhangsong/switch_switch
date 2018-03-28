<?php

namespace App\Http\Controllers\user;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function register(Request $request) 
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $user = Users::where('username',$username)->first();
        if(!$user){
            $res = Users::insert(
            ['username' =>$username, 'password' => $password]);
            if($res){
                 return response()->json(array(
                'code' => 200,
                'message' => '注册成功'
            ));
            }
        }else{
             return response()->json(array(
                'code' => 1001,
                'message' => '用户名已经存在'
            ));
        }
    }

}

