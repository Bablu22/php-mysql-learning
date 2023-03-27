<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>
<h1 class="text-center text-2xl py-5">Login Form</h1>
<form method="post" action="loginUser.php" class="w-full max-w-lg mx-auto shadow-lg p-5">
    <div class="mb-4">
        <label for="email" class="block mb-2 font-bold">Email Address:</label>
        <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-gray-400 rounded" required>
    </div>
    <div class="mb-4">
        <label for="password" class="block mb-2 font-bold">Password:</label>
        <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-400 rounded"
               required>
    </div>
    <div class="mb-4">
        <input type="submit" value="Login" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
    </div>
    <p>Don't have an account? <a href="registration.php" class="font-bold hover:text-blue-500">Sign up</a></p>
</form>

</body>
</html>

