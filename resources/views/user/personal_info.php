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
			<div class="row">
				<div class="col-12 p-3">
					<div class="personal-info">
						<a class="float-left w-p-80 h-p-80" href="/user/<?php echo $data['id']?>">
							<img class="rounded-circle img-fluid" src="<?php echo $data['avatar']?>">
						</a>
						<div class="personal-user">
							<a class="personal-head d-block pt-2 mb-2" href="/user/<?php echo $data['id']?>"><?php echo $data['name']?></a>
							<ul class="nav mt-2 personal-body">
								<li class="navbar-item">
									<a href="/">文章（1324234）</a>
								</li>
								<li class="nav-item">
									<a href="/">关注（1324234）</a>
								</li>
								<li class="nav-item">
									<a href="/">粉丝（1324234）</a>
								</li>
								<li class="nav-item">
									<a href="/" class="p-0">收藏喜欢（1324234）</a>
								</li>
							</ul>
						</div>
					</div>
					<div class=""></div>
				</div>
			</div>
		</section>
    </div>
    <script src="/js/jquery/jquery.3.5.1.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>