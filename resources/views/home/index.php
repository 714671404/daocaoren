<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>首页</title>
	<link href="/images/favicon.ico" rel="icon" type="image/ico">
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
	<div id="app">
        <!--codecasts.com-->
        <?php include VIEW . '/layouts/header.php'?>
        <section class="container">
            <div class="row mt-3 mb-4">
                <!--主体内容-->
                <div class="col-sm-9 col-md-9 col-sm-9">
					<!--图片轮播-->
					<div id="carouselExampleIndicators" class="carousel slide mb-3 shadow-sm" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="/images/banner/banner1.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="/images/banner/banner2.jpg" class="d-block w-100" alt="...">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
                    <!--文章展示区-->
                    <div class="bg-white shadow-sm">
                        <nav>
                            <div class="nav nav-pills toast-header" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active"
                                   id="nav-popular-tab"
                                   data-toggle="tab"
                                   href="#nav-popular"
                                   role="tab",
								   data-where="desc"
                                   aria-controls="nav-popular"
                                   aria-selected="true">
                                    热门
                                </a>
                                <a class="nav-item nav-link"
                                   id="nav-new-tab"
                                   data-toggle="tab"
                                   href="#nav-new"
                                   role="tab",
								   data-where=""
                                   aria-controls="nav-new"
                                   aria-selected="false">
                                    最新
                                </a>
                                <a class="nav-item nav-link"
                                   id="nav-new-list-tab"
                                   data-toggle="tab"
                                   href="#nav-new-list"
                                   role="tab",
								   data-where="desc"
                                   aria-controls="nav-new-list"
                                   aria-selected="false">
                                    榜单
                                </a>
                            </div>
                            <div class="tab-content toast-body" id="nav-tabContent">
                                <div class="tab-pane fade show active"
                                     id="nav-popular"
                                     role="tabpanel"
                                     aria-labelledby="nav-popular-tab">
                                    <ul class="nav flex-column nav-list"><!--<li class="container pt-3 pb-3 border-bottom">
                                            <div class="row">
                                                <div class="col-9 title-row">
                                                    <a href="/article/1" class="title">基于谷歌最新AAC架构打造的Android MVVM开发框架，使用该框架可以快速开发一个高质量、易维护的Android应用</a>
                                                    <p class="body mt-1 mb-1">
                                                        读完《平凡的世界》，心里久久不能平静。除了对人生苦难难以平复之外，对路遥笔下几个主人公的遭遇也是念念不忘。趁着自己一颗还没有冰冷的心，书中故事里...
                                                    </p>
                                                    <ul class="nav">
                                                        <li class="nav-item">
                                                            <a class="nav-list mr-2" href="/">
                                                                <span>碧海蓝天</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-list mr-2" href="/">
                                                                <i class="iconfont icon-xiaoxikefuxinxitongzhi"></i>
                                                                48
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <span class="nav-list mr-2">
                                                                <i class="iconfont icon-aixin"></i>
                                                                172
                                                            </span>
                                                        </li>
                                                        <li class="nav-item">
                                                            <span class="nav-list mr-2">2020-5-21</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <a href="/article/1" class="d-block">
                                                        <img src="/images/banner/banner_3.jpg" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>--></ul>
                                </div>
                                <div class="tab-pane fade"
                                     id="nav-new"
                                     role="tabpanel"
                                     aria-labelledby="nav-new-tab">
                                    <ul class="nav flex-column nav-list"></ul>
                                </div>
                                <div class="tab-pane fade"
                                     id="nav-new-list"
                                     role="tabpanel"
                                     aria-labelledby="nav-new-list-tab">
									<ul class="nav flexcolumn nav-list"></ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!--其他展示区-->
                <div class="col-sm-3">
                    <!--友情链接-->
                    <div class="bg-white shadow-sm">
                        <div class="title pt-3 pl-3 pb-3 border-bottom">友情链接</div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="https://google.com" class="nav-link">
                                    google
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.awaimai.com/" class="nav-link">
                                    歪卖博客
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://zhihu.com" class="nav-link">
                                    知乎
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://jianshu.com" class="nav-link">
                                    简书
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <?php include VIEW . '/layouts/footer.php'?>
	</div>

    <script src="/js/jquery/jquery.3.5.1.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <script>
			$(function() {
				init();
				function init()
				{
					var a = $('#nav-tab a');
					for (var i = 0; i < a.length; i ++) {
						if (a[i].className.indexOf('active') !== -1) {
							loading(a[i]);
							break;
						}
					}
				}
				$('#nav-tab').on('show.bs.tab', loading);
				function loading(e) {
					var arr = [
						{
							id: 1,
							title: '基于谷歌最新AAC架构打造的Android MVVM开发框架，使用该框架可以快速开发一个高质量、易维护的Android应用',
							text: '读完《平凡的世界》，心里久久不能平静。除了对人生苦难难以平复之外，对路遥笔下几个主人公的遭遇也是念念不忘。趁着自己一颗还没有冰冷的心，书中故事里',
							img: '/images/banner/banner_3.jpg',
							url: '/article/1',
							name: '碧海蓝天',
							comment: 48,
							attention: 200,
							time: "2020-5-21"
						},
						{
							id: 1,
							title: '基于谷歌最新AAC架构打造的Android MVVM开发框架，使用该框架可以快速开发一个高质量、易维护的Android应用',
							text: '读完《平凡的世界》，心里久久不能平静。除了对人生苦难难以平复之外，对路遥笔下几个主人公的遭遇也是念念不忘。趁着自己一颗还没有冰冷的心，书中故事里',
							img: '/images/banner/banner_3.jpg',
							url: '/article/1',
							name: '碧海蓝天',
							comment: 48,
							attention: 200,
							time: "2020-5-21"
						},
						{
							id: 1,
							title: '基于谷歌最新AAC架构打造的Android MVVM开发框架，使用该框架可以快速开发一个高质量、易维护的Android应用',
							text: '读完《平凡的世界》，心里久久不能平静。除了对人生苦难难以平复之外，对路遥笔下几个主人公的遭遇也是念念不忘。趁着自己一颗还没有冰冷的心，书中故事里',
							img: '/images/banner/banner_3.jpg',
							url: '/article/1',
							name: '碧海蓝天',
							comment: 48,
							attention: 200,
							time: "2020-5-21"
						},
						{
							id: 1,
							title: '基于谷歌最新AAC架构打造的Android MVVM开发框架，使用该框架可以快速开发一个高质量、易维护的Android应用',
							text: '读完《平凡的世界》，心里久久不能平静。除了对人生苦难难以平复之外，对路遥笔下几个主人公的遭遇也是念念不忘。趁着自己一颗还没有冰冷的心，书中故事里',
							img: '/images/banner/banner_3.jpg',
							url: '/article/1',
							name: '碧海蓝天',
							comment: 48,
							attention: 200,
							time: "2020-5-21"
						},
						{
							id: 1,
							title: '基于谷歌最新AAC架构打造的Android MVVM开发框架，使用该框架可以快速开发一个高质量、易维护的Android应用',
							text: '读完《平凡的世界》，心里久久不能平静。除了对人生苦难难以平复之外，对路遥笔下几个主人公的遭遇也是念念不忘。趁着自己一颗还没有冰冷的心，书中故事里',
							img: '/images/banner/banner_3.jpg',
							url: '/article/1',
							name: '碧海蓝天',
							comment: 48,
							attention: 200,
							time: "2020-5-21"
						}
					],
						dom = $(typeof e.target === 'string' ? e.getAttribute('href') : e.target.getAttribute('href'))[0].children[0],
						tmp;
					$.ajax({
						url: '/show/1/',
						type: 'get',
						success: function(data) {
							data = JSON.parse(data);
							if (data.status === 200) {
								data = data.data;
								for (var i = 0; i < data.length; i++) {
									tmp = "" +
										"<li class=\"container pt-3 pb-3 border-bottom\">" +
										"   <div class=\"row\">" +
										"       <div class=\"col-sm-12 title-row\">" +
										"           <a href=\"/article/" + data[i].id + "\" class=\"title\">" + data[i].title + "</a>" +
										"           <p class=\"body mt-1 mt-1 mb-1\"></p>" +
										"           <ul class=\"nav\">" +
										"               <li class=\"nav-item\">" +
										"                   <a class=\"nav-list mr-2\" href=\"/user/" + data[i].user_id + "\">" +
										"                       <span>" + data[i].name + "</span>" +
										"                   </a>" +
										"               </li>" +
										"               <li class=\"nav-item\">" +
										"                   <a class=\"nav-list mr-2\" href=\"/user/" + data[i].user_id + "\">" +
										"                       <i class=\"iconfont icon-xiaoxikefuxinxitongzhi\"></i>" + data[i].comment +
										"                   </a>" +
										"               </li>" +
										"               <li class=\"nav-item\">" +
										"                   <span class=\"nav-list mr-2\">" +
										"                       <i class=\"iconfont icon-aixin\"></i>" + data[i].attention +
										"                   </span>" +
										"               </li>" +
										"               <li class=\"nav-item\">" +
										"                   <span class=\"nav-list mr-2\">" + data[i].created_at + "</span>" +
										"               </li>" +
										"           </ul>" +
										"       </div>" +
										"   </div>" +
										"</li>";
									dom.innerHTML += tmp;
								}
							} else {
								dom.innerHTML = "<h4>暂无文章</h4>";
							}
						}
					});
				}
			});
    </script>
</body>
</html>