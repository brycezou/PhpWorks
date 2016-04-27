<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
		<title>查看所有图书</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

    <body>
        <h1>图书列表</h1>
       	<?php
            session_start(); 
    		require("dataList.php");
    		if($_SESSION['user']=="" && $_SESSION['password']=="")
    		{
    			echo "对不起, 您还没有登录本站!";
    			echo "<meta http-equiv=\"refresh\" content=\"3 url=index.php\">&nbsp;3秒后转入登录页面...";
    		}
    		else
    		{
    		?>
        	<table>
            	<tr>
              		<th align="center" width="80" height="40">编号</th>
              		<th align="center" width="80">封面</th>
              		<th align="center" width="120">图书名称</th>
              		<th align="center" width="80">价格</th>
              		<th align="center" width="80">操作</th>
            	</tr>   
            	<?php 
    				foreach($goods as $arow) 
    				{
    				?>
              		<tr>
                		<td align="center"><?php echo $arow[number];?></td>
                		<td align="center"><img src="pics/<?php echo $arow[image];?>"/></td>
                		<td align="center"><?php echo $arow[name];?></td>
                		<td align="center"><?php echo $arow[price];?></td>
                		<td align="center">
                            <a href="ready2buy.php?lmbs=<?php echo $arow[id];?>">添加到购物车</a>
                        </td>
              		</tr>
                    <?php 
                    }
            	?>
        	</table>
         	<?php 
            }
       	?>
      	<p><a href="cart.php">查看购物车</a></p>
	</body>

</html>
