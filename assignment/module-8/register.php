<?php
include_once("FormSanitizer.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $first_name = FormSanitizer::inputSanitizer($_POST["first_name"]);
    $last_name = FormSanitizer::inputSanitizer($_POST["last_name"]);
    $email = FormSanitizer::inputSanitizer($_POST["email"]);
    $password = FormSanitizer::inputSanitizer($_POST["password"]);
    $confirm_password = FormSanitizer::inputSanitizer($_POST["confirm_password"]);

    $validator = new FormSanitizer();

    $validator->validateRequired('name', $first_name);
    $validator->validateRequired('name', $last_name);
    $validator->validateRequired('email', $email);
    $validator->validateEmail('email', $email);
    $validator->validateRequired('password', $password);
    $validator->validateRequired('confirm_password', $confirm_password);
    $validator->validatePasswordConfirmation($password, $confirm_password);

    if ($validator->hasErrors()) {
        $errors = $validator->getErrors();
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        echo "<p>Registration successful! Welcome, $first_name.</p>";
    }

}


