<html>
	<head>
		<title>PHP文件引用</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
	<body>
		<?php
			//获取一个时间戳
			function getmicrotime()
			{
				list($usec,$sec) = explode(" ", microtime());
				return ((float)$usec+(float)$sec);
			}
			//输出当前日期和时间
			function getDateTime()
			{
				$today = getdate();
				printf("%s年-%s月-%s日 %s时%s分%s秒", $today["year"],$today["mon"],
				$today["mday"],$today["hours"],$today["minutes"],$today["seconds"]);
			}
			$start_time = getmicrotime();	//获取页面开始的时刻
			echo getDateTime()."<br/>";
		?>

		<?php
			//include()函数也有相同的作用，推荐使用require()
			//区别是：当文件丢失时，require停止处理页面，而include继续执行脚本
			require("header.php");
		?>

		<div id="wrap">
			<div id="sHeader">首页&gt;新手上路&gt;什么是窗内网</div>
			<div class="content">
				<h1>什么是R8003网</h1>
				<h2>来源：R8003网|浏览次数：9999次|发布时间：2014-10-12</h2>
				<p>
					XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
					XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
					XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
					XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
					XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
				</p>
				<?php
					//日期和时间函数
					echo date("Y-m-d H:i:s")."<br/>";
				?>
			</div>
		</div>

		<?php
			//含缺省参数的函数
			function aera($x, $y=5)
			{
				return $x * $y;
			}
			echo aera(5)."<br/>";
			echo aera(5, 4)."<br/>";
		?>
		<?php
			//定义嵌套函数
			function Father()
			{
				function Son()
				{
					echo "嵌套函数：先调用Father,才能调用我<br/>";
				}
			}
			Father();	//不能先调用Son()，因为它还不存在
			Son();
		?>

		<?php require("foot.php"); ?>

		<?php
			$stop_time = getmicrotime();	//获取页面结束的时刻
			printf("[页面执行时间：%.2f毫秒]<br/>", ($stop_time-$start_time)*1000);
		?>
	</body>
</html>