<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Service\Code;
use App\Http\Requests;
use App\Models\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class LoginController extends CommonController
{
    public function index()
    {
        if (!session('user')) {
            return view('admin.login');
        }
        return view('admin.admin-index');

    }

    public function login(Request $request)
    {
        // 判断当前session是否已经登录
        if (!session('user')) {
            //获取当前管理员的数据
            $admin = Admin::first();
            // 判断用户名密码
            $username = $request->input('username');
            $password = $request->input('password');
            if ($username != null && $password != null) {
                if ($admin->username != $username || Crypt::decrypt($admin->password) != $password) {
                    dd('账户名或密码错误');
                }
                // dd( Crypt::decrypt($admin->password));
                session(['user' => $username]);
                view('admin.admin-index');
//                dd('登陆成功');
            } else {
                return view('admin.login');
                dd('用户名或密码未填写');
            }
        } else {
            return view('admin.admin-index');
        }

    }

    public function logout()
    {
        session_unset('user');
    }

    public function code()
    {
        $code = new Code;
        echo 'code';
    }

    public function crypt()
    {
        $str = '1111';
        echo Crypt::encrypt($str);
    }

    public $result;

    public $data = [];

    // public function test()
    // {
    //     $ban_group = 'abcde|abcd|abc|ab|a|q|qw|qwe|qwer|qwert|abc';
    //     $ban_word = explode('|', $ban_group);
    //     // var_export($ban_word);die;
    //     foreach ($ban_word as  $singleword) {
    //         $this->convert_stringtoarray($singleword,$this->data);
    //     }
    //     dd($this->data);
    // }

    public function convert_stringtoarray($singleword, &$data, $i = 1)
    {
        $strLen = mb_strlen($singleword, 'gbk');
        $key = mb_substr($singleword, 0, $i, 'gbk');

        if (isset($data[$key]) && ($i == $strLen)) {
            $data[$key][] = $singleword;
        } else if (isset($data[$key])) {
            $this->convert_stringtoarray($singleword, $data[$key], ++$i);
        } else {
            $data[$key] = [];
            if ($i == $strLen) {
                $data[$key][] = $singleword;
                return;
            }
            $this->convert_stringtoarray($singleword, $data[$key], ++$i);
        }
    }

    public function test()
    {
        $arr = ['3-3' => 3, '3-2' => 3, '3-1' => 3];
        $temp_arr = [];
        $temp_arr = array_flip($arr);
        // dd($temp_arr);
        foreach ($temp_arr as $key => $value) {
            $sort = explode('-', $key);
        }
    }
}

