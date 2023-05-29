<!DOCTYPE html>
<html lang="">
<head>
    <title>Contact Form Submission</title>
</head>
<body>
<h1>New Contact Form Submission</h1>
<p>Name: {{ $formData['name'] }}</p>
<p>Email: {{ $formData['email'] }}</p>
<p>Message: {{ $formData['message'] }}</p>
</body>
</html>
