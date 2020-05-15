<?php

echo "<pre>";
print_r($_FILES['file']);
echo "</pre>";



print_r(get_file($_FILES['file']));


?>

<br>
<br>
<br>
<form action="/" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <!--
    <input type="file" name="file[]">
    <input type="file" name="file[]">
    <input type="file" name="file[]">
    <input type="file" name="file[]">
    -->
    <input type="submit" value="submit">
</form>
