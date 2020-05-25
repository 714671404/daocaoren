<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>添加文章</title>
    <link href="/images/favicon.ico" rel="icon" type="image/ico">
	<link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="/css/bootstrap/font-awesome.css" rel="stylesheet">
	<link href="/css/app.css" rel="stylesheet">
	<style>
		#editor {
			max-height: calc(100vh - 348px);
			height: calc(100vh - 348px);
			background-color: white;
			border-collapse: separate;
			border: 1px solid rgb(204, 204, 204);
			padding: 4px;
			box-sizing: content-box;
			-webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
			box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
			border-top-right-radius: 3px; border-bottom-right-radius: 3px;
			border-bottom-left-radius: 3px; border-top-left-radius: 3px;
			overflow: scroll;
			outline: none;
			margin-bottom: 10px;
		}
		#voiceBtn {
			width: 20px;
			color: transparent;
			background-color: transparent;
			transform: scale(2.0, 2.0);
			-webkit-transform: scale(2.0, 2.0);
			-moz-transform: scale(2.0, 2.0);
			border: transparent;
			cursor: pointer;
			box-shadow: none;
			-webkit-box-shadow: none;
		}

		div[data-role="editor-toolbar"] {
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		.dropdown-menu a {
			cursor: pointer;
		}

	</style>
</head>

<body>
	<?php include VIEW . '/layouts/header.php'?>
	<!--https://blog.csdn.net/z9oclock/article/details/84070921-->
	<!--https://www.tiny.cloud/docs/demo/basic-example/#-->
	<!--https://www.teakki.com/p/57dfb282d3a7507f975e7ad0-->
	<!--https://www.teakki.com/p/57dfb282d3a7507f975e7ad0-->
    <!--https://simditor.tower.im/-->
		<section class="container">
			<div class="alert alert-danger" role="alert" style="display: none;"></div>
			<form action="/article/store" method="post" enctype="multipart/form-data">
				<div style="margin-top:20px" class="input-group input-group-lg rounded">
					<span class="input-group-addon"></span>
					<input type="text" placeholder="标题" name="title" class="form-control">
				</div>
				<div style="margin-top:10px" data-role="editor-toolbar" data-target="#editor" class="btn-toolbar border-left border-top border-right">
					<div class="btn-group">
						<a data-toggle="dropdown" title="Font" class="btn dropdown-toggle">
							<i class="glyphicon glyphicon-font"></i>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu"></ul>
					</div>
					<div class="btn-group">
						<a data-toggle="dropdown" title="Font Size" class="btn dropdown-toggle">
							<i class="glyphicon glyphicon-text-height"></i>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
							<li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
							<li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
						</ul>
					</div>
					<div class="btn-group">
						<a data-edit="bold" title="Bold (Ctrl/Cmd+B)" class="btn">
							<i class="icon-bold"></i>
						</a>
						<a data-edit="italic" title="Italic (Ctrl/Cmd+I)" class="btn">
							<i class="icon-italic"></i>
						</a>
						<a data-edit="strikethrough" title="Strikethrough" class="btn">
							<i class="icon-strikethrough"></i>
						</a>
						<a data-edit="underline" title="Underline (Ctrl/Cmd+U)" class="btn">
							<i class="icon-underline"></i>
						</a>
					</div>
					<div class="btn-group">
						<a data-edit="insertunorderedlist" title="Bullet list" class="btn">
							<i class="icon-list-ul"></i>
						</a>
						<a data-edit="insertorderedlist" title="Number list" class="btn">
							<i class="icon-list-ol"></i>
						</a>
						<a data-edit="outdent" title="Reduce indent (Shift+Tab)" class="btn">
							<i class="icon-indent-left"></i>
						</a>
						<a data-edit="indent" title="Indent (Tab)" class="btn">
							<i class="icon-indent-right"></i>
						</a>
					</div>
					<div class="btn-group">
						<a data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)" class="btn">
							<i class="icon-align-left"></i>
						</a>
						<a data-edit="justifycenter" title="Center (Ctrl/Cmd+E)" class="btn">
							<i class="icon-align-center"></i>
						</a>
						<a data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)" class="btn">
							<i class="icon-align-right"></i>
						</a>
						<a data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)" class="btn">
							<i class="icon-align-justify"></i>
						</a>
					</div>
					<div class="btn-group">
						<a data-toggle="dropdown" title="Hyperlink" class="btn dropdown-toggle">
							<i class="icon-link"></i>
						</a>
						<div class="dropdown-menu input-append">
							<input placeholder="URL" type="text" data-edit="createLink" class="span2">
							<button type="button" class="btn">Add</button>
						</div>
						<a data-edit="unlink" title="Remove Hyperlink" class="btn">
							<i class="icon-cut"></i>
						</a>
					</div>
					<div class="btn-group">
						<a id="pictureBtn" title="Insert picture (or just drag &amp; drop)" class="btn">
							<i class="icon-picture"></i>
						</a>
						<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
						<div class="btn-group">
							<a data-edit="undo" title="Undo (Ctrl/Cmd+Z)" class="btn">
								<i class="icon-undo"></i>
							</a>
							<a data-edit="redo" title="Redo (Ctrl/Cmd+Y)" class="btn">
								<i class="icon-repeat"></i>
							</a>
						</div>
						<input id="voiceBtn" type="text" data-edit="inserttext" x-webkit-speech="">
					</div>
				</div>
				<div id="editor"></div>
				<input type="hidden" name="u_id" value="<?php echo $_SESSION['id']?>">
				<input type="hidden" name="text" value="">
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">提交</button>
				</div>
			</form>
		</section>
	<?php include VIEW . '/layouts/footer.php'?>
	<script src="/js/jquery/jquery.3.5.1.min.js"></script>
	<script src="/js/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="/js/bootstrap/bootstrap-wysiwyg.js"></script>
	<script src="/js/jquery/jquery.hotkeys.js"></script>
	<script>
		$(function () {
			function initToolbarBootstrapBindings() {
				var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
						'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
						'Times New Roman', 'Verdana'],
					fontTarget = $('[title=Font]').siblings('.dropdown-menu');
				$.each(fonts, function (idx, fontName) {
					fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
				});
				$('a[title]').tooltip({container: 'body'});
				$('.dropdown-menu input').click(function () {
					return false;
				}).change(function () {
					$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
				}).keydown('esc', function () {
					this.value = '';
					$(this).change();
				});

				$('[data-role=magic-overlay]').each(function () {
					var overlay = $(this), target = $(overlay.data('target'));
					overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
				});
				$('#voiceBtn').hide();

			};
			initToolbarBootstrapBindings();
			$('#editor').wysiwyg();
			window.prettyPrint && prettyPrint();

			$('form').submit(function(e) {
				var
					form_title = this.title.value,
					form_editor = $('#editor').html(),
					error_alert = $('.alert');
				if (form_title.length === 0 || form_editor.length < 40) {
					error_alert.html('内容格式不正确').show();
					return false;
				} else {
					error_alert.hide()
				}
				this.text.value = form_editor;
			});
		});
	</script>
</body>
</html>