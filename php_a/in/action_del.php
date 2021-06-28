<?php
$con=mysqli_connect("localhost","root","12345678","qikan");
if (mysqli_connect_errno())

{

    echo "连接失败: " . mysqli_connect_error();

}
$id = $_GET['id'];

mysqli_query($con,"DELETE FROM news WHERE id='$id'");

mysqli_close($con);
echo"<script>alert('成功！');document.location='index.php';</script>";
?>
