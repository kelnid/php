<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Hellow world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body style="margin: 50px; text-align: left">
<?php
//Задание 1
function check ($data): string {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return htmlspecialchars($data);
}
if (!empty($_REQUEST['city'])) {
    $city = check($_REQUEST['city']);
    echo 'Ваш город: ' . $city;
}
?>
</body>

</html>
