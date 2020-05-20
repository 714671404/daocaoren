<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>首页</title>
	<link href="/images/favicon.ico" rel="icon" type="image/ico">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
	<div id="app" class="container-fluid">
<!--codecasts.com-->
        <?php include __DIR__ . '/../layouts/header.php'?>

			<div class="row jumbotron p-3 p-md-5 text-white rounded bg-dark">
				<div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
					<p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
					<p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
				</div>
			</div>

        <?php include __DIR__ . '/../layouts/footer.php'?>
	</div>

    <script src="/js/jquery/jquery.3.5.1.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>

</body>
</html>