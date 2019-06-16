<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>CSS社区 -- zhanglin.ltd</title>
    <style>
    body{
        margin:0 auto;
    }
    .nav{
        width:100%;
        height: 400px;
        background-color: #27ae60;
    }
    .container{
        
        width:100%;
        height:100%;
        display:block; 
        margin:20px auto;
        /* border:1px solid #777777; */
        /* box-sizing: border-box; */
        box-shadow:0 0 20px #777777;
        background-color: white;
      
    }
    .footer{
      font-weight:bold;
        width:100%;
        height:280px;
        background-color:#27ae60;
        color:white;
    }
    .Index a{
        text-decoration: none;
        color:white;
      }
      .Index a:hover{
        color:white;
        border-bottom:2px solid white;
      }
      .message a{
        text-decoration: none;
        color:white;
      }
      .message a:hover{
        color:white;
        border-bottom:2px solid white;
      }

      .about a{
        text-decoration: none;
        color:white;
      }
      .about a:hover{
        color:white;
        border-bottom:2px solid white;
      }
    .f1{
        position: absolute;
        top:30%;
        left:30%;
    }
    .friend a{
        color:white;
      }
      .friend a:hover{
        text-decoration: none;
        color:blue;
      }
    </style>
</head>
<body>
    <div class="nav">
            <img src="../image/4.jpg" alt="" class="logo" style="width:250px;height:80px;margin-left:10%;display:inline-block;">

            <p class="Index" style="position: absolute;left: 73%;top:4%;"><a href="../index.html"><b>主页</b></a></p>
            <p class="message" style="position: absolute;left: 76%;top:4%;"><a href="./leaveMessage.php"><b>留言</b></a></p>
            <p class="about" style="position: absolute;left: 79%;top:4%;"><a href="../about.html"><b>关于</b></a></p>
            <br>
            <p style="position: absolute;left:40%;top:15%;color:white;font-size: 53px;"><b>CSS社区</b></p>

            <form action="" class="f1">
                    <div class="input-group mb-3 input-group-lg" style="width:190%;">
                     <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-append">
                      <button class="btn btn-success" type="submit">Go</button>  
                    </div>
                  </div>
            </form>
        
    </div>
    <div class="container">

        
        <p style="text-align:center;color:blue;font-weight:700;">我只是皮一下 , 别当真...我希望我们每个人都成为爱国爱党遵纪守法的好公民！</p>
        <div style="text-align:center;"><img src="../image/6.gif" alt="" ></div>

        <br>
        <hr>
        <br>
        <p style="color:red;font-weight:800;font-size:40px;text-align:center;">文章教程！</p>
        <br>

        <?php

          $link=mysqli_connect('localhost','root','123456789op','zl');
          if(!$link){
              echo "连接数据库失败！";
          }else{
          mysqli_set_charset($link,"utf8");
          $query="SELECT * FROM css ;";
          $result=mysqli_query($link,$query);   //查询数据库
          while($row=mysqli_fetch_array($result))   //循环  数组形式返回的查询结果
          {
              // echo "<p>".$row['title']."</p>";
              echo "<div class='card'><div class='card-header bg-info text-white'><span>".$row['id'].".</span> ".$row['title']."</div><div class='card-body' style='width:55%;max-height:48px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;'><a href='showArticle3.php?id=$row[id]' style='color:red;'>".$row['contant']."</a></div></div>";
              echo "<br>";
          }
          }


        ?>

          <p style="font-weight:800;">希望大家的编程技术有所成绩！</p>
        
    </div>


    <div class="footer">
            <div></div>
            <table style="line-height: 15px;margin-top:10px;margin: 30px auto;">
                    <tr>
                      <td align="left" valign="top">
                        <p>关于 <b>CSS社区</b></p>
                        <p>是 Zhanglin.ltd 站内的一个小型的个人博客</p>
                        <p>由张林个人维护</p>   
                      </td>
                      <td valign="top" width="100px;"></td>
                      <td valign="top" align="left">
                            <p>我用到的技术：</p>
                            <p class="friend">
                              <a href="www.bootcss.com">Bootstrap</a> | 
                              <a href="https://www.jquery123.com">jQuery</a> |
                              <a href="https://www.bootcdn.cn/">BootCDN</a> |
                              <a href="https://popper.js.org/">Popper.js</a>
                            </p>
                            <p>感谢开源世界的所有人！</p>
                      </td>
                      <td valign="top" width="100px;"></td>
                      <td valign="top">
                            <p>服务器商：</p>
                            <a href="https://www.ucloud.cn/" title="Ucloud"><img src="../image/ucloud.jpg" alt="" style="width:270px;height:180px;"></a>
                      </td>
                    </tr>
                   
                  </table>
                  <p style="text-align:center;margin-bottom: 10px;"><b>Copyright &copy; 2019-2020 张林 | 渝ICP备19007058号</b></p> 
    </div>
</body>
</html>