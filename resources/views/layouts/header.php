<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!--.navbar-text 用于添加垂直居中的文本字符串。-->

        <!--.navbar-brand 为您的公司，产品或项目名称。-->
        <a href="/" class="navbar-brand">稻草人</a>
        <!--
            .navbar-toggler 用於我們的折疊插件和其他 navigation toggling 行為。
            data-target对应隐藏模型id
        -->
        <button class="navbar-toggler"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                type="button">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- collapse .navbar-collapse用于通过父断点进行分组和隐藏导航列内容。-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- .navbar-nav 提供完整的高和轻便的导航（包括对下拉菜单的支持）。-->
            <ul class="navbar-nav mr-auto">
                <!--
                <li class="nav-item active">
                    <a class="nav-link" href="#">首页</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       id="navbarDropdown"
                       role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false"
                       href="#">文章</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">PHP</a>
                        <a class="dropdown-item" href="#">CSS</a>
                        <a class="dropdown-item" href="#">JavaScript</a>
                        <a class="dropdown-item" href="#">Python</a>
                    </div>
                </li>
            </ul>

            <!--.form-inline 用于任何表单控件和操作。-->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="搜索" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">搜索</button>
            </form>
            <a href="/login" class="btn btn-group">登录</a>
            <a href="/register" class="btn btn-group">注册</a>
        </div>
    </nav>
</header>