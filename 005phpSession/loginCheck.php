<title>用户身份验证</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

<?php 
	//当每个用户首次登录网站时, 服务器会自动为其分配一个SessionID, 用于标识用户
	//一般, Session对象有生命周期, 如果在规定时间内没有刷新Session对象, 系统将终止
	//这些对象; 在PHP中, 每个Session都是通过session_start()函数开始的, 该函数检查
	//一个Session是否存在, 不存在则创建一个新的Session(Session ID)
	//如果关闭浏览器，则当前会话自动中断, 打开新浏览器时, 将打开一个新的会话
	//session_id()返回PHP自动产生的SessionID, unset($_SESSION[key])可以删除Session变量
	session_start();
	//获取表单中的用户输入值, 同理, 使用$_GET变量可以获取GET方式提交的数据
	$user=trim($_POST['user']);
	$pass=trim($_POST['password']);
	if($user=="admin" && $pass=="admin")
	{
		echo "登录成功!";
		$_SESSION['user'] = $user;
		$_SESSION['password'] = $pass;
		$_SESSION['producelist'] = "";
		$_SESSION['quatity'] = "";
		echo "<meta http-equiv=\"refresh\" content=\"3;url=products.php\">&nbsp;3秒钟转入主页, 请稍等...";
	}
	else
		echo "<script>alert('登录失败!');history.back();</script>";
?>