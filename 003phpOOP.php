<html>
	<head>
		<title>PHP 面向对象编程</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	</head>
	<body>
		<?php
			class BookBase
			{
				//如果不加访问修饰符，默认为public
				public $m_name;
				public $m_photo;
				public $m_author;
				public $m_publisher;
				public $M_price;
				//构造函数的统一名称，前面为双下划线
				//每个类中最多只允许有一个构造函数
				function __construct($name, $photo, $author, $publisher, $price)
				{
					$this->m_name = $name;
					$this->m_photo = $photo;
					$this->m_author = $author;
					$this->m_publisher = $publisher;
					$this->m_price = $price;
					echo "调用了一次BookBase类的构造函数<br/>";
				}
				//构造函数的统一名称，前面为双下划线
				//析构函数不接受任何参数
				function __destruct()
				{
					//可以在里面释放资源
					echo "调用了一次BookBase类的析构函数<br/>";
				}

				function Write()
				{
					//<tr></tr>标签表示HTML表格中的一行
					//<td></td>标签表示HTML表格中的一个单元格
					echo "<tr>";
					echo "<td align='center'><img src='pics/$this->m_photo' width=100 height=80/></td>";
					echo "<td align='center'>$this->m_name</td>";
					echo "<td align='center'>$this->m_author</td>";
					echo "<td align='center'>$this->m_publisher</td>";
					echo "<td align='center'>$this->m_price</td>";
					echo "</tr>";
				}
			}
		?>
		<?php
			//可以放到上一个PHP标签内
			//继承自基类BookBase
			class SalesBook extends BookBase
			{
				public $m_amount;
				function __construct($amount)
				{
					$this->m_amount = $amount;
				}
				//<hr/>标签在HTML页面中创建一条水平线
				function Write()
				{
					echo '<hr/>本月销售《'.$this->m_name.'》图书共'.$this->m_amount.'本<br/>';
				}
			}

			class DiscountBook extends BookBase
			{
				public $m_discount;
				function __construct($discount)
				{
					$this->m_discount = $discount;
				}
				function Write()
				{
					echo '<hr/>打折图书：'.$this->m_name.'<br/>原价：'.$this->m_price.
					'<br/>特价：'.$this->m_price*$this->m_discount;
				}
				
			}
		?>
		
		<table border="1" cellpadding="0" cellspacing="0" width="80%" align="center">
			<tr>
				<th height="38">封面图片</th>
				<th align='center'>书名</th>
				<th align='center'>作者</th>
				<th align='center'>出版社</th>
				<th align='center'>价格</th>
			</tr>
			<?php
				//<tr></tr>标签表示HTML表格中的一行
				//<td></td>标签表示HTML表格中的一个单元格
				$b = new BookBase("PHP 网络大讲堂", "八仙花.jpg", "祝红涛", "清华大学出版社", 100);
				$b->Write();
				$b->Write();
				$b = NULL;	//该语句会主动调用类的析构函数
			?>
		</table>

		<h3>
			<?php
				$b2 = new SalesBook(200);
				$b2->m_name = "PHP网络中讲堂";
				$b2->Write();
			?>
			<?php
				$b3 = new DiscountBook(0.6);
				$b3->m_name = "PHP网络小讲堂";
				$b3->m_price = 100;
				$b3->Write();
			?>
		</h3>

		<?php
			//在PHP中没有提供属性处理功能，可以通过重载__set()和__get()方法
			//也可以通过使用类似setName()和getName()方法
			//类中使用const定义常量，访问方式如下
			//通过private关键字修饰的字段和方法只能在类的内部使用
			//通过protected修饰的字段和方法只能在类本身和类的子类中使用
			//abstract关键字表示，在类中并不包含该方法的实现，而是由该类的子类实现
			//final关键字表示该方法不能被重写，只允许在子类中调用
			//一个类的静态成员会被该类所有的实例化对象共享，任何一个实例化对象对
			//静态成员的修改都会映射到静态成员中。因此，可以将静态成员看作是一个全局变量
			//静态属性不能通过操作符"->"进行访问
			class Circle
			{
				//常量前不能有访问修饰符，也不能使用->访问
				const PI = 3.1415926;
				public function Area($radius)
				{
					return self::PI * $radius * $radius;
				}

				private static $m_counter = 0;
				static function getCounter()
				{
					return ++self::$m_counter;
				}
			}
			$circle = new Circle();
			echo "PI 的值为(访问类中的常量1)：".Circle::PI."<br/>";
			echo "PI 的值为(访问类中的常量2)：".$circle::PI."<br/>";
			echo "圆面积是：".$circle->Area(10)."<br/>";
			echo "修改静态成员的值：".Circle::getCounter()."<br/>";
			echo "修改静态成员的值：".Circle::getCounter()."<br/>";
		?>
		<?php
			//子类不能拥有父类的私有成员
			//如果父类中有构造函数，并且子类中没有构造函数
			//那么子类在实例化时自动执行父类构造函数
		?>
	</body>
</html>