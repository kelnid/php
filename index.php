<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>
<body style="margin: 0;">
<?php
//1
$name = 'Данил';

echo 'Меня зовут ', $name,"<br/>";

//2
$a = 8;
$b = 1;

echo $a * $b, "<br/>", $a + $b, "<br/>", $a - $b,"<br/>", $a / $b, "<br/>", $a % $b, "<br/>";

//3
$number = 5;
$result = pow($number,3);

echo $result, "<br/>";

//4
$age = 18;

if ($age >= 18 && $age <=60) {
    echo 'Вам ещё работать и работать', "<br/>";
}

//5
$ageSecond = 17;

if ($ageSecond < 18) {
    echo 'Вам ещё рано работать', "<br/>";
} elseif ($ageSecond > 60) {
    echo 'Пора на отдых', "<br/>";
}

//6
$dayNumber = 1;

if ($dayNumber >= 1 && $dayNumber <= 5) {
    echo 'Это рабочий день', "<br/>";
} elseif ($dayNumber == 6 || $dayNumber == 7) {
    echo 'Это выходной', "<br/>";
} elseif ($dayNumber > 7) {
    echo 'Ошибка!', "<br/>";
}

//7
const DAYS_COUNT = 7;
define('MONTH_COUNT', 12);

echo DAYS_COUNT, "<br/>";
echo MONTH_COUNT, "<br/>";

//8
$firstNumber = 3;
$secondNumber = 1;

if ($firstNumber === $secondNumber) {
    echo "Сумма чисел равна: ", $firstNumber + $secondNumber, "<br/>";
} else {
    echo "Разница чисел равна: ", $firstNumber - $secondNumber, "<br/>";
}

//9
$randNumberFirst = rand(1, 100);

if ($randNumberFirst % 2 === 0) {
    echo "Кратное: ", $randNumberFirst, "<br/>";
} else {
    echo "Число не кратное: ", $randNumberFirst;
}

?>
</body>
</html>



