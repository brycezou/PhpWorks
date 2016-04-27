<?php
	session_start();
	//要移除的商品的ID编号
	$id = $_GET['id'];
	$arraysp = explode("@", $_SESSION['producelist']);
	$arraysl = explode("@", $_SESSION['quatity']);
	for($i = 0; $i < count($arraysp); $i++)
	{
   		if($arraysp[$i]==$id)
    	{
   			$arraysp[$i] = "";
   			$arraysl[$i] = "";
		}
	}
	$_SESSION['producelist'] = implode("@", $arraysp);
	$_SESSION['quatity'] = implode("@", $arraysl);
	header("location:cart.php");
?>