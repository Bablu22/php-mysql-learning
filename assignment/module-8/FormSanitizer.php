<?php

class FormSanitizer
{

    private array $errors = [];

    public static function inputSanitizer($input): string
    {
        $data = trim($input);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }

    public function validateRequired($field, $value)
    {
        if (empty(trim($value))) {
            $this->errors[$field] = ucfirst($field) . " is required";
        }
    }

    public function validateEmail($field, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = "Invalid email format";
        }
    }

    public function validatePasswordConfirmation($password, $confirmPassword)
    {
        if ($password !== $confirmPassword) {
            $this->errors['confirm_password'] = "Passwords do not match";
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function hasErrors()
    {
        return !empty($this->errors);
    }

}

