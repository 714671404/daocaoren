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
	<div id="app">
        <?php include __DIR__ . '/../layouts/header.php'?>

        <div class="container">
            <div id="testImg" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testImg" data-slide-to="0" class="active"></li>
                    <li data-target="#testImg" data-slide-to="1"></li>
                    <li data-target="#testImg" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/banner/banner.gif" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/banner/banner_1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/banner/banner_3.jpg" class="d-block w-100">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testImg" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testImg" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <?php include __DIR__ . '/../layouts/footer.php'?>
	</div>

    <script src="/js/jquery/jquery.3.5.1.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>

</body>
</html>