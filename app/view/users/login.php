<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="<?php echo URLROOT?>/users/login" class="login-card">
            <input type="text" name="username" class="input-field">
            <input type="password" name="password" class="input-field">
            <input type="submit" name="submit">
        </form>
        <div class="text-field">
            <h1>This is a shop management site</h1>
        </div>
    </div>
</body>
</html>