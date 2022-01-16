<?php
$createFructs = fopen('fructs.txt', 'wb+');
$text = ['Абрикос', 'Дуриан', 'Киви', 'Лайм', 'Рамбутан', 'Личи', 'Манго', 'Помело', 'Яблоко', 'Ананас'];
$text = implode(PHP_EOL, $text);
fwrite($createFructs, $text);
$arr = file_get_contents('fructs.txt');
$arr = explode(PHP_EOL, $arr);
sort($arr);
$arr = implode(PHP_EOL, $arr);
file_put_contents('fructs.txt', $arr);
fclose($createFructs);
$result = fopen('fructs.txt', 'rb');
echo fread($result, filesize('fructs.txt'));
fclose($result);
