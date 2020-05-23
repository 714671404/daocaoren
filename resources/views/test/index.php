<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="http://www.softwhy.com/" />
    <title>蚂蚁部落</title>
    <style>
        body{margin:20px;}
    </style>
    <script>
		window.onload=()=>{
			let num=document.getElementById("num");
			let obt=document.getElementById("bt");
			obt.onclick=()=>{
				let v = num.validity;
				if(true === v.valueMissing){
					num.setCustomValidity("字段不能为空");
				}else{
					if(true === v.patternMismatch){
						num.setCustomValidity("请输入3-8位数字");
					}else{
						num.setCustomValidity("");
					}
				}
			}
		}
    </script>
</head>
<body>
<form action="#" method="post">
    <input type="text" id="num" pattern="^\d{3,8}$" required>
    <input type="submit" id="bt" value="提交表单"/>
</form>
</body>
</html>