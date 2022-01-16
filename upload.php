<?php

if (isset($_POST['send'])) {
    $current_path = $_FILES['text']['tmp_name'];
    $filename = $_FILES['text']['name'];
    $fileExt = getExt($filename);
    $new_path = __DIR__ . '/uploads/' . $filename;
    $fileExtPost = 'txt';
    
    if (isset($_FILES['text'])) {
        $file = $_FILES['text'];
        if ($fileExt === $fileExtPost) {
            move_uploaded_file($current_path, $new_path);
            echo "<div>" . 'Файл успешно загружен' . "</div>";
        } else {
            echo 'Файл должен иметь расширение .txt';
        }
    }
}

function getExt($filename): bool|string
{
    $temp = explode('.', $filename);
    return end($temp);
}

?>
<div>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="text">
        <input type="submit" name="send" value="Отправить">
    </form>
</div>
<div>
    <?php
    if (isset($_FILES['text']) && $fileExt === $fileExtPost) {
        $result = file_get_contents('uploads/' . $filename);
        echo $result;
    }
    ?>
</div>
