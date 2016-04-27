<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>PHP Session</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	</head>

	<body>
      	<table width="392" height="96" border="0" cellpadding="0" cellspacing="0">
      		<?php
      			//HTML表单(form)用于采集和提交用户输入信息, 可以在其中添加相关元素(控件)
      			//name是表单名称, method是表单的提交方式, id是表单的ID号
      			//action指向处理该表单页面的URL, 可以是相对位置或者绝对位置
      			//method的默认值是get, 是将表单中的数据按照“参数名=参数值”的形式添加到
      			//action所指的URL后面, 并且两者使用“？”连接, 而各个变量之间使用“&”连接
      			//get可能不安全, post的所有操作对用户不可见; 受URL长度限制影响, get传输
      			//的数据量小, 而post可以传输大量数据, 所以上传文件时只能用post
      		?>
        	<form name="formLogin" method="post" action="loginCheck.php">
          		<tr>
            		<td>用户<input name="user" type="text" id="user" size="15"></td>
          		</tr>
          		<tr>
            		<td>密码<input name="password" type="password" id="password" size="15"></td>
          		</tr>
          		<tr>
            		<td><input type="submit" value="提交"></td>
            		<td><input type="reset" value="重置"></td>
          		</tr>
        	</form>
      	</table> 

      	<hr/>

      	<?php
      		//action为空表示提交到本页面进行处理, 称为自提交表单
      		//下面是一些常见表单元素的使用方法, 重置仅在自身所在的表单内有效
      	?>
      	<form name="formElem" method="post" action="index.php">
      		<p>
      		    <h2>你喜欢的电脑壁纸?</h2>
      			<input name="wall" type="radio" id="wall" value="游戏">喜欢的游戏
      			<input name="wall" type="radio" id="wall" value="人物">喜欢的人物
      			<input name="wall" type="radio" id="wall" value="其它">其它的类型
      		</p>
      		<p>
      		    <h2>你玩过哪些游戏?</h2>
      			<input name="game[]" type="checkbox" id="games" value="QQ炫舞">QQ炫舞
      			<input name="game[]" type="checkbox" id="games" value="QQ飞车">QQ飞车
      			<input name="game[]" type="checkbox" id="games" value="SD快打">SD快打
      		</p>
      		<p>
      			从事行业:
      			<select name="select" id="select">
      				<option value="餐饮业">餐饮业</option>
      				<option value="互联网">互联网</option>
      				<option value="研究生">研究生</option>
      			</select>
      		</p>
      		<p>
      			留言板:
      			<br/>
      			<textarea name="story" rows="5" cols="30" id="story"></textarea>
      		</p>
 
			<input name="submit_inside" type="submit" value="本页面内提交">
			<input name="reset_inside" type="reset" value="本页面内重置">
      	</form>

      	<?php
      		//本页面内提交的处理代码
      		if(isset($_POST["submit_inside"]))
      		{
      		?>
      		<table>
      			<tr><th>感谢您参与投票</th></tr>
      			<tr><td>玩过的游戏有:
      					<?php
      						foreach ($_POST['game'] as $game) 
      						{
      							echo $game."  ";
      						}
      					?></td></tr>
      			<tr><td>喜欢的壁纸类型是:<?php echo $_POST['wall'];?></td></tr>
      			<tr><td>职业是:<?php echo $_POST['select'];?></td></tr>
      		</table>
      		<?php 
      		}
      	?>
	</body>

</html>
