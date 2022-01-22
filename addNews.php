<?php
if (isset($_POST['do_addNews'])) {
    $currentPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $newPath = __DIR__ . '/uploads/' . $fileName;

    $errors = [];

    if (($_POST['title']) === '') {
        $errors[] = 'Введите название новости!';
    }
    if (($_POST['about']) === '') {
        $errors[] = 'Введите описание новости! ';
    }
    if (($_POST['date']) === '') {
        $_POST['date'] = date("m.d.y");
    }
    if (strlen($_POST['about']) < 20) {
        $errors[] = 'Длинна описания должна быть не менее 20 символов';
    }
    if ($_POST['newsText'] === '') {
        $errors[] = 'Введите текст новости!';
    }
    if (strlen($_POST['newsText']) < 100) {
        $errors[] = 'Длинна текста должна быть не менее 100 символов';
    }
    if ($_POST['author'] === '') {
        $errors[] = 'Введите автора новости!';
    }
    if (isset($_FILES['image']['name'])) {
        move_uploaded_file($currentPath, $newPath);
    } else {
        $errors[] = 'Добавьте картинку!';
    }
    if (empty($errors)) {
        if (isset($_COOKIE['news'])) {
            $arrFromJson = json_decode($_COOKIE['news']);
            $arrFromJson[] =
                [
                    "id" => count($arrFromJson) + 1,
                    "name" => $_POST['title'],
                    "about" => $_POST['about'],
                    "newsText" => $_POST['newsText'],
                    "author" => $_POST['author'],
                    "date" => $_POST['date'],
                    "image" => $fileName
                ];
            $arrFromJson = json_encode($arrFromJson);
            setcookie('news', $arrFromJson);
        } else {
            $array = [
                [
                    "id" => 1,
                    "name" => $_POST['title'],
                    "about" => $_POST['about'],
                    "newsText" => $_POST['newsText'],
                    "author" => $_POST['author'],
                    "date" => $_POST['date'],
                    "image" => $fileName
                ]
            ];
            $json = json_encode($array);
            setcookie('news', $json, time() + 3600);
        }
        $array = [
            [
                "name" => $_POST['title'],
                "about" => $_POST['about'],
                "newsText" => $_POST['newsText'],
                "author" => $_POST['author'],
                "date" => $_POST['date'],
                "image" => $fileName
            ]
        ];
    } else {
        foreach ($errors as $elem) {
            echo "<div style='color: red;'>" . $elem . "</div>";
        }
    }
}
?>

<form action="addNews.php" method="post" enctype="multipart/form-data">
    <p>
    <p><strong>Название новости:</strong></p>
    <input type="text" name="title">
    </p>
    <p>
    <p><strong>Краткое описание новости:</strong></p>
    <input type="text" name="about">
    </p>
    <p>
    <p><strong>Дата создания новости:</strong></p>
    <input type="date" name="date">
    </p>
    <p>
    <p><strong>Статус:</strong></p>
    <input type="radio" name="firstChoice" value="черновик">черновик
    <input type="radio" name="secondChoice" value="опубликовано">опубликовано
    </p>
    <p>
    <p><strong>Текст новости:</strong></p>
    <textarea name="newsText" cols="30" rows="10"></textarea>
    </p>
    <p>
    <p><strong>Автор новости:</strong></p>
    <input type="text" name="author">
    </p>
    <p>
    <p><strong>Картинка:</strong></p>
    <input type="file" name="image">
    </p>
    <div>
        <p>
            <button type="submit" name="do_addNews">Добавить новость</button>
        </p>
        <a href="newsList.php">Список новостей</a>
    </div>
</form>
