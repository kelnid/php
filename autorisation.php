<?php
session_start();

if(isset($_POST['do_login'])) {

    $errors = [];

    if ($_SESSION['password'] === md5($_POST['password'])){
        header('Location: home.php');
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
        foreach($errors as $elem) {
            echo "<div style='color: red;'>".$elem."</div>";
        }
    }
}
?>

<form action="autorisation.php" method="post">
    <p>
    <p><strong>Логин:</strong></p>
    <input type="text" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>">
    </p>
    <p>
    <p><strong>Пароль:</strong></p>
    <input type="password" name="password">
    </p>
    <p>
        <button type="submit" name="do_login">Войти</button>
    </p>
</form>
