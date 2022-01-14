<?php
session_start();
?>
<?php if(isset($_SESSION['login']) ) : ?>
    Вы авторизованы!
    <hr>
    <a href="logout.php">Выйти из аккаунта</a>
    <a href="home.php">Профиль</a>
<?php else : ?>
    <a href="autorisation.php">Авторизация</a>
    <a href="registration.php">Регистрация</a>
<?php endif; ?>