<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Задание 1</h1>
    <form action="city.php" method="GET">
        <label>Введите город <input type="text" name="city"></label>
        <input type="submit">
    </form>
</div>
<div>
    <h1>Задание 2</h1>
    <form action="age.php" method="POST">
        <span>Выберите ваш возраст:</span>
        <input type="radio" id="age-one" name="age" value="1">
        <label for="age-one">Менее 20 лет</label>
        <input type="radio" id="age-two" name="age" value="2">
        <label for="age-two">От 20 до 25 лет</label>
        <input type="radio" id="age-three" name="age" value="3">
        <label for="age-three">От 26 до 30 лет</label>
        <input type="radio" id="age-four" name="age" value="4">
        <label for="age-four">Более 30 лет</label><br>
        <input type="submit" style="margin-top: 10px">
    </form>
</div>
<div>
    <h1>Задание 3</h1>
    <form method="post" action="product.php" enctype="multipart/form-data">
        <label for="product-name">Название товара</label>
        <input type="text" id="product-name" name="product-name">
        <label for="manufacturer">Производитель товара</label>
        <input type="text" id="manufacturer" name="manufacturer">
        <label for="about">Краткое описание товара</label>
        <input type="text" id="about" name="about">
        <label for="photo">Фото товара</label>
        <input type="file" id="photo" name="photo">
        <input type="submit" value="Создать товар">
    </form>
</div>
<div>
    <h1>Задание 4</h1>
    <form method="post" action="test.php">
        <div>
            <strong>Вопрос №1:</strong>
            <p>«Работая вместе, Тому, Дику и Гарри надо 9 часов, чтобы закрасить 400-метровый забор. </p>
            <p>Работая в одиночку, Том может выполнить задачу через 18 часов. </p>
            <p>Дик не может работать так быстро и ему нужно 36 часов, чтобы покрасить этот же забор.</p>
            <p>Если Том и Дик возьмут выходной, сколько времени потребуется, чтобы Гарри сам покрасил забор?»</p>
            <label>
                <input type="radio" name="capital" value="9">9
            </label>
            <label>
                <input type="radio" name="capital" value="12">12
            </label>
            <label>
                <input type="radio" name="capital" value="18">18
            </label>
            <label>
                <input type="radio" name="capital" value="36">36
            </label>
        </div>
        <div>
            <p><strong>Вопрос №2:</strong>Сколько будет 2+2?</p>
            <label>
                <input type="text" name="math" placeholder="Ответ"/>
            </label>
        </div>
        <div>
            <p><strong>Вопрос №3:</strong>Выберите фрукт</p>
            <label>
                <input type="checkbox" name="optionOne" value="Яблоко">Яблоко
            </label>
            <label>
                <input type="checkbox" name="optionTwo" value="Капуста">Капуста
            </label>
            <label>
                <input type="checkbox" name="optionThree" value="Картошка">Картошка
            </label>
            <label>
                <input type="checkbox" name="optionFour" value="Евклип">Евклип
            </label>
        </div>
        <div>
            <p><strong>Вопрос №4:</strong>Выберите рамбутан</p>
            <label>
                    <span class="checkbox">
                        <input id="checkbox" type="radio" name="checkbox" value="checkbox">
                        <label for="checkbox">
                            <img src="img/image1.jpg" alt="image">
                        </label>
                    </span>
                <span class="checkbox">
                        <input id="checkbox2" type="radio" name="checkbox" value="checkbox2">
                        <label for="checkbox2">
                            <img src="img/image2.jpg" alt="image">
                        </label>
                    </span>
                <span class="checkbox">
                        <input id="checkbox3" type="radio" name="checkbox" value="checkbox3">
                        <label for="checkbox3">
                            <img src="img/image3.jpg" alt="image">
                        </label>
                    </span>
            </label>
            <div>
                <input type="submit" value="Закончить тест"/>
            </div>
        </div>
    </form>
</div>
</body>
</html>
<?php
