展示静态资源管理系统设计思路的demo
===========================

## 环境依赖：

1. fis
1. php-cgi
1. java

## 运行方法：

1. 启动内置服务器
    * fis server start
1. 进入项目目录
    * cd project
1. 构建项目
    * 预览开发效果命令： ``fis release``
    * 预览开发效果，并监听文件变化命令： ``fis release -w``
    * 预览开发效果，并监听文件变化，同时自动刷新浏览器命令：``fis release -wL``
    * 预览文件压缩，加域名，资源合并，csssprite等效果，并监听文件变化，同时自动刷新浏览器命令：``fis release -oDpwL``
1. 刷新页面（http://127.0.0.1:8080），查看效果

## 目录说明：

* js目录下放js文件
* css目录下放css文件
* img目录下放图片文件
* page目录下放php页面文件
* fis-conf.js 文件是项目配置
* index.php 文件是入口php
* Resource.class.php 是静态资源管理框架

## php页面api说明：

* import($id) : 引用一个资源文件，可以是js、css文件
* css() : 在调用该函数的位置，将 ``import($id)`` 函数收集到的css资源，以``<link href="xxx">``标签的形式输出
* js() : 在调用该函数的位置，将 ``import($id)`` 函数收集到的js资源，以``<script src="xxx">``标签的形式输出

## 配置说明

```javascript
fis.config.merge({
    roadmap : {
        domain : {
            //所有css文件添加http://localhost:8080作为域名
            '**.css' : 'http://localhost:8080'
        },
        path : [
            {
                //所有的js文件
                reg : '**.js',
                //发布到/static/xxx目录下
                release : '/static/$&'
            },
            {
                //所有的css文件
                reg : '**.css',
                //发布到/static/xxx目录下
                release : '/static/$&'
            },
            {
                //readme.md文件不发布
                reg : /\/readme\.md$/i,
                release : false
            }
        ]
    },
    pack: {
        //所有js文件合并成一个main.js文件
        'pkg/main.js': '**.js',
        //所有css、less文件合并成一个main.css文件
        'pkg/main.css': [ '**.css', '**.less' ]
    }
});
```