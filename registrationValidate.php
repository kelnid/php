<?php
require ('validation.php');

interface RegistrationInterface
{

    public function validateForm();

    public function validateEmail();

    public function validatePasswordTwo();

    public function validateImage();

    public function movingImage();

}

class UserValidator extends Validator implements RegistrationInterface
{
    private $data;
    private array $errors = [];
    private array $valid_type = ['jpg', 'jpeg', 'png'];
    private static array $fields = ['login', 'email', 'password', 'passwordTwo'];

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm(): array
    {
        foreach (self::$fields as $field) {
            if (!array_key_exists($field, $this->data)) {
                trigger_error("'$field' не найдено");
            }
        }

        $this->validateLogin();
        $this->validateEmail();
        $this->validatePassword();
        $this->validatePasswordTwo();
        $this->validateImage();
        $this->movingImage();
        return $this->errors;

    }

    public function validateLogin()
    {

        $login = trim($this->data['login']);

        if (empty($login)) {
            $this->showError('login', 'Поле логина не может быть пустым!');
        } else if (strlen($login) < 5) {
            $this->showError('login', 'Длинна логина должна быть от 5 символов!');
        }

    }

    public function validateEmail()
    {

        $val = trim($this->data['email']);

        if (empty($val)) {
            $this->showError('email', 'email cannot be empty');
        } elseif (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
            $this->showError('email', 'email must be a valid email address');
        }

    }

    public function validatePassword()
    {
        $val = trim($this->data['password']);
        if (empty($val)) {
            $this->showError('password', 'password cannot be empty');
        } elseif (!preg_match('/^(?=.*[az])(?=.*[AZ])(?=.*\d)[a-zA-Z\d]{8,}$/', $val)) {
            $this->showError('password', 'The password must be at least 8 characters, contain at least one number and at least one capital letter.');
        }
    }

    public function validatePasswordTwo()
    {
        $val = trim($this->data['passwordTwo']);
        $valTwo = trim($this->data['password']);
        if (empty($val)) {
            $this->showError('passwordTwo', 'repeat password cannot be empty');
        } elseif ($val !== $valTwo) {
            $this->showError('passwordTwo', 'repeat password must be identical to the password');
        }
    }

    public function validateImage()
    {
        $val = $_FILES['image']['name'];
        if (empty($val)) {
            $this->showError('image', 'Вы не загрузили аватар');
        } else {
            $ext = explode('.', $val);
            $ext = end($ext);
            $valid_type = $this->valid_type;
            if (!in_array($ext, $valid_type)) {
                $this->showError('image', 'Неверный формат аватара');
            }
        }

    }

    public function showError($key, $val)
    {
        $this->errors[$key] = $val;
    }

    public function movingImage()
    {
        if (empty($this->errors)) {
            $path = $_FILES['image']['tmp_name'];
            $pathS = $_FILES['image']['name'];
            $new_path = __DIR__ . '/uploads/' . $pathS;
            move_uploaded_file($path, $new_path);
        }
    }

}