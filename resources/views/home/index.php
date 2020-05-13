<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>首页</title>
	<link href="/images/favicon.ico" rel="icon" type="image/ico">
	<link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="app">
		<?php include __DIR__ . '/../layouts/header.php'?>
		
		<section class="container">
			<div class="main box">
				<ul class="main-list">
					<li>
						<div class="content">
							<a href="/article/1" class="title">配置 macOS 本地环境</a>
							<p class="text">让命令行看起来更简单 内容如下 让配置生效 接着需要安装 macOS 系统的命令行工具，执行如下命令 这样的安装命令会删除旧版本的命令行工具包，...</p>
							<div class="meta">
								<a href="" class="nickname">候鸟与暖风</a>
								<a href=""><i class="iconfont icon-pinglun"></i>2</a>
								<span><i class="iconfont icon-aixin"></i>0</span>
								<span>2020-4-17</span>
							</div>
						</div>
					</li>
					
					<!--
					<li>
						<a href="" class="wrap-img"><img src="/images/banner/banner_1.jpg"></a>
						<div class="content">
							<a href="" class="title">跋涉：关于洗稿作者的一点感悟</a>
							<p class="text">文/弋一 今天，百家号“单身的X小姐”号被封了，留在她账号上的文章全部被清空，只有一条关于申诉自己是被恶意投诉的动态，孤零零地矗立在那儿，提示她...</p>
							<div class="meta">
								<a href="" class="nickname">零点壹弋一</a>
								<a href=""><i class="icon iconfont icon-pinglun"></i>77</a>
								<span><i class="icon iconfont icon-aixin"></i>242</span>
								<span>2020-4-14</span>
							</div>
						</div>
					</li>
					-->
					
				</ul>
			</div>	
			<aside class="sidebar box">
				<h3>暂未设计</h3>
			</aside>
		</section>
		
		<?php include __DIR__ . '/../layouts/footer.php'?>
	</div>
	<script src="/js/app.js" type="test/javascript"></script>
	<script>
		var data = [
			{
				title: "跋涉：关于洗稿作者的一点感悟",
				text: "文/弋一 今天，百家号“单身的X小姐”号被封了，留在她账号上的文章全部被清空，只有一条关于申诉自己是被恶意投诉的动态，孤零零地矗立在那儿，提示她...",
				//img: "/images/banner/banner_1.jpg",
				name: "零点壹弋一"
			},
			{
				title: "配置 macOS 本地环境",
				text: "让命令行看起来更简单 内容如下 让配置生效 接着需要安装 macOS 系统的命令行工具，执行如下命令 这样的安装命令会删除旧版本的命令行工具包，...",
				img: false,
				name: "候鸟与暖风"
			},
			{
				title: "JVM 堆 栈 方法区",
				text: "JVM:Java Virtual Machine 一、堆 栈 方法区分布 1、堆区: 提供所有类实例和数组对象存储区域 jvm只有一个堆区(he...",
				img: false,
				name: "五四青年_4e7d"
			},
			{
				title: "SQLI - 报错注入",
				text: "0x01 简介 报错注入是sql注入的一种常见类型，通过构造特殊的sql语句，让信息以报错的形式显示出来。然而报错注入又有很多种，这里只写基于u...",
				//img: "/images/banner/banner_3.jpg",
				name: "灰灰_82a6"
			},
			{
				title: "跋涉：关于洗稿作者的一点感悟",
				text: "文/弋一 今天，百家号“单身的X小姐”号被封了，留在她账号上的文章全部被清空，只有一条关于申诉自己是被恶意投诉的动态，孤零零地矗立在那儿，提示她...",
				//img: "/images/banner/banner_1.jpg",
				name: "零点壹弋一"
			},
			{
				title: "配置 macOS 本地环境",
				text: "让命令行看起来更简单 内容如下 让配置生效 接着需要安装 macOS 系统的命令行工具，执行如下命令 这样的安装命令会删除旧版本的命令行工具包，...",
				img: false,
				name: "候鸟与暖风"
			},
			{
				title: "JVM 堆 栈 方法区",
				text: "JVM:Java Virtual Machine 一、堆 栈 方法区分布 1、堆区: 提供所有类实例和数组对象存储区域 jvm只有一个堆区(he...",
				img: false,
				name: "五四青年_4e7d"
			},
			{
				title: "SQLI - 报错注入",
				text: "0x01 简介 报错注入是sql注入的一种常见类型，通过构造特殊的sql语句，让信息以报错的形式显示出来。然而报错注入又有很多种，这里只写基于u...",
				//img: "/images/banner/banner_3.jpg",
				name: "灰灰_82a6"
			},
			{
				title: "跋涉：关于洗稿作者的一点感悟",
				text: "文/弋一 今天，百家号“单身的X小姐”号被封了，留在她账号上的文章全部被清空，只有一条关于申诉自己是被恶意投诉的动态，孤零零地矗立在那儿，提示她...",
				//img: "/images/banner/banner_1.jpg",
				name: "零点壹弋一"
			},
			{
				title: "配置 macOS 本地环境",
				text: "让命令行看起来更简单 内容如下 让配置生效 接着需要安装 macOS 系统的命令行工具，执行如下命令 这样的安装命令会删除旧版本的命令行工具包，...",
				img: false,
				name: "候鸟与暖风"
			},
			{
				title: "JVM 堆 栈 方法区",
				text: "JVM:Java Virtual Machine 一、堆 栈 方法区分布 1、堆区: 提供所有类实例和数组对象存储区域 jvm只有一个堆区(he...",
				img: false,
				name: "五四青年_4e7d"
			},
			{
				title: "SQLI - 报错注入",
				text: "0x01 简介 报错注入是sql注入的一种常见类型，通过构造特殊的sql语句，让信息以报错的形式显示出来。然而报错注入又有很多种，这里只写基于u...",
				//img: "/images/banner/banner_3.jpg",
				name: "灰灰_82a6"
			},
			{
				title: "跋涉：关于洗稿作者的一点感悟",
				text: "文/弋一 今天，百家号“单身的X小姐”号被封了，留在她账号上的文章全部被清空，只有一条关于申诉自己是被恶意投诉的动态，孤零零地矗立在那儿，提示她...",
				//img: "/images/banner/banner_1.jpg",
				name: "零点壹弋一"
			},
			{
				title: "配置 macOS 本地环境",
				text: "让命令行看起来更简单 内容如下 让配置生效 接着需要安装 macOS 系统的命令行工具，执行如下命令 这样的安装命令会删除旧版本的命令行工具包，...",
				img: false,
				name: "候鸟与暖风"
			},
			{
				title: "JVM 堆 栈 方法区",
				text: "JVM:Java Virtual Machine 一、堆 栈 方法区分布 1、堆区: 提供所有类实例和数组对象存储区域 jvm只有一个堆区(he...",
				img: false,
				name: "五四青年_4e7d"
			},
			{
				title: "SQLI - 报错注入",
				text: "0x01 简介 报错注入是sql注入的一种常见类型，通过构造特殊的sql语句，让信息以报错的形式显示出来。然而报错注入又有很多种，这里只写基于u...",
				//img: "/images/banner/banner_3.jpg",
				name: "灰灰_82a6"
			},
			
		];
		// main-list
		var l = document.querySelector(".main-list");
		var str = ""
		for (var i = 0; i < data.length; i ++) {
			str += "<li>";
			if (data[i].img) {
				str += "<a href=\"\" class=\"wrap-img\"><img src=\"" + data[i].img + "\"></a>";
			}
			str += "\n\t<div class=\"content\">";
			str += "\n\t<a href=\"\" class=\"title\">" + data[i].title + "</a>";
			str += "<p class=\"text\">" + data[i].text + "</p>";
			str += "<div class=\"meta\">";
			str += "\n\t<a href=\"\" class=\"nickname\">" + data[i].name + "</a>";
			str += "\n\t<a href=\"\"><i class=\"icon iconfont icon-pinglun\"></i>" + parseInt(Math.random() * 10) + "</a>";
			str += "\n\t<span><i class=\"icon iconfont icon-aixin\"></i>" + parseInt(Math.random() * 10) + "</span>"
			str += "\n\t<span>2020-4-14</span>"
			str += "\n\t</div>";
			str += "\n</li>";
		}
		l.innerHTML += str;
	</script>
</body>
</html>