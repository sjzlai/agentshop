<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    protected  $table= 'roles';
    protected  $guarded = [];
    public $timestamps = true;

    public static function roleAll($page=10)
    {
        return self::orderBy('created_at','desc')->paginate($page);
    }
}
