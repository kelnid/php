<?php
$pattern = "/^\+380\d{3}\d{2}\d{2}\d{2}$/";

if (isset($_POST['do_signup'])) {
    $name = ($_POST['name']);
    $login = ($_POST['login']);
    $phone = ($_POST['phone']);
    $password = ($_POST['password']);
    $path = __DIR__ . '/data/';
    $file = fopen($path . 'data.txt', 'ab+');

    $errors = [];

    if (trim($_POST['name']) === '') {
        $errors[] = 'Введите имя!';
    }
    if (trim($_POST['phone']) === '') {
        $errors[] = 'Введите номер телефона! ';
    }
    if (!preg_match($pattern, $_POST['phone'])) {
        $errors[] = "Телефон задан в неверном формате";
    }
    if (trim($_POST['login']) === '') {
        $errors[] = 'Введите логин!';
    }
    if ($_POST['password'] === '') {
        $errors[] = 'Введите пароль!';
    }
    if ($_POST['passwordVerification'] !== $_POST['password']) {
        $errors[] = 'Повторный пароль введён неверно!';
    }
    if (empty($errors)) {
        fwrite($file, 'name: ' . ucfirst($name) . PHP_EOL);
        fwrite($file, 'login: ' . ucfirst($login) . PHP_EOL);
        fwrite($file, 'phone: ' . $phone . PHP_EOL);
    } else {
        foreach ($errors as $elem) {
            echo "<div style='color: red;'>" . $elem . "</div>";
        }
    }
    fclose($file);
}
?>

<form action="" method="post">
    <p>
    <p><strong>Введите Ваше имя:</strong></p>
    <input type="text" name="name">
    </p>
    <p>
    <p><strong>Введите логин:</strong></p>
    <input type="text" name="login">
    </p>
    <p>
    <p><strong>Введите номер телефона:</strong></p>
    <input type="tel" name="phone">
    </p>
    <p>
    <p><strong>Введите пароль:</strong></p>
    <input type="password" name="password" value="">
    </p>
    <p>
    <p><strong>Подтвердите пароль:</strong></p>
    <input type="password" name="passwordVerification" value="">
    </p>
    <p>
        <button type="submit" name="do_signup">Зарегистрироваться</button>
    </p>
</form>


