<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
	<link rel="stylesheet" href="../css/register.css" type="text/css">
	<style type="text/css">
		#one{
			
			width:200px;
			height: 80px;
			border-radius: 30px;
					margin-top:200px;
		}
		#one #a{
			margin-top: 20px;
		}
		</style>
</head>
<body>
	<div id="all">
	<div id="head">
<img src="../img/xingxing.jpg" width="100px"  height="100px">
</div >
	
<h3>用户注册</h3>
    <div id="one">
		<div id="a">
<?php
    header ( "Content-type:text/html;charset=utf-8" );
    $conn = mysqli_connect('localhost','root','12345678','qikan') or die('数据库连接失败');
    $conn->set_charset('utf8');

    $user = $_POST['user'];
    $pass = $_POST['pass'];
 	
    $sql = "INSERT INTO yonhu VALUES ('','$user' ,'$pass')";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
    echo("注册成功！！！<br/><a href='index.php'>点击登录</a>")     
?>
			</div>
    </div>
	</div>
</body>
</html>