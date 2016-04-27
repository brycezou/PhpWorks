<html>
	<head>
		<title>PHP MySQL 测试</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	</head>
	<body>
		<?php
			function showAlert($str)
			{
				echo "<script>alert('$str');</script>"; 
			}
		?>

		<?php
			$conn = mysql_connect("localhost", "root", "zoucheng");
			if($conn) 
			{
				echo "数据库连接成功!", "</br>";
				$currDb = mysql_select_db("roadsigninfodb_1.0.1", $conn);
				if($currDb)
				{
					echo "已成功选择 roadsigninfodb_1.0.1 数据库!", "</br>";
					//$strInsert = "insert into test_road_1(latitude,longitude,photoName) 
					//			  values('111','222','xx.jpg');";
					//if(!mysql_db_query("roadsigninfodb_1.0.1", $strInsert))
					//	showAlert("向数据库添加数据失败!");
					?>
					<table width="100%">
						<tr>
							<th>编号</th>
							<th>纬度</th>
							<th>经度</th>
							<th>照片</th>
						</tr>
						<?php
							$strQuery = "select * from test_road_1";
							$result = mysql_query($strQuery, $conn);

							//1.mysql_fetch_assoc()函数可以从结果集中取得一行作为关联数组
							//如果没有更多行则返回false
							//2.mysql_fetch_array也可以从结果集取出一行,而且可以指定
							//返回的数组是关联数组、数字数组或者两者都有:_NUM,_BOTH
							//3.mysql_fetch_object()函数可以从结果集中取得一行作为对象
							//这时要使用->来访问值,例如$row->number
							while($row = mysql_fetch_assoc($result))
							//while($row = mysql_fetch_array($result, MYSQL_ASSOC))
							//while($row = mysql_fetch_object($result))
							{
							?>
								<tr>
									<td><?php echo $row[idnumber]?></td>
									<td><?php echo $row[latitude]?></td>
									<td><?php echo $row[longitude]?></td>
									<td><?php echo $row[photoName]?></td>
								</tr>
							<?php
							}
						?>
					</table>
				<?php
				}
				else
					showAlert("选择 roadsigninfodb_1.0.1 数据库失败!");

				if(mysql_close($conn))
					echo "数据库关闭成功!", "</br>";
				else
					showAlert("数据库关闭失败!");
			}
			else
				showAlert("数据库连接失败!");
		?>
	</body>
</html>