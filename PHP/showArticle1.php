<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML社区文章 -- Zhanglin.ltd</title>
    <link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            font-weight: 900;
            line-height: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <p></p>
        <p></p>
        <br>
        <br>

        <?php

        $id = $_GET['id'];
        $link=mysqli_connect('localhost','root','123456789op','zl');
        if(!$link){
            echo "连接数据库失败！";
        }else{
        mysqli_set_charset($link,"utf8");
        $query="SELECT * FROM html where id='$id';";
        $result=mysqli_query($link,$query);   //查询数据库
        while($row=mysqli_fetch_array($result))   //循环  数组形式返回的查询结果
        {
            // echo "<p>".$row['title']."</p>";
            echo "<div class='panel panel-success' style='box-shadow:0 0 20px #777777;'><div class='panel-heading'><h2 class='panel-title'>".$row['title']."</h2></div><div class='panel-body'>".$row['contant']."</div></div>";
            echo "<br>";
        }
        }


        ?>



        
    </div>
</body>
</html>