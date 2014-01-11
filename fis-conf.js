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