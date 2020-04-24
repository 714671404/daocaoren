<header class="header">
	<nav class="navbar">
		<a href="/" class="logo"><img src="/images/logo.png"></a>
		<ul class="nav">
			<li><a href="/">首页</a></li>
			<li><a href="">HTML</a></li>
			<li><a href="">CSS</a></li>
			<li><a href="">JavaScript</a></li>
			<li><a href="">PHP</a></li>
			<li><a href="">Python</a></li>
		</ul>
        <div class="select">
            <form>
                <input type="text" class="select-input" placeholder="输入搜索内容">
            </form>
        </div>
		<div class="auth">
            <?php if (!isset($_SESSION['username'])) {?>
            <a href="/login" class="btn login-btn">登录</a>
            <a href="/register" class="btn register-btn">注册</a>
            <?php } else { ?>
            <div class="user">
                <img src="/images/avatar/default.jpg">
                <ul class="nav">
                    <li><a href="/">个人中心</a></li>
                    <li><a href="/logout">退出</a></li>
                </ul>
            </div>
            <?php }?>
		</div>
	</nav>
</header>