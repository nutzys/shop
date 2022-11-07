<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT?>/css/admins/edit.css">
    <title>Edit Product</title>
</head>
<body>
    <div class="container">
        <div class="create-card">
            <form action="<?php echo URLROOT?>/product/create" method="post">
                <label for="name">Name</label>
                    <input type="text" name="name" class="input-field" placeholder="Name">
                <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" class="input-field" placeholder="quantity">
                <label for="manufacturer">Manufacturer</label>
                    <input type="text" name="manufacturer" class="input-field" placeholder="Manufacturer">
                <label for="price">Price</label>
                    <input type="number" name="price" class="input-field" placeholder="Price">
                <label for="arrival-date">Arival Date</label>
                    <input type="date" name="arrival-date" class="input-field" placeholder="Arival Date">
                <select name="location" class="input-select">
                    <option value="">Location</option>
                </select>
                <select name="category" class="input-select">
                    <option value="">Category</option>
                </select>
                <input type="submit" name="submit" class="btn">
            </form>
        </div>
    </div>
</body>
</html>