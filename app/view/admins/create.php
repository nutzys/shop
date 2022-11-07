<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT?>/css/admins/create.css">
    <title>Create</title>
</head>
<body>
    <div class="container">
        <div class="create-card">
            <form action="<?php echo URLROOT?>/admins/create" method="post">
            <label for="username">Username</label>
                <input type="text" name="username" class="input-field" placeholder="Username">
                <label for="password">Password</label>
                <input type="password" name="password" class="input-field" placeholder="Password">
                <select name="role" class="input-select">
                    <option value="">Role</option>
                </select>
                <input type="submit" name="submit" class="btn">
            </form>
        </div>
    </div>
</body>
</html>