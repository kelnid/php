<?php
session_start();
session_destroy();

$name = $_SESSION['name'];
$login = $_SESSION['login'];
setcookie('name',$name,time()-7200);
setcookie('login',$login,time()-7200);

header('Location: index.php');