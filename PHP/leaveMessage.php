<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言 -- Zhanglin.ltd</title>
    <link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

        <div class="panel panel-danger" style="width: 70%;margin:0 auto;">
            <div class="panel-heading">
                <h1 class="panel-title">
                    <a href="../index.html"><span class="glyphicon glyphicon-home" title="返回主页"></span></a>
                    &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<a href="messageList.php">返回留言条板</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;留言板
                </h1>
            </div>
            <div class="panel-body">

                <form action="leaveMessage.php" method="post">
                    <div class="form-group">
                        <label for="name">留言：</label>
                        <textarea class="form-control" rows="10" name="user_content" placeholder="请在这里输入你的留言！站长会查看并根据下边的联系方式给与您回复..."></textarea>
                    </div>
                        
                    <div style="padding: 20px 20px 10px;">
                        <!-- <form class="bs-example bs-example-form" role="form"> -->
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">你的姓名：</span>
                                <input type="text" class="form-control" name="user_name" placeholder="请输入你的姓名">
                            </div><br>

                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">联系方式：</span>
                                <input type="text" class="form-control" name="user_information" placeholder="请输入你的联系方式">
                            </div><br>

                            <div class="input-group input-group-lg">
                                <span class="input-group-addon">&nbsp&nbsp你的QQ：</span>
                                <input type="text" class="form-control" name="user_qq" placeholder="请输入你的QQ">
                            </div><br>    
                                 
                                    

                            <div class="btn-group btn-group-justified">
                                <div class="btn-group">
                                <button type="submit" name="button" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-ok">&nbsp提交留言
                                </button>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
    </div>

<!-- PHP代码-->
<?php

if(isset($_POST['button'])){

    $user_content = $_POST['user_content'];
    $user_name = $_POST['user_name'];
    $user_information = $_POST['user_information'];
    $user_qq = $_POST['user_qq'];
    $user_date = date("Y-m-d");
    

    // echo "$user_content";
    // echo "$user_name";
    // echo "$user_information";
    // echo "$user_qq";
    $link=mysqli_connect('localhost','root','123456789op','zl');
    mysqli_set_charset($link,"utf8");
    $query = "insert into message (content,name,information,qq,date) values ('$user_content','$user_name','$user_information','$user_qq','$user_date');";
    $res = mysqli_query($link,$query);
    if($res){
        echo "<div class='alert alert-success' style='text-align:center;width:70%;margin:10px auto;'>成功！感谢您的留言！站长会在之后给予您答复！站长祝您快乐每一天！<a href='../index.html'>返回主页</a></div>";
        

        // 点击完成之后 直接跳转的方式 体验感 由于技术不好 不是很好 暂时取消
        // header("location:/6.6/a1.php");
        
    }
}



?>
    
</body>
</html>