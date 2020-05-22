<header id="header" class="bg-white shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light mx-auto p-0">
        <!--.navbar-text 用于添加垂直居中的文本字符串。-->
        <!--.navbar-brand 为您的公司，产品或项目名称。-->
        <a href="/" class="navbar-brand ml-3">稻草人</a>
        <!--
            .navbar-toggler 用於我們的折疊插件和其他 navigation toggling 行為。
            data-target对应隐藏模型id
        -->
        <!--.form-inline 用于任何表单控件和操作。-->

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
                <li class="nav-item">
                    <a class="nav-link" href="/">文章</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CSS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">JavaScript</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Python</a>
                </li>
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
            <!--用户信息-->
            <div class="navbar-nav user-info">
                <a class="btn">登陆</a>
                <a class="btn">注册</a>
            </div>
        </div>
    </nav>
</header>