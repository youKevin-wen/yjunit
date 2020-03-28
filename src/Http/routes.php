<?php

Route::get('/', 'YJunitController@index');
Route::post('/', 'YJunitController@test')->name('junit.test');

// 测试路由
Route::get('test', 'TestController@index');