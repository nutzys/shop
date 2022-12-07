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
            <form action="<?php echo URLROOT?>/workers/update/<?php echo $data['product']->id?>" method="post">
                <label for="name">Name</label>
                    <input type="text" name="name" class="input-field" value="<?php echo $data['product']->name?>" placeholder="Name">
                <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" class="input-field" value="<?php echo $data['product']->quantity?>" placeholder="Quantity">
                <label for="manufacturer">Manufacturer</label>
                    <input type="text" name="manufacturer" class="input-field" value="<?php echo $data['product']->manufacturer?>" placeholder="Manufacturer">
                <label for="price">Price</label>
                    <input type="number" name="price" class="input-field" value="<?php echo $data['product']->price?>" placeholder="Price">
                <label for="arrival-date">Arival Date</label>
                    <input type="date" name="arrival-date" class="input-field" value="<?php echo $data['product']->arrival_date?>" placeholder="Arival Date">
                <select name="location" class="input-select">
                    <?php foreach($data['location'] as $location):?>
                    <option value="<?php echo $location->id?>"><?php echo $location->location?></option>
                    <?php endforeach;?>
                </select>
                <select name="category" class="input-select">
                    <?php foreach($data['category'] as $category):?>
                    <option value="<?php echo $category->id?>"><?php echo $category->category?></option>
                    <?php endforeach;?>
                </select>
                <input type="hidden" name="id" value="<?= $data['product']->id?>">
                <input type="submit" name="submit" class="btn">
            </form>
        </div>
    </div>
</body>
</html>