<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Notes:登陆视图
     * Author:sjzlai
     */
    public function login()
    {
        return view('admin.auth.login-index');
    }

    /**
     * Notes:登陆验证
     * Author:sjzlai
     */
    public function store(Request $request)
    {
        $user = $request->except('_token');
        if ($user['username']=='' || $user['password'] == ''){
            return back()->with('账号或密码不能为空');
        }
        $userInfo = DB::table('admin')
            ->where([
                ['username',$user['username']],
                ['password',md5($user['password'])]
            ])->first();
        //dd($userInfo);
        if (!$userInfo){
            return back()->with('账号或密码错误');
        }else{
            Session::put('user.id',$userInfo->admin_id);
            Session::put('user.name', $userInfo->realname);
            Session::put('user.user_name', $userInfo->username);
            return Redirect::to('admin/index');
        }

    }
}
