<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>注册</title>
	<link href="/images/favicon.ico" rel="icon" type="image/ico">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="/css/app.css" rel="stylesheet">
</head>
<body>
	<div id="app">
        <?php include VIEW . '/layouts/header.php'?>
		<section class="container">
            <div class="w-50 bg-white m-5 ml-auto mr-auto">
                <form class="p-5 shadow rounded" id="fromAuth" action="/register" method="post" novalidate>
                    <div class="text-center mb-4 h4">注册账号</div>
                    <div class="form-group">
                        <label class="sr-only" for="inputName">用户名</label>
                        <input type="text" class="form-control" id="inputName" name="name" required="required"  pattern="[A-Za-z0-9]{6,30}" placeholder="用户名">
                        <div class="invalid-feedback"><small>请输入用户名6-30位字母或数字！</small></div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputUsername">账号</label>
                        <input type="text" class="form-control" id="inputUsername" name="username" required="required"  pattern="[A-Za-z0-9]{6,30}" placeholder="账号">
                        <div class="invalid-feedback"><small>请输入用户名6-30位字母或数字！</small></div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputPass">密码</label>
                        <input type="password" class="form-control" id="inputPass" name="password" required="required"  pattern="[A-Za-z0-9]{6,30}" placeholder="密码">
                        <div class="invalid-feedback"><small>请输入用户名6-30位字母或数字！</small></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">注册</button>
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-secondary btn-block">重置</button>
                    </div>
                </form>
            </div>
		</section>
        <?php include VIEW . '/layouts/footer.php'?>
	</div>
	<script src="/js/jquery/jquery.3.5.1.min.js"></script>
	<script src="/js/bootstrap/bootstrap.min.js"></script>
    <script src="/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script>
        $(function() {
            $('#fromAuth').submit(function (event) {
                var f = $(this);
                if(f[0].checkValidity()===false){
                    event.preventDefault();
                    event.stopPropagation();
					f.addClass("was-validated");
					return false;
                } else {
                	return true;
				}
            });
        });
    </script>
</body>
</html>