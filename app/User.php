<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $table = 'admin';
    protected $guarded = [];
    protected  $guard_name = 'web' ; //或者你想要使用的任何警卫




    /**
     * Notes:后台用户列表
     * Author:sjzlai
     */
    public static function userAll($page=10)
    {
        return self::orderBy('created_at','desc')->paginate($page);
    }

}
