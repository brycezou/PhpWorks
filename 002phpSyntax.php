<html>
	<head>
		<title>PHP 基本语法</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	</head>
	<body>
		<?php
			//允许使用不同类型的值为同一变量赋值
			$var1 = "可口可乐";
			$var2 = 25.9;
			echo $var1.", ".$var2." 元<br/>";
			$var1 = $var2;
			echo $var1."<br/>";
		?>
		<?php
			//引用赋值，使用“=&”符号，两个变量指向同一块内存，同步变化
			$str1 = "boy";
			$str2 =& $str1;
			echo $str1.", ".$str2."<br/>";
			$str2 = "man";
			echo $str1.", ".$str2."<br/>";
		?>
		<?php
			//双引号中的变量名会被变量值替换
			//如果试图转义任何其他字符、反斜杠本身也会被显示出来
			//通常不需要转义反斜杠本身
			$city = "南京";
			echo '$city是一个非常漂亮的地方<br/>';
			echo "我非常喜欢$city<br/>";
			echo "系统目录在C:\Windows<br/>";
		?>
		<?php
			//如果字符串的开始位置包含了数值，那么其和整型的变量相加，结果仍是整数
			$width = 200;
			$height = "50px";
			$sum = $width+$height;
			echo $sum."<br/>";
		?>
		<?php
			//任何类型都可以转换为对象，转换后就成为该对象的一个属性，属性名为scalar
			$str = "PHP开发";
			$tobject = (object)$str;
			echo "字符串转对象后是:".$tobject->scalar."<br/>";
		?>
		<?php
			//除号“/”总是返回浮点数
			$num = 100;
			$res1 = $num/5;
			$res2 = $num/300;
			echo $res1.", ".$res2."<br/>";
		?>
		<?php
			//静态变量可以用在函数内，它的值在函数退出时不会丢失
			function CountVisitor()
			{
				static $counter = 0;
				$counter++;
				echo "已被访问 ".$counter." 次<br/>";
			}
			CountVisitor();
			CountVisitor();
		?>
		<?php
			//PHP中竟然还有foreach
			$fruits = array("草莓", "樱桃", "葡萄", "猕猴桃");
			echo "我喜欢的水果有：";
			foreach ($fruits as $item) 
			{
				echo $item." ";
			}
			echo "<br/>";
		?>
		<?php
			//define()声明常量
			echo "前50个素数是:<br/>";
			define("NUM_OF_PRIMES", 50);
			$count = 1;
			$number = 2;
			$isPrime = true;
			while($count <= NUM_OF_PRIMES)
			{
				$isPrime = true;
				for($divisor = 2; $divisor <= $number/2; $divisor++)
				{
					if($number % $divisor == 0)
					{
						$isPrime = false;
						break;
					}
				}
				if($isPrime)
				{
					if($count % 10 == 0)
					{
						echo "$number<br/>";
					}
					else
					{
						echo "$number&nbsp;&nbsp;&nbsp;";
					}
					$count++;
				}
				$number++;
			}
		?>
	</body>
</html>