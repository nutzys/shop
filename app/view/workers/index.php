<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT?>/css/workers/index.css">
    <title>Worker Panel</title>
</head>
<body>
    <div class="container">
        <div class="control-panel">
            <div class="user-card">
                <h1>Welcome</h1>
                <h3>Username</h3>
            </div>
            <div class="control-buttons">
                <a href="" class="control-button">Edit Product</a>
                <button class="control-button">Delete</button>
            </div>
            <div class="logout-container">
                <button>Logout</button>
            </div>
        </div>
        <div class="table-container">
            <table>
                <tr>
                    <th>Select</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Manufacturer</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Arrival Date</th>
                    <th>Product Location</th>
                </tr>
                <tr>
                    <td><input type="radio" name="radio"></td>
                    <td>product</td>
                    <td>ok</td>
                    <td>ok</td>
                    <td>ok</td>
                    <td>ok</td>
                    <td>ok</td>
                    <td>ok</td>
                    <td>ok</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>