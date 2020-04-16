<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title><?= $data['title']?></title>
	<link href="/images/favicon.ico" rel="icon" type="image/ico">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <?php include __DIR__ . '/../layouts/header.php'?>
        <section class="main">
			<!-- 轮播图片
			<div class="banner">
				<div class="slide">
					<ul class="slide-wrapper">
						<li><img src="/images/banner/banner.gif"></li>
						<li><img src="/images/banner/banner_1.jpg"></li>
						<li><img src="/images/banner/banner_3.jpg"></li>
					</ul>

					<ul class="slide-page"></ul>
				</div>
			</div>
			-->

			<div class="content layout">
				<div class="main-left">
					<div class="">

					</div>
				</div>


				<div class="main-right"></div>
			</div>
		</section>
        <?php include __DIR__ . '/../layouts/footer.php'?>
    </div>
    <script src="/js/app.js" type="text/javascript"></script>
	<script src="/js/slide/slide.js" type="text/javascript"></script>
	<script>
		Slide({
			el: '#el',
			options: {
				width: 1000,
				count: 3
			}
		})
	</script>
</body>
</html>