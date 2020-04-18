<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>注册</title>
	<link href="/images/favicon.ico" rel="icon" type="image/ico">
	<link href="/css/app.css" rel="stylesheet">
</head>
<body>
	<div id="app">
		<?php include __DIR__ . "/../layouts/header.php"?>
		<section class="container">
			<div class="auth box">
				<h3 class="title">注册</h3>
				<form action="/register" method="post">
					<div class="input-layouts">
						<input type="text" name="username" placeholder="设置昵称">
						<i class="iconfont icon-yonghu"></i>
					</div>
					<div class="input-layouts">
						<input type="text" name="user" placeholder="请输入会员账号">
						<i class="iconfont icon-yonghu"></i>
					</div>
					<div class="input-layouts">            
						<input type="password" name="pass" placeholder="请输入密码">
						<i class="iconfont icon-suo"></i>
					</div>
					<button class="btn blue-btn">注册</button>
				</form>
			</div>
		</section>
		<?php include __DIR__ . "/../layouts/footer.php"?>
	</div>
</body>
</html>