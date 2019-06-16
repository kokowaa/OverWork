<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言条 -- zhanglin.ltd</title>
    <link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="panel panel-danger" style="margin-top:5%;">
        <div class="panel-heading" style="text-align:center;font-size:30px;font-weight:800;">
        <a href="../index.html" style="font-size:10px;">返回主页</a>
        留言条板
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <button type="button" class="btn btn-success"><a href="leaveMessage.php" style="color:black;font-weight:800;">我也要留言</a></button></div>

        <?php

        $link=mysqli_connect('localhost','root','123456789op','zl');
        if(!$link){
            echo "连接数据库失败！";
        }else{
        mysqli_set_charset($link,"utf8");
        $query="SELECT * FROM message ;";
        $result=mysqli_query($link,$query);   //查询数据库
        while($row=mysqli_fetch_array($result))   //循环  数组形式返回的查询结果
        {
            echo "<div class='panel-body'><p>".$row['date']."<label style='margin-left:20%;width:40%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;'><b><a href='showMessage.php?id=$row[id]'>".$row['content']."</a></b></label>"."<span style='margin-left:20%;'> From ".$row['name']."</span>"."</p></div>";
            echo "<hr>";
        }
    }
        ?>


        <div class="panel-body" style="text-align:center;font-weight:900;color:green;"><p>Copyright &copy; 2019-2020 张林 | 渝ICP备19007058号</p></div>
        
        <ul class="list-group">
            <li class="list-group-item"><a href="#" style="color:red;"><span class="glyphicon glyphicon-exclamation-sign"></span></a> &nbsp;&nbsp;<b>注意！如果您发现留言条板上面出现了不友好或者反国家的言论, 请立即与站长联系删除！</b></li>
            <li class="list-group-item"><b>附：站长为中国合法公民，遵纪守法，爱国爱党，坚决拥护党的领导！</b></li>
        </ul>
    </div>
</div>    
</body>
</html>