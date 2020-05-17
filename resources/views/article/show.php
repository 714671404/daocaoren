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
			<div class="main box">
                <!--文章内容-->
				<div class="article-content">
                    <h3 class="title"><?php echo $data['title']?></h3>
                    <div class="post-author">
                        <a href="/" class="author-info-img"><img src="<?php echo $data['avatar']?>"></a>
                        <div class="author-info">
                            <div class="author-info-head">
                                <a href="/" class="author-info-name"><?php echo $data['name']?></a>
                            </div>
                            <div class="article-time">
                                <span><?php echo $data['created_at']?></span>
                            </div>
                        </div>
                    </div>
                    <div class="text"><?php echo $data['text']?></div>
                </div>
                <!--功能区-->
                <div class="content-actions">
                    <span class="btn">
                        <i class="iconfont icon-aixin"></i>
                        <span>点赞</span>
                        <span>100</span>
                    </span>
                    <span class="btn">
                        <i class="iconfont icon-pinglun"></i>
                        <span>评论</span>
                        <span>12312</span>
                    </span>
                    <span class="btn">
                        <i class="iconfont icon-shoucang"></i>
                        <span>收藏</span>
                    </span>
                </div>


                <!--评论区-->
                <div class="comment-area">
                    <h3 class="title">70 评论</h3>
                    <!--发布评论-->
                    <div class="post-comment">
                        <input type="text" id="comment" placeholder="写下您的评论...">
                        <button clas="btn">发布</button>
                    </div>
                    <!--评论展示-->
                    <div class="comment-list">
                        <ul>
                            <li>
                                <a href="/user/1"><img src="/upload/avatar/default.jpg"></a>
                                <div class="comment-user">
                                    <h3 class="title">夏天夏天夏天夏天夏天夏天</h3>
                                    <span>2020-5-17 15:31:49</span>
                                </div>
                                <div class="comment-message">评论美容评论美容评论美容评论美容评论美容评论美容评论美容评论美容</div>
                                <div class="comment-actions">
                                    <button>
                                        <i class="iconfont icon-xiaoxikefuxinxitongzhi"></i>
                                        <span>回复</span>
                                    </button>
                                </div>
                                <div class="post-comment">
                                    <input type="text" id="comment" placeholder="写下您的评论...">
                                    <button clas="btn">发布</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
			</div>
            <aside class="sidebar box">开发中</aside>
		</section>
		<?php include __DIR__ . "/../layouts/footer.php"?>
	</div>
</body>
</html>