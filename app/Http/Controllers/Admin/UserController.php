<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    /**
     * Notes:后台用户列表
     * Author:sjzlai
     */
    public function index()
    {
        $user = User::userAll();
        return view('admin.user.user-list',compact('user'));
    }
}
