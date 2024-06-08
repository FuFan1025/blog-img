<?php
//初始化随机数生成器种子,这行代码也可以删除
$seed = time();
//获取随机数
$num = rand(1,18);
//拼接图片地址
$picpath = 'https://images.weserv.nl/?url=https://gitee.com/fufan1025/blog_img/raw/master/'+img;
//重定位到图片
die(header("Location: $picpath"));
?>
