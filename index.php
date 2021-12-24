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
$i = 1;

while ($i <= 10) {
    echo 'You are welcome', "<br/>";
    $i++;
}
//2
$sum = 0;

for ($i = 1; $i <= 112; $i += 3) {
    $sum += $i;
}

echo $sum, "<br/>";
//3
for ($i = 1; $i < 100; $i += 1) {
    if ($i % 5 !== 0 && strpbrk($i, '3')) {
        echo $i . " <br/>";
    }
}
//4
$randArray = [];

while (true) {
    $rand = rand(1, 100);
    if (!in_array($rand, $randArray)) {
        $randArray[] = $rand;
        if (sizeof($randArray) === 3) {
            break;
        }
    }
}

foreach ($randArray as $row) {
    echo $row . ' ';
}
//5
$min = 666666;
$max = 666686;
$count = 0;

for ($i = $min; $i <= $max; $i++) {
    $string = (string)$i;
    $stringFirst = $string[0] + $string[1] + $string[2];
    $stringLast = $string[3] + $string[4] + $string[5];
    if ($stringFirst === $stringLast) {
        echo $i, "<br/>";
        $count++;
    }
}

echo "Количество счастливых билетов: $count <br/>";
echo "Процент счастливых билетов: " . $count / ($max - $min) * 100 . "%", "<br/>";
//6
$array = ['1', '1', '2', '2', '3', '4', '5', '6'];

print_r(array_count_values($array));
//7
$arrayThree = [-11, 12, 3, 4, 5, 27, 7, -8, 99];

foreach ($arrayThree as $row) {
    echo $row . ' ',"<br/>";
}

$max_val = max($arrayThree);
$min_val = min($arrayThree);
$max_key = array_search($max_val, $arrayThree);
$min_key = array_search($min_val, $arrayThree);

list($arrayThree[$min_key], $arrayThree[$max_key]) = [$arrayThree[$max_key], $arrayThree[$min_key]];

foreach ($arrayThree as $row) {
    echo $row . ' ',"<br/>";
}
//8
$arrayFour = [1, 2, 4, 4, 2, 5,];

print_r(array_unique($arrayFour));
//9
$arrOne = [1, 5];
$arrTwo = [3, 2, 4];

$result = array_merge($arrOne, $arrTwo);
asort($result);

foreach ($result as $row) {
    echo $row . ' ', "<br/>";
}
//10
$arrayDays = [
    'ru' => ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'],
    'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
];

echo $arrayDays['ru'][0], "<br/>";
echo $arrayDays['en'][2], "<br/>";
//11
$lang = 'ru';
$day = 3;

echo $arrayDays[$lang][$day], "<br/>";
//12
$arrayMatrix = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$i = 0;

foreach ($arrayMatrix as $elem) {
    if ($elem % 3 == 0) {
        $i = $elem . "<br/>";
    } else {
        $i = $elem . ', ';
    }
    echo $i;
}
//13
$arrayNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$index = 2;

foreach ($arrayNumbers as $row) {
    echo $row . ' ';
}

echo "<br/>";

if (array_key_exists($index, $arrayNumbers)) {
    list($arrayNumbers[0], $arrayTen[$index]) = [$arrayNumbers[$index], $arrayNumbers[0]];
    foreach ($arrayNumbers as $row) {
        echo $row . ' ';
    }
} else {
    echo "Сиди кайфуй <br/>";
}
?>
</body>
</html>



