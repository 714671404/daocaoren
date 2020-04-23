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
						<input type="text" name="name" placeholder="设置昵称" data-index="1" maxlength="25">
						<i class="iconfont icon-yonghu"></i>
                        <span class="error">123</span>
					</div>
					<div class="input-layouts">
						<input type="text" name="username" placeholder="请输入会员账号" data-index="2" maxlength="25">
						<i class="iconfont icon-yonghu"></i>
                        <span class="error">123</span>
					</div>
					<div class="input-layouts">
						<input type="password" name="password" placeholder="请输入密码" data-index="3" maxlength="35">
						<i class="iconfont icon-suo"></i>
                        <span class="error">123</span>
					</div>
					<button type="button" class="btn blue-btn">注册</button>
				</form>
			</div>
		</section>
		<?php include __DIR__ . "/../layouts/footer.php"?>
	</div>
	<script src="/js/app.js" type="text/javascript"></script>
    <script>
        var
            form = document.querySelector(".auth form"),
            str,
            obj,
            error_message = form.querySelectorAll('.input-layouts .error');

        obj = form.querySelectorAll('input');
        for (var i = 0; i < obj.length; i ++) {
            obj[i].onblur = function() {
                var
                    index = this.getAttribute('data-index') - 1,
                    error_mes = validator(this.value, index);

                if (error_mes !== true) {
                    error_message[index].style.display = 'inline';
                    error_message[index].innerHTML = ['昵称', '账号', '密码'][index] + error_mes;
                } else {
                    error_message[index].style.display = 'none';
                }
            }
        }
        form.querySelector('button').onclick = function() {
            var
                name = form.name.value,
                username = form.username.value,
                pass = form.password.value;

            if ((name.length === 0) || (username.length === 0) || (pass.length === 0)) {
                alert('注册信息不能为空!');
                return;
            }
            for (var i = 0; i < error_message.length; i ++) {
                if (error_message[i].style.display === 'inline') {
                    alert(error_message[i].style.display);
                    alert('请核对注册系信息格式知否正确!');
                    return;
                }
            }
            form.submit();

        };
        function validator(data, index)
        {
            if (data.length === 0) {
                return '不能为空';
            }
            var min = [2, 4, 6];
            if (data.length < min[index]) {
                return '长度不能小于' + min[index];
            }
            var max = [25, 25, 35];
            if (data.length > max[index]) {
                return '长度不可以大于' + max[index];
            }
            var str = 'qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM@.';
            if (index === 1) {
                for (var i = 0; i < data.length; i ++) {
                    if (str.indexOf(data[i]) === -1) {
                        return '内不能包含特殊符号';
                    }
                }
            }
            return true;
        }
    </script>
</body>
</html>