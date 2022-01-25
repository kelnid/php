<?php
require('validation.php');

interface AuthorizationInterface
{
    public function __construct($post_data);

    public function validateForm();

    public function showError($key, $val);

    public function checked();
}

class ValidationForAuthorization extends Validator implements AuthorizationInterface
{
    private $data;
    private array $errors = [];
    private static array $fields = ['login', 'password'];

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
        $this->validatePassword();
        $this->checked();
        return $this->errors;
    }

    public function validateLogin()
    {
        $val = trim($this->data['login']);

        if (empty($val)) {
            $this->showError('login', 'Поле логина не может быть пустым!');
        } else if (strlen($val) < 5) {
            $this->showError('login', 'Длинна логина должна быть от 5 символов!');
        }
    }

    public function validatePassword()
    {
        $val = trim($this->data['password']);
        if (empty($val)) {
            $this->showError('password', 'Поле пароля не может быть пустым!');
        } elseif (!preg_match('/^(?=.*[az])(?=.*[AZ])(?=.*\d)[a-zA-Z\d]{8,}$/', $val)) {
            $this->showError('password', 'Пароль должен содержать хотя бы 1 заглавную букву и число!');
        }
    }

    public function showError($key, $val)
    {
        $this->errors[$key] = $val;
    }

    public function checked()
    {
        if (empty($_POST['check'])) {
            echo 'Не запомнил';
        } elseif ($_POST['check'] === 'on') {
            echo 'Запомнил';
        } else {
            $this->showError('check', 'Не получиться!');
        }
    }
}