<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.bootcss.com/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title></title>
	<style>
		body{
			background-repeat: no-repeat;
			width: 1000px;
			margin: 0 auto;
		}
		.containers{
			background-image:url("../image/6.jpg");
			margin: 0 auto;
			width: 700px;
			height: 655px;
		}
		.content{
			
			width: 470px;
			max-width: 470px;
			height: 280px;
			max-height: 280px;
			margin-top: 1%;
			margin-left: 15%; 
			/* background-color: aqua; */
			padding-top: 10%;
			
		}
	</style>
</head>
<body >
	
	<div class="containers">
		<br>
		<br>
		<br><br>
		
		<div class="content">

        <?php
        $id = $_GET['id'];
        $link=mysqli_connect('localhost','root','123456789op','zl');
        mysqli_set_charset($link,"utf8");
        $query="SELECT * FROM message where id='$id' ;";
        $result=mysqli_query($link,$query);   //查询数据库
        $row=mysqli_fetch_array($result);   //数组形式返回的查询结果
        echo "<p><b>".$row['name'].":</b></p>";
        echo "<p><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['content']."</b></p>";
        echo "<p style='margin-left:70%;'><b>".$row['date']."</b></p>";

        ?>
		
			
		</div>

	</div>
	
</body>
</html>