<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>登录</title>
	<link href="/images/favicon.ico" rel="icon" type="image/ico">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="/css/app.css" rel="stylesheet">
</head>
<body>
	<div id="app">
		@include('layouts.header')
		<section class="container">
			<div class="auth box">
				<h3 class="title">登录</h3>
				<form action="/login" method="post">
					<div class="input-layouts">
						<input type="text" name="username" placeholder="请输入会员账号">
						<i class="iconfont icon-yonghu"></i>
					</div>
					<div class="input-layouts">            
						<input type="password" name="password" placeholder="请输入密码">
						<i class="iconfont icon--"></i>
					</div>
					<button class="btn blue-btn">注册</button>
				</form>
			</div>
		</section>
        @include('layouts.footer')
	</div>
</body>
</html>