<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
	<link rel="stylesheet" href="../../css/register.css" type="text/css">
</head>
<body>
	<div id="all">
	<div id="head">
<img src="../../img/xingxing.jpg" width="100px"  height="100px">
</div >
	
<h3>追星网管理员注册</h3>
    <div id="one">
        <h4>注册</h4>
        <form action="register_c.php" method="post">
            <p><span>管理员帐号：</span><input type="text" name="user" required=""/></p>
            <p><span>管理员密码：</span><input type="password" name="pass" required=""/></p>
            <p>
                <input type="reset" name=""/> <input type="submit" name=""/>
            </p>
        </form>
        <a href="index_b.php">已注册</a>
    </div>
    </div>
</body>
</html>