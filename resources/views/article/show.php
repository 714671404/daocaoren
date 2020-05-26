<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>文章</title>
    <link href="/images/favicon.ico" rel="icon" type="image/ico">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
	<div id="app">
		<?php include VIEW . "/layouts/header.php"?>
		<section class="container">
			<div class="row m-3">
				<div class="col-lg-12 pl-3 pr-3 pt-4 pb-4 bg-white rounded-10 shadow">
					<div class="h3 p-3"><?php echo $data['title']?></div>
					<div class="user-info m-3 border-bottom">
						<a class="float-left" href="/user/<?php echo $data['user_id']?>"><img class="rounded-circle img-fluid" src="<?php echo $data['avatar']?>"></a>
						<div class="author-info">
							<a href="/user/<?php echo $data['user_id']?>"><?php echo $data['name']?></a>
							<p><?php echo $data['created_at']?></p>
						</div>
					</div>
					<div class="text-body text-wrap m-4 pt-1 overflow-hidden"><?php echo $data['text']?></div>
				</div>
			</div>
		</section>
		<?php include VIEW . "/layouts/footer.php"?>
	</div>
    <script src="/js/jquery/jquery.3.5.1.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
	<script src="/js/jquery/jquery.base64.js"></script>
    <script>
    </script>
</body>
</html>