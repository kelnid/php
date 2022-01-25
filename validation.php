<?php
abstract class Validator
{
    abstract public function __construct($post_data);
    abstract public function validateLogin();
    abstract public function validatePassword();
    abstract public function showError($key, $val);
}