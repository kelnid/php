<?php
//Задание 4
function check($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return htmlspecialchars($data);
}
if (isset($_POST)) {
    if (isset($_POST['capital'])) {
        $capital = $_POST['capital'];
    } else {
        $capital = '';
    }
    if (isset($_POST['math'])) {
        $math = $_POST['math'];
    } else {
        $math = '';
    }
    if (isset($_POST['checkbox'])) {
        $images = $_POST['checkbox'];
    } else {
        $images = '';
    }

    if (isset($_POST['optionOne'])) {
        $optionOne = $_POST['optionOne'];
    } else {
        $optionOne = '';
    }
    if (isset($_POST['optionTwo'])) {
        $optionTwo = $_POST['optionTwo'];
    } else {
        $optionTwo = '';
    }
    if (isset($_POST['optionThree'])) {
        $optionThree = $_POST['optionThree'];
    } else {
        $optionThree = '';
    }
    if (isset($_POST['optionFour'])) {
        $optionFour = $_POST['optionFour'];
    } else {
        $optionFour = '';
    }

    $result = 0;

    if ($capital === "36") {
        ++$result;
    }

    if ($math === '4') {
        ++$result;
    }

    $subResult = 0;

    if ($optionOne !== '') {
        ++$subResult;
    }
    if ($optionThree !== '') {
        ++$subResult;
    }

    if ($optionTwo !== '') {
        --$subResult;
    }
    if ($optionFour !== '') {
        --$subResult;
    }

    if ($subResult === 2) {
        $result += 2;
    } elseif ($subResult === 1) {
        ++$result;
    }

    if ($images === "checkbox") {
        ++$result;
    }
    echo "Правильных ответов: $result ";
}