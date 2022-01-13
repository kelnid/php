<?php
session_start();
//session_destroy();

if(isset($_POST['do_signup'])) {

    $errors = array();

    if (trim($_POST['name']) === '') {
        $errors[] = 'Введите имя!';
    }
    if (trim($_POST['login']) === '') {
        $errors[] = 'Введите логин!';
    }
    if ($_POST['password'] === '') {
        $errors[] = 'Введите пароль!';
    }
    if ($_POST['password_2'] !== $_POST['password']) {
        $errors[] = 'Повторный пароль введён неверно!';
    }
    if (empty($errors)) {
        echo "<div style='color: green;'>Вы успешно зарегистрированы! Можете <a href='autorisation.php'>Авторизоваться</a></div>";
    } else {
        echo "<div style='color: red;'>".array_shift($errors)."</div>";
    }

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = md5($_POST['password']);
    $_SESSION['password_2'] = $_POST['password_2'];

//    $name = $_SESSION['name'];
//    $login = $_SESSION['login'];
//    setcookie('name',$name,time()+3600);
//    setcookie('login',$login,time()+3600);
}
?>

<form action="registration.php" method="post">
    <p>
    <p><strong>Введите Ваше имя:</strong></p>
    <input type="text" name="name" value=""<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : '' ?>">
    </p>
    <p>
    <p><strong>Введите логин:</strong></p>
    <input type="text" name="login" value=""<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>">
    </p>
    <p>
    <p><strong>Введите пароль:</strong></p>
    <input type="password" name="password" value="">
    </p>
    <p>
    <p><strong>Подтвердите пароль:</strong></p>
    <input type="password" name="password_2" value="">
    </p>
    <p>
        <button type="submit" name="do_signup">Зарегистрироваться</button>
    </p>
</form>

