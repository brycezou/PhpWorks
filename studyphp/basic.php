<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>PHP基础</title>
	</head>

	<?php
		echo "当前文件路径： ".__FILE__;				//输出“__FILE__”常量
		echo "<br>当前行数：".__LINE__;					//输出“__LINE__”常量
		echo "<br>当前PHP版本信息：".PHP_VERSION;		//输出PHP版本信息
		echo "<br> 当前操作系统: ".PHP_OS ;				//输出系统信息
		echo "<br/><font color='#FFDFDF'>北京时间：". date("Y-m-d H:i:s ")."</font><br/>"
	?>
	
	<?php
		echo '开始学习PHP！';
	    echo "<table border=1 width=300>";
	    echo "<tr><td width=100 height=50 align=center>1</td>";
	    echo "<td width=100 height=50 align=center>2</td>";  
	    echo "<td width=100 height=50 align=center>3</td></tr>";
	    echo "<tr><td width=100 height=50 align=center>4</td>";
	    echo "<td width=100 height=50 align=center>5</td>";
	    echo "<td width=100 height=50 align=center>6</td></tr>";
	    echo "</table>";
	?>
	
	<?php	
		echo "<p>变量(\$str)未被赋值：";
		if(is_null($str))
			echo "str = null";
		
		$str = "hello";
		
		echo "<p>被unset()函数处理过的变量(\$str)：";	
		unset($str);	//释放$str
		if(is_null($str))
			echo "str = null";
	?>

	<?php
		$boo = "043112345678";							//声明一个全由数字组成的字符串变量
		if(is_numeric($boo))							//判断该变量是否为数字组成。
			echo "Yes,\$boo is a phone number：$boo!";	//如果是，输出该变量
		else
			echo "Sorry,it is an error!";				//否则，输出错误语句
	?>
	
	<?php
		$zy = "全局变量：你好" ;		//全局变量
		function diff_var()
		{
			$zy = "局部变量：你好";		//局部变量
			echo $zy."<br>" ;   	
			global $zy ;    			//利用关键字global在函数内部定义全局变量
			echo $zy."<br>" ;		
		}    
		echo "<br/>";
		diff_var() ;   
	?>

	<?php
		//个人感觉，这是一个非常高级的特性！
		$change_name = "Look";			
		$Look = "美好的一天开始了!";	
		echo $change_name ;     		
		echo $$change_name ;    		//通过可变变量输出$Look的值
	?>
	
	<?php
		echo "<br/>var_dump:<br/>";
		$value="80";
		echo var_dump($value===80);
		echo var_dump($value==="80");
		$age = 12;
		echo ($age >= 9) ? '小红是好人' : '小红是坏人';
	?>
	
	<?php 
		function values($price,$tax=0.25)
		{
			$price=$price-($price*$tax); 	
			return $price;				
		}
		echo "<br/>", values(100), "<br/>";
		echo values(15000,0.3)
	?>
	
	<?php
		//个人感觉，这是一个非常高级的特性！
		function Go($name = "jack") 
		{
			echo $name.'走了<p>';
		}
		$func = 'Go';
		$func('LiLei'); 
	?>
	
	
	<!--下面是HTML-->
	<table width="1024" height="749" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top" background="images/bg1.jpg">
				<br><br><br><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span>
					<?php
						print ("PHP编程词典，让您编程无忧");
					?>
				</span>
			</td>
		</tr>
	</table>

	<body>
		<!--注意require、include、require_once、include_once的区别-->
		<?php require("top.php"); ?>
		<?php require("bottom.php"); ?>

		
		<table width="392" height="101" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#009900" bgcolor="#CCFF00">
			<tr>
				<td height="25" colspan="2" align="center" class="STYLE5">判断指定的年份是否为闰年</td>
			</tr>
			<tr>
				<td width="160" height="30" bgcolor="#FFFF99">
					<span class="STYLE3">请输入一个四位数的年份：</span>
				</td>
				<td width="219" bgcolor="#FFFF99">
					<form name="form1" method="post" action="">
						<table width="196" height="29" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td width="136">
									<input name="txt_year" type="text" value="" size="20">
								</td>
								<td width="60">&nbsp;
									<input type="submit" name="Button" value="计算">
								</td>
							</tr>
						</table>
					</form>	
				</td>
			</tr>
			<tr>
				<td height="37" colspan="2" align="center">
					<?php
						if($_POST['Button']!="")
						{
							$year = $_POST[txt_year];
							$result = ($year%4==0 && $year%100!=0)||($year%400==0)?$year."是闰年":$year."不是闰年";
							echo $result;
						}
					?>
				</td>
			</tr>
		</table>
	</body>
	
	
	


</html>