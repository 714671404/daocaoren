<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>添加文章</title>
    <link href="/images/favicon.ico" rel="icon" type="image/ico">
</head>

<body>
    <div style="width: 1000px; margin: 15px auto;">
        <div id="edit"></div>
    </div>
    <script src="/js/wangEditor-3.1.1/wangEditor.js"></script>
    <script>
        var E = window.wangEditor;
        var editor = new E('#edit');
        // 自定义菜单配置
        editor.customConfig.menus = [
            'head',  // 标题
            'bold',  // 粗体
            'fontSize',  // 字号
            'fontName',  // 字体
            'italic',  // 斜体
            'underline',  // 下划线
            'strikeThrough',  // 删除线
            'foreColor',  // 文字颜色
            'backColor',  // 背景颜色
            'link',  // 插入链接
            'list',  // 列表
            'justify',  // 对齐方式
            'quote',  // 引用
            'emoticon',  // 表情
            'image',  // 插入图片
            'table',  // 表格
            'video',  // 插入视频
            'code',  // 插入代码
            'undo',  // 撤销
            'redo'  // 重复
        ];
        // 通过 url 参数配置 debug 模式。url 中带有 wangeditor_debug_mode=1 才会开启 debug 模式
        // editor.customConfig.debug = location.href.indexOf('wangeditor_debug_mode=1');
        // 直接设置debug
        editor.customConfig.debug = true;

        // 关闭粘贴样式的过滤
        //editor.customConfig.pasteFilterStyle = false;
        // 忽略粘贴内容中的图片
        //editor.customConfig.pasteIgnoreImg = true;
        // 自定义处理粘贴的文本内容
        //editor.customConfig.pasteTextHandle = function (content) {
        //    // content 即粘贴过来的内容（html 或 纯文本），可进行自定义处理然后返回
        //    return content + '<p>在粘贴内容后面追加一行</p>'
        //};

        // 插入链接的校验
        // editor.customConfig.linkCheck = function (text, link) {
        //     console.log(text) // 插入的文字
        //     console.log(link) // 插入的链接
        //
        //     return true // 返回 true 表示校验成功
        //     // return '验证失败' // 返回字符串，即校验失败的提示信息
        // }；

        // 插入网络图片的校验
        // editor.customConfig.linkImgCheck = function (src) {
        //     console.log(src); // 图片的链接
        //
        //     return true // 返回 true 表示校验成功
        //     // return '验证失败' // 返回字符串，即校验失败的提示信息
        // };

        // editor.customConfig.onfocus = function () {
        //     console.log("onfocus")
        // };

        // 自定义配置颜色（字体颜色、背景色）
        editor.customConfig.colors = [
            '#000000',
            '#eeece0',
            '#1c487f',
            '#4d80bf',
            '#c24f4a',
            '#8baa4a',
            '#7b5ba1',
            '#46acc8',
            '#f9963b',
            '#ea6f5a'
        ];

        // 自定义字体
        editor.customConfig.fontNames = [
            '宋体',
            '微软雅黑',
            'Arial',
            'Tahoma',
            'Verdana'
        ];

        // 下面两个配置，使用其中一个即可显示“上传图片”的tab。但是两者不要同时使用！！！
        // editor.customConfig.uploadImgShowBase64 = true;   // 使用 base64 保存图片
        // editor.customConfig.uploadImgServer = '/upload/';  // 上传图片到服务器

        // 上传图片到服务器
        editor.customConfig.uploadFileName = 'myFile'; //设置文件上传的参数名称
        editor.customConfig.uploadImgServer = '/upload'; //设置上传文件的服务器路径
        editor.customConfig.uploadImgMaxSize = 3 * 1024 * 1024; // 将图片大小限制为 3M
        //自定义上传图片事件
        editor.customConfig.uploadImgHooks = {
            before : function(xhr, editor, files) {

            },
            success : function(xhr, editor, result) {
                console.log("上传成功");
            },
            fail : function(xhr, editor, result) {
                console.log("上传失败,原因是"+result);
            },
            error : function(xhr, editor) {
                console.log("上传出错");
            },
            timeout : function(xhr, editor) {
                console.log("上传超时");
            }
        }

        // 隐藏“网络图片”tab
        // editor.customConfig.showLinkImg = false;

        editor.create();
    </script>
</body>
</html>