<?php

namespace App\Http\Controllers\Admin;

use App\Model\Roles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Notes:角色列表
     * Author:sjzlai
     */
    public function index()
    {
        $roles = Roles::roleAll();
        return view('admin.auth.role-list',['roles'=>$roles]);
    }

}
