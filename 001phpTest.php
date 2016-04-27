<html>
	<head>
		<title>PHP 环境测试</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	</head>
	<body>
		<?php
			//echo()和printf()函数在功能上可以互换，但echo()函数执行速度稍快一些
			//echo()函数一次能输出多个字符串，而printf()函数一次只能输出一个字符串
			//"."用于连接字符串，"<br/>"用于换行
			$day = "星期六";
			$time = "下午2点";
			echo $day."有讲座。", "时间：".$time."，", "地点：教室(By echo)<br/>";
			printf("%s有讲座。时间：%s，地点：教室(By printf)<br/>", $day, $time);
			$str = sprintf("%s有讲座。时间：%s，地点：教室(By sprintf)<br/>", $day, $time);
			echo $str;
		?>
		<?php
			//使用printf()可以改变参数的输出顺序，例如%2$表示位于参数列表的第二个参数
			//在$format参数的字符串中，$需要转义为\$
			printf("圆盘的面积：%f*%d*%d=%.2f 平方厘米<br/>", 3.14, 5, 5, 3.14*5*5);
			printf("今天%2\$s，昨天%1\$s，明天%3\$s<br/>", "周一", "周二", "周三");
			//$day在这里仍然有效
			echo $day;
		?>
		<?php
			//这是PHP单行注释语法
			#这也是PHP单行注释语法
			/*这是PHP多行注释语法*/
			phpinfo();
		?>
	</body>
</html>