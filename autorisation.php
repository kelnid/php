<?php
session_start();
//session_destroy();
//echo $_SESSION['login'], "<br/>";
//echo $_SESSION['password'];

if(isset($_POST['do_login'])) {

    $errors = array();

    if ($_SESSION['password'] === md5($_POST['password'])){
        echo "<div style='color: green;'>Вы успешно авторизованы,можете перейти в <a href='home.php'>Профиль</a></div>";
    } else {
        $errors[] = 'Данные введены неверно!';
    }
    if (trim($_POST['login']) === '') {
        $errors[] = 'Введите логин!';
    }
    if ($_POST['password'] === '') {
        $errors[] = 'Введите пароль!';
    }
    if (!empty($errors)) {
        echo "<div style='color: red;'>" . array_shift($errors) . "</div>";
    }
}
?>

<form action="autorisation.php" method="post">
    <p>
    <p><strong>Логин:</strong></p>
    <input type="text" name="login" value="">
    </p>
    <p>
    <p><strong>Пароль:</strong></p>
    <input type="password" name="password">
    </p>
    <p>
        <button type="submit" name="do_login">Войти</button>
    </p>
</form>
