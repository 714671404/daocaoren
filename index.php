<?php

echo "<pre>";
print_r($_FILES['file']);
echo "</pre>";

function get_file($file, $option = [])
{
    /*
     * 单位：
     *      bit：位
     *      byte : 字节
     *      kb : （Kilobyte，千字节）
     *      mb : （Megabyte，兆字节，百万字节，简称“兆”）
     *      gb : （Gigabyte，吉字节，十亿字节，又称“千兆”）
     *
     * 字节进制：
     *      1 Byte = 8 Bits
     *      1 KB = 1024 Bytes
     *      1 MB = 1024 KB
     *      1 GB = 1024 MB
     *
     * error：
     *  状态码：
     *      1、UPLOAD_ERR_OK：值为0，没有错误发生，文件上传成功
     *      2、UPLOAD_ERR_INI_SIZE：值为1，上传的文件超过 php.ini 中 upload_max_filesize选项限制的值
     *      3、UPLOAD_ERR_FORM_SIZE：值为2，上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值
     *      4、UPLOAD_ERR_PARTIAL：值为3：文件只有部分被上传
     *      5、UPLOAD_ERR_NO_FILE：值为4：没有文件被上传
     *      6、UPLOAD_ERR_NO_TMP_DIR：值为6：找不到临时文件。PHP 4.3.10 和 PHP 5.0.3 引进。
     *      7、UPLOAD_ERR_CANT_WRITE：值为7：文件写入失败。PHP 5.1.0 引进。
     */

    /*
     * 初始化属性
     */
    $name = $file['name']; // 文件名
    $type = $file['type']; // 文件类型
    $tmp_name = $file['tmp_name']; // 文件默认上传路径
    $error = $file['error']; // 错误码
    $size = $file['size']; // 上传文件字节
    $date = date('Y-m-d');
    $destination = 'upload/' . $date; // 保存文件路径
    // 允许上传文件格式
    $format = [
        'image/jpeg',
        'image/jpg',
        'image/png',
        'image/gif',
    ];
    $isNext = false; // 上传是否成功状态
    $error_message = [
        '1' => '上传的文件超过 php.ini 中 upload_max_filesize选项限制的值',
        '2' => '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值',
        '3' => '文件只有部分被上传',
        '4' => '没有文件被上传',
        '6' => '找不到临时文件',
        '7' => '文件写入失败'
    ];

    if ($error === 0) {
        if (
            // 图片格式
            in_array($type, $format) &&
            // 上传文件要小于 10 MB
            $size <= 10485760
        ) {
            // 判断文件夹是否存在
            if (!file_exists($destination)) {
                mkdir($destination);
            }
            $destination .= '/' . md5(rand(0, 99999)) . urlencode(rand(0, 99999)) . sha1(rand(0, 99999)) . substr($name, strripos($name, '.'));
            // 将文件移动到目标位置
            if (move_uploaded_file($tmp_name, $destination)) {
                return [
                    'status' => $error,
                    'message' => '图片上传成功',
                ];
            } else {
                return [
                    'status' => $error,
                    'message' => '图片上传失败'
                ];
            }

        } else {
            return [
                'status' => $error,
                'message' => '图片格式或者大小付符合要求'
            ];
        }
    } else {
        return [
            'code' => $error,
            'message' => $error_message[$error]
        ];
    }



}

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
