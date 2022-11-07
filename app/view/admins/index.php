<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT?>/css/admins/index.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="navbar-container">
        <ul>
            <li>ShopSystem</li>
            <div class="moveable">
                <li><a href="<?php echo URLROOT?>/admins/logout">Logout</a></li>
                <li>Admin</li>
            </div>
        </ul>
    </div>
    <div class="table-container">
        <table>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Date Joined</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>Ulvis</td>
                <td>ulvis123</td>
                <td>Admin</td>
                <td>Date</td>
                <td>
                    <form action="<?php echo URLROOT?>/admins/edit">
                        <input type="submit" name="edit">
                    </form>
                    <form action="<?php echo URLROOT?>/admins/delete">
                        <input type="submit" name="delete">
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>