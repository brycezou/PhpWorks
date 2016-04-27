<?php
	/*<div>可定义文档中的分区或节，把文档分割为独立的、不同的部分。<div>的内容自动地
	  开始一个新行。可以通过<div>的class或id应用额外的样式。不必为每一个<div>都加上
	  class或id。class用于元素组（某一类元素），而id用于标识单独的唯一的元素。*/
	/*<p>标签定义段落。它会自动在其前后创建一些空白。*/
	/*<a>标签可定义锚。有两种用法：
	  1)通过使用 href 属性，创建指向另外一个文档的链接(或超链接)
   	  2)通过使用 name 或 id 属性，创建一个文档内部的书签(指向文档片段的链接)*/
	/*<span>标签用于对文档中的行内元素进行组合*/
	//<ul>标签定义无序列表
	//<li>标签定义列表项目，可用在有序列表(<ol>)和无序列表(<ul>)中
?>
<div id="wrapper">
	<p id="header">
		<a class=logo href="http://zcvprml.blog.163.com/">R8003网</a>
		<SPAN class=login>
			您好,请	<a href="http://www.baidu.com">注册</a>
			或		<a href="http://www.baidu.com">登录</a>
				|	<a href="http://www.baidu.com" target=_blank>帮助中心</a>
				|	<a href="http://www.baidu.com">设为首页</a>
				|	<a href="http://www.baidu.com">加入收藏</a>
		</SPAN>
	</p>
	<div id="nav_index">
		<ul>
			<LI type=square><a href="http://www.baidu.com">教育学院</a></LI>
			<LI type=circle><a href="http://www.baidu.com">学术论坛</a></LI>
			<LI><a href="http://www.baidu.com">技术文档</a></LI>
			<LI><a href="http://www.baidu.com">娱乐空间</a></LI>
			<LI><a href="http://www.baidu.com">窗内首页</a></LI>
		</ul>
	</div>
</div>
