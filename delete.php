<?php
$path = '/files/*';
function deleteFiles($path)
{
    $data = __DIR__ . $path;
    $file_size = 1000 ** 2;
    var_dump(glob($data));
    foreach (glob($data) as $file) {
        var_dump(filesize($file));
        if (is_file($file) && filesize($file) > $file_size) {
            unlink($file);
        }
    }
}

deleteFiles($path);
