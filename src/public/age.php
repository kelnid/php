<?php
//Задание 2
if (isset($_POST['age']) && $_POST['age'] === "1") {
    echo 'Вам менее 20 лет';
}
if (isset($_POST['age']) && $_POST['age'] === "2") {
    echo 'Ваш возраст в промежутке 20-25 лет';
}
if (isset($_POST['age']) && $_POST['age'] === "3") {
    echo 'Ваш возраст в промежутке 26-30 лет';
}
if (isset($_POST['age']) && $_POST['age'] === "4") {
    echo 'Вам более 30 лет';
}
