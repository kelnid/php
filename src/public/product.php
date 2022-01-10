<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
//Задание 3
function check ($data): string {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return htmlspecialchars($data);
}

$productName = $productManufacturer = $productAbout = "";

if (isset($_POST)) {
    $productName = check($_POST['product-name']);
    $productManufacturer = check($_POST['manufacturer']);
    $productAbout = check($_POST['about']);
}

$current_path = $_FILES['photo']['tmp_name'];

$filename = $_FILES['photo']['name'];
$new_path = __DIR__ . '/uploads/' . $filename;

move_uploaded_file($current_path, $new_path);

if (isset($_FILES['photo'])) {
    $file = $_FILES['photo'];
}
?>
<body>
<div style="margin: 50px">
    <div>Название товара: <?php echo $productName ? ucfirst($productName) : 'Некорректное значение' ?></div>
    <div>Производитель товара: <?php echo $productManufacturer ? ucfirst($productManufacturer) :'Некорректное значение' ?></div>
    <div>Описание товара: <?php echo $productAbout ? ucfirst($productAbout) : 'Некорректное значение' ?></div>
    <div>
        <img src="uploads/<?php echo $filename?>" width="100px" height="100px" alt="image">
    </div>
</div>
</body>
</html>
