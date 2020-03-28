<?php

namespace Yoyou\YJunit\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class TestController extends BaseController
{
    public function index()
    {
        return '这是测试 yjunit 的一个测试控制器 测试的目标是 与laravel集成控制器和服务';
    }
}