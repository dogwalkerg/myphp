<?PHP

require_once('password.php');//引入验证文件

MkEncrypt('112233');//设置访问密码

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="ckplayer/css/ckplayer.css">
        <script type="text/javascript" charset="utf-8" src="ckplayer/js/ckplayer.js"></script>
    </head>
    <body>
        <div class="video" style="width: 100%;height: 100%;"></div>
        <script type="text/javascript">
            //定义一个变量：videoObject，用来做为视频初始化配置
            var videoObject = {
        	container: '.video', //“#”代表容器的ID，“.”或“”代表容器的class
        	video: 'video/lc.mp4'//视频地址
            };
            new ckplayer(videoObject);//初始化播放器
        </script>
    </body>
</html>
