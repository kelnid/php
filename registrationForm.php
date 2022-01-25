<?php
require('registrationValidate.php');

$errors = [];

if (isset($_POST['doSignUp'])) {
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();
}
?>
<form action="" method="POST" class="new-user" enctype="multipart/form-data">
    <p><strong><label for="login">Логин:</label></strong></p>
    <input type="text" name="login">
    <div style="color: red">
        <?php echo $errors['login'] ?? '' ?>
    </div>
    <p><strong><label for="email">Почта:</label></strong></p>
    <input type="text" name="email" id="email">
    <div style="color: red">
        <?php echo $errors['email'] ?? '' ?>
    </div>
    <p><strong><label for="password">Пароль:</label></strong></p>
    <input type="password" name="password" id="password">
    <div style="color: red">
        <?php echo $errors['password'] ?? '' ?>
    </div>
    <p><strong><label for="passwordTwo">Повторите пароль:</label></strong></p>
    <input type="password" name="passwordTwo" id="passwordTwo">
    <div style="color: red">
        <?php echo $errors['passwordTwo'] ?? '' ?>
    </div>
    <p><strong><label for="image">Добавить аватар:</label></strong></p>
    <input type="file" name="image" id="image">
    <div style="color: red">
        <?php echo $errors['image'] ?? '' ?>
    </div>
    <p>
        <button type="submit" name="doSignUp">Зарегистрироваться</button>
    </p>
</form>
