<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/**
 * 登陆操作
 */
Route::group(['namespace'=>'admin','middleware'=>['web'],'prefix'=>'admin'],function (){
    Route::get('/','AuthController@login');
    Route::post('login/post','AuthController@sotre');
});
/**
 * 不验证权限的通用路由
 */
Route::group(['namespace'=>'admin','middleware'=>['web'],'prefix'=> 'admin'],function () {
    Route::get('index', 'IndexController@index');                        //首页
    Route::get('test', 'IndexController@test');                          //测试
});