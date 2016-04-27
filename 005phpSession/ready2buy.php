<title>添加到购物车</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
	session_start();
	if($_SESSION['user']=="")
	{
		echo "<script>alert('请您先登录!');history.back();</script>"; 
		exit;
	}
	$lmbs = strval($_GET['lmbs']);
	//explode根据指定的分隔符将原始字符串分割成一个字符串数组
	$array = explode("@", $_SESSION['producelist']);

	for($i = 0; $i < count($array); $i++)
    {
		if($array[$i]==$lmbs)
   		{
      		echo "<script>alert('该商品已存在于您的购物车中!');history.back();</script>";
   			exit;
   		}
	}
	$_SESSION['producelist'] = $_SESSION['producelist'].$_GET['lmbs']."@";
	$_SESSION['quatity'] = $_SESSION['quatity']."1@";

	//跳转到购物车页面
	header("location:cart.php");	
?>