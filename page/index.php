<html>
<head>
    <title>my page</title>
    <?php css();?> <!-- 在这里输出link标签 -->
    <?php import('css/demo.css');?> <!-- 收集资源 -->
    <?php import('css/demo2.css');?> <!-- 收集资源 -->
</head>
<body>
    <img src="img/baidu.png">
    <div class="test1"></div>
    <div class="test2"></div>
    <?php import('js/demo.js');?> <!-- 收集资源 -->
    <?php js();?> <!-- 在这里输出script标签 -->
</body>
</html>