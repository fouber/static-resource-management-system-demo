<?php

//引用静态资源管理类
require_once 'Resource.class.php';
//设置map表存放目录
PhizResource::setMapDir(dirname(__FILE__));
//开启输出buffer
ob_start();
//加载页面
include dirname(__FILE__) . "/page/index.php";
//将静态资源``查找-替换``插入到页面上
render(ob_get_clean());