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
        <?php include __DIR__ . '/../layouts/header.php'?>

        <div class="container">
            <div class="row mt-3 mb-4">
                <!--文章展示区-->
                <div class="col-sm-8 col-md-8">
                    <div class="bg-white">
                        <nav>
                            <div class="nav nav-pills toast-header" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active"
                                   id="nav-popular-tab"
                                   data-toggle="tab"
                                   href="#nav-popular"
                                   role="tab"
                                   aria-controls="nav-popular"
                                   aria-selected="true">
                                    热门
                                </a>
                                <a class="nav-item nav-link"
                                   id="nav-new-tab"
                                   data-toggle="tab"
                                   href="#nav-new"
                                   role="tab"
                                   aria-controls="nav-new"
                                   aria-selected="false">
                                    最新
                                </a>
                                <a class="nav-item nav-link"
                                   id="nav-new-list-tab"
                                   data-toggle="tab"
                                   href="#nav-new-list"
                                   role="tab"
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
                                    <ul class="nav flex-column nav-list">
                                        <li class="container pt-3 pb-3 border-bottom">
                                            <div class="row">
                                                <div class="col-9 title-row">
                                                    <a href="/article/1" class="title">基于谷歌最新AAC架构打造的Android MVVM开发框架，使用该框架可以快速开发一个高质量、易维护的Android应用</a>
                                                    <p class="body mt-1 mt-1 mb-1">
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
                                                    <a href="/article/1">
                                                        <img src="/images/banner/banner_3.jpg" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                                <div class="tab-pane fade"
                                     id="nav-new"
                                     role="tabpanel"
                                     aria-labelledby="nav-new-tab">
                                    <ul class="nav nav flex-column nav-list"></ul>
                                </div>
                                <div class="tab-pane fade"
                                     id="nav-new-list"
                                     role="tabpanel"
                                     aria-labelledby="nav-new-list-tab">
                                    这里是热门榜单展示区
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!--其他展示区-->
                <div class="col-sm-4">
                    <div class="bg-info">1231231</div>
                </div>
            </div>
        </div>

        <?php include __DIR__ . '/../layouts/footer.php'?>
	</div>

    <script src="/js/jquery/jquery.3.5.1.min.js"></script>
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <script>
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            /*
            <li class="container pt-3 pb-3 border-bottom">
                <div class="row">
                    <div class="col-9 title-row">
                        <a href="/article/1" class="title">基于谷歌最新AAC架构打造的Android MVVM开发框架，使用该框架可以快速开发一个高质量、易维护的Android应用</a>
                        <p class="body mt-1 mb-0">
                            读完《平凡的世界》，心里久久不能平静。除了对人生苦难难以平复之外，对路遥笔下几个主人公的遭遇也是念念不忘。趁着自己一颗还没有冰冷的心，书中故事里
                        </p>
                        <ul class="nav">
                            <li class="nav-item">
                                <i>12312</i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <a href="/article/1">
                            <img src="/images/banner/banner_3.jpg" class="img-fluid">
                        </a>
                    </div>
                </div>
            </li>
             */
            var arr = [
                {
                    title: '基于谷歌最新AAC架构打造的Android MVVM开发框架，使用该框架可以快速开发一个高质量、易维护的Android应用',
                    text: '读完《平凡的世界》，心里久久不能平静。除了对人生苦难难以平复之外，对路遥笔下几个主人公的遭遇也是念念不忘。趁着自己一颗还没有冰冷的心，书中故事里',
                    img: ''
                }
            ];
            var dom = $("#" + e.target.getAttribute('aria-controls'))[0].children[0];
            var li = document.createElement('li');
        });
    </script>
</body>
</html>