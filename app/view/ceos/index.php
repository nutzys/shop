<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT?>/css/ceos/index.css">
    <title>Ceo Panel</title>
</head>
<body>
    <div class="container">
        <div class="control-panel">
            <div class="user-card">
                <h1>Welcome</h1>
                <h3><?php echo $data['username']?></h3>
            </div>
            <div class="control-buttons">
                <a href="<?= URLROOT?>/products/create">Create Product</a>
            </div>
            <div class="logout-container">
                <button>Logout</button>
            </div>
        </div>
        <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Manufacturer</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Arrival Date</th>
                    <th>Product Location</th>
                </tr>
                <?php foreach($data['products'] as $product):?>
                <tr>
                    <td><?= $product->id?></td>
                    <td><?= $product->name?></td>
                    <td><?= $product->quantity?></td>
                    <td><?= $product->manufacturer?></td>
                    <td><?= $product->price?></td>
                    <td><?= $product->category?></td>
                    <td><?= $product->arrival_date?></td>
                    <td><?= $product->location?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</body>
</html>