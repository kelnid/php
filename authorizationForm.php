<?php
require ('authorizationValidate.php');

$errors = [];

if(isset($_POST['doLogin'])) {
    $validation = new ValidationForAuthorization($_POST);
    $errors = $validation->validateForm();
}
?>
<div>
    <form action="" method="post" class="login">
        <label for="login"><strong>Введите логин:</strong></label>
        <p><input type="text" name="login" id="login"></p>
        <div style="color: red">
            <?php echo $errors['login'] ?? '' ?>
        </div>
        <label for="password"><strong>Введите пароль:</strong></label>
        <p><input type="password" name="password" id="password"></p>
        <div style="color: red">
            <?php echo $errors['password'] ?? '' ?>
        </div>
        <label for="remember">Запомнить</label>
        <p><input type="checkbox" name="check"></p>
        <div style="color: red">
            <?php echo $errors['check'] ?? '' ?>
        </div>
        <p>
            <button type="submit" name="doLogin">Авторизоваться</button>
        </p>
    </form>
</div>