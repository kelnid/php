<?php
session_start();
$pattern = "/^\+380\d{3}\d{2}\d{2}\d{2}$/";
if(isset($_POST['do_signup'])) {

    $errors = [];

    if (trim($_POST['name']) === '') {
        $errors[] = 'Введите имя!';
    }
    if (trim($_POST['phone']) === '') {
        $errors[] = 'Введите номер телефона! ';
    }
    if(!preg_match($pattern, $_POST['phone'])) {
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
        header('Location: autorisation.php');
    } else {
        foreach($errors as $elem) {
            echo "<div style='color: red;'>".$elem."</div>";
        }
    }

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = md5($_POST['password']);
    $_SESSION['passwordVerification'] = $_POST['passwordVerification'];

    $name = $_SESSION['name'];
    $login = $_SESSION['login'];
    $phone = $_SESSION['login'];
    setcookie('name',$name,time()+3600);
    setcookie('login',$login,time()+3600);
    setcookie('login',$phone,time()+3600);
}
?>

<form action="registration.php" method="post">
    <p>
    <p><strong>Введите Ваше имя:</strong></p>
    <input type="text" name="name" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : '' ?>">
    </p>
    <p>
    <p><strong>Введите логин:</strong></p>
    <input type="text" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>">
    </p>
    <p>
    <p><strong>Введите номер телефона:</strong></p>
    <input type="tel" name="phone" value="<?php echo isset($_COOKIE['phone']) ? $_COOKIE['phone'] : '' ?>" placeholder="+380 (xx) xxx-xx-xx">
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

