<?php
include_once("FormSanitizer.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = FormSanitizer::inputSanitizer($_POST["email"]);
    $password = FormSanitizer::inputSanitizer($_POST["password"]);

    $validator = new FormSanitizer();


    $validator->validateRequired('email', $email);
    $validator->validateEmail('email', $email);
    $validator->validateRequired('password', $password);

    if ($validator->hasErrors()) {
        $errors = $validator->getErrors();
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        echo "<p>Registration successful! Welcome, your email is $email.</p>";
    }

}

