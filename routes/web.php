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
Route::prefix("index")->group(function () {
    //测试
    Route::get('/test', 'Index\LoginController@test');
});

//前台用户
Route::prefix("index")->group(function () {
    //登录
    Route::get('/login', 'Index\LoginController@login');
    Route::post('/login_do', 'Index\LoginController@login_do');
    //注册
    Route::get('/reg', 'Index\LoginController@reg');
    Route::any('/reg_do', 'Index\LoginController@reg_do');
});
//前台
//前台商品
Route::prefix('index')->group(function(){
    //首页
    Route::get('/goodsindex','Index\GoodsController@goodsindex');
    //商品列表
    Route::get('/goodsshop','Index\GoodsController@goodsshop');
    //详情页
    Route::get('/goodslists/{id}','Index\GoodsController@goodslists');
    //评论
    Route::any('/pinglun','Index\GoodsController@pinglun');
    //收藏变为未收藏
    Route::any('/shoucang','Index\GoodsController@shoucang');
    //未收藏变为收藏
    Route::any('/shoucang2','Index\GoodsController@shoucang2');
    //加入购物车
    Route::any('/addCart','Index\GoodsController@addCart');
});
//前台购物车
Route::prefix("/index")->group(function(){
    //购车列表首页
    Route::get('/cart','Index\CartController@cart');
    //单删
    Route::post('/cartDel','Index\CartController@cartDel');
    //测试
    Route::any('/test','Index\CartController@test');
    //重新获取小计
    Route::any('/toPrice','Index\CartController@toPrice');
});


//前台用户
Route::prefix("index")->group(function (){
   //登录
    Route::get('/login','Index\LoginController@login');
    //注册
   Route::get('/reg','Index\LoginController@reg');
});
//购物车
Route::prefix("/index")->group(function(){
    Route::get('/cart','Index\CartController@cart');
});

//后台
//后台管理员
Route::prefix("/admin")->group(function (){
    Route::get("/reg","Admin\LoginController@reg");   //注册
    Route::post("/regdo","Admin\LoginController@regdo");   //注册执行
    Route::get("/login","Admin\LoginController@login");     //登录
    Route::post("/logindo","Admin\LoginController@logindo");   // 登录执行
});

//后台商品列表
Route::prefix("/admin")->middleware("islogin")->group(function(){
    //商品列表
    Route::get('/goodsindex','Admin\GoodsController@index');
    //视频
    Route::get("/devios","Admin\GoodsController@devios");
    Route::post("/deviodo","Admin\GoodsController@deviodo");
    Route::get('/goodscreate','Admin\GoodsController@create');
    Route::post('/goodsstore','Admin\GoodsController@store');
    Route::get('/goodsdelete/{id}','Admin\GoodsController@delete');
    Route::get('/goodsedit/{id}','Admin\GoodsController@edit');
    Route::post('/goodsupdate/{id}','Admin\GoodsController@update');
});
//视频自转码
Route::get("admin/devio","Admin\DevioController@devio");


//后台商品分类
Route::prefix("/admin")->middleware("islogin")->group(function(){
   Route::get('/category_index','Admin\CategoryController@index');   //展示
   Route::get('/category_create','Admin\CategoryController@create');   //试图
    Route::post('/category_store','Admin\CategoryController@store');   //试图
    Route::get('/category_destory/{id}','Admin\CategoryController@destroy');//删除
    Route::get('/category_edit/{id}','Admin\CategoryController@edit');//修改视图
    Route::post('/category_update/{id}','Admin\CategoryController@update');//修改视图
});
//后台用户
Route::prefix("/admin")->middleware("islogin")->group(function(){
    Route::get('/userindex','Admin\UserController@userindex');//用户展示
    Route::get('delete/{id}','Admin\UserController@delete');//删除
    Route::get('edit/{id}','Admin\UserController@edit');//编辑展示
    Route::post('update/{id}','Admin\UserController@update');//编辑执行
});
//个人中心
Route::prefix("/index")->group(function (){
    //我的订单
    Route::get("/order","Index\MyorderController@order");
    //我的评论
    Route::get("/desc","Index\MyorderController@desc");
    //我的收藏
    Route::get("/collect","Index\MyorderController@collect");
});

