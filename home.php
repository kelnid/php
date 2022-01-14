<?php
session_start();

echo 'Здравствуйте, ' . $_SESSION['name'], "<br/>";

echo "<a href='logout.php'>Выйти из аккаунта</a>";
