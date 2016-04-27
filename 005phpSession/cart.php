<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>购物车</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	</head>

	<body>
		<h1>图书列表</h1>
		<?php
			session_start();
			require("dataList.php");
			if($_SESSION['user']=="")
			{
    			echo "<script>alert('请您先登录!');history.back();</script>";
				exit; 
			} 
		?>
		<p>
			当前用户: 	<?php echo $_SESSION['user'];?> | 
      					<a href="products.php">返回购物列表</a> | 
      					<a href="cart.php?qk=yes" style="color:#000">清空购物车</a>
		</p>
      	
      	<?php
    		session_register("total");
   			if($_GET['qk']=="yes")
   			{
    			$_SESSION['producelist'] = "";
    			$_SESSION['quatity'] = ""; 
    		}
    		$arraygwc = explode("@",$_SESSION['producelist']);
    		$s = 0;
    		for($i = 0; $i < count($arraygwc); $i++)
    		{
     			$s += intval($arraygwc[$i]);
        	}
    		if($s==0)
    		{
   				echo "<tr>";
         		echo " <td height='25' align='center'>您的购物车为空!</td>";
         		echo "</tr>";
   			}
   			else
   			{ 
    		?>
      		<form name="form" method="post" action="cart.php">
        		<table>
          			<tr>
            			<th align="center" width="80" height="40">编号</th>
            			<th align="center" width="120">图书名称</th>
            			<th align="center" width="80">数量</th>
            			<th align="center" width="80">价格</th>
            			<th align="center" width="80">合计</th>
            			<th align="center" width="80">操作</th>
          			</tr>
          			<?php
       					$total = 0;
       					$array = explode("@",$_SESSION['producelist']);
     					$arrayquatity = explode("@",$_SESSION['quatity']);
     					while(list($name, $value) = each($_POST))
     					{
      						for($i = 0; $i < count($array); $i++)
      						{
         						if(($array[$i])==$name)
         						{
        							$arrayquatity[$i] = $value; 
        						}
       						}
      					}
       					$_SESSION['quatity'] = implode("@",$arrayquatity);
     					for($i = 0; $i < count($array); $i++)
     					{ 
       						$lmbs = $array[$i];
       						$num = $arrayquatity[$i];
          					if($lmbs!="")
          					{
          						foreach($goods as $myrow) 
          						{
          							if($myrow[id]==$lmbs)
          		 						$info = $myrow; 
          						}

         						$total1 = $num*$info[price];
         						$total += $total1;
         						$_SESSION["total"] = $total;
    							?>
          						<tr>
            						<td align="center"><?php echo $info[number];?></td>
            						<td align="center"><?php echo $info[name];?></td>
            						<td align="center">
            							<input type="text" size=2 name="<?php echo $info[id];?>" value="<?php echo $num;?>">
            						</td>
            						<td align="center"><?php echo $info[price];?>元</td>
            						<td align="center"><?php echo $info[price]*$num."元";?></td>
            						<td align="center">
            							<a href="remove.php?id=<?php echo $info[id]?>" style="color:red">移除</a>
            						</td>
          						</tr>
          						<?php
     						}
	 					}
					?>

          			<tr>
            			<td colspan="2"><input type="submit" value="更改商品数量"></td>
            			<td colspan="3">总计: <?php echo $total;?>$</td>
          			</tr>
        		</table>
      		</form>
      		<?php 
      		}
      	?>
	</body>

</html>