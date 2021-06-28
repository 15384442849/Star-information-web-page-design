<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>周刊</title>
<link rel="stylesheet" href="../css/top.css" type="text/css">
<link rel="stylesheet" href="../css/left.css" type="text/css">
<link rel="stylesheet" href="../css/right.css" type="text/css">
<link rel="stylesheet" href="../css/bottom.css" type="text/css">
<link rel="stylesheet" href="../css/foot.css" type="text/css">
<link rel="stylesheet" href="../css/ly.css" type="text/css">
</head>
<body>
<div id="all">

<?php
include "top.php";
?>

<div id="centre">
<?php
include "centre_left_liu.php";
?>

<div id="liu">
	<h2>留言板</h2>
<form action="chuli.php" method="post">
	<div><i>*</i>标题：
	<input type="text" value="" class="wenben" name="BT"></div>
	<div><i>*</i>您的姓名：
	<input type="text" value="" class="wenben" name="XM"></div>
	<div><i></i>电子邮箱：
	<input type="email" value="" class="wenben" name="YX"></div>
	<div><i>*</i>QQ：
	<input type="text" value="" class="wenben" name="QQ"></div>
	<div><i>*</i>手机号：
	<input type="text" value="" class="wenben" name="SJ"></div>
	<div id="ly"><i>*</i>留言内容：<br/>(500字以内)</div>
	<textarea  cols="30" rows="5" class="liuy" name="LY" style="width:50%"></textarea><br/>
	<input type="submit" value="提交" name="submit" class="sub">
	<input type="button" value="返回" onclick="history.go(-1)" name="but" class="sub">
</form>
</div>
	
	
	

<div id="z">
</div>
	
</div>
</div>

<?php
include "foot.php";
?>

<img src="../img/weichat.png" id="o" width="200px" height="200px">

</body>	
	
</html>