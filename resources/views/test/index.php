<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/test" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <!--
    <input type="file" name="file[]">
    <input type="file" name="file[]">
    <input type="file" name="file[]">
    <input type="file" name="file[]">
    -->
    <input type="submit" value="submit">
</form>

<?php

if (isset($result)) {
    print_r($result);
    $url = $result['status'] === 0 ? $result['url'] : '/upload/avatar/default.jpg';
}

?>


<img src="<?php echo $url?>">
</body>
</html>