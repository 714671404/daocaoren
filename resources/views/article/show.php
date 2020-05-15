<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>文章</title>
	<link href="/images/favicon.ico" rel="icon" type="image/ico">
	<link href="/css/app.css" rel="stylesheet">
</head>
<body>
	<div id="app">
		<?php include __DIR__ . "/../layouts/header.php"?>
		<section class="container">
			<div style="width: 100%">
				<h3><?php echo $data['title']?></h3>
				<div><?php echo $data['text']?></div>
				<div><?php echo $data['created_at']?></div>
			</div>
		</section>
		<?php include __DIR__ . "/../layouts/footer.php"?>
	</div>
</body>
</html>