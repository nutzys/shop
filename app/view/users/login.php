<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT?>/css/users/login.css">
    <title>Login</title>
</head>
<body>
    <div class="navbar-container">
        <ul>
            <li><a href="">Shop<b>System</b></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="login-card">
            <form action="<?php echo URLROOT?>/users/login" class="login-form">
                <label for="username">Username</label>
                <input type="text" name="username" class="input-field" placeholder="Username">
                <label for="password">Password</label>
                <input type="password" name="password" class="input-field" placeholder="Password">
                <input type="submit" name="submit" class="btn">
            </form>
        </div>
        <div class="text-field">
            <h1>This is a shop management site for smart people only</h1>
        </div>
    </div>
</body>
</html>