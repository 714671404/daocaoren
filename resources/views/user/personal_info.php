<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>个人信息</title>
    <link href="/images/favicon.ico" rel="icon" type="image/ico">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <?php include VIEW . '/layouts/header.php'?>

        <section class="container">
			<div class="main box">
				<div class="top">
					<a href="/user/<?php echo $_SESSION['id']?>" class="avatar">
						<img src="<?php echo $_SESSION['avatar']?>">
					</a>
					<div class="title"></div>
					<div class="info"></div>
				</div>
			</div>
			<aside class="sidebar box">
				<h3>暂未设计</h3>
			</aside>
        </section>

        <?php include VIEW . '/layouts/footer.php'?>
    </div>
    <script src="/js/jquery/jquery.3.5.1.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>