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
                <h3><?php echo ucwords($data['username'])?></h3>
            </div>
            <div class="control-buttons">

            </div>
            <div class="logout-container">
                <form action="<?php echo URLROOT?>/users/logout" method="post">
                    <button name="submit">Logout</button>
                </form>
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
                    <th>Arrival Date</th>
                    <th>Product Location</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
                <?php foreach($data['products'] as $product):?>
                <tr>
                    <td><?php echo $product->id?></td>
                    <td><?php echo $product->name?></td>
                    <td><?php echo $product->quantity?></td>
                    <td><?php echo $product->manufacturer?></td>
                    <td><?php echo $product->price?></td>
                    <td><?php echo $product->arrival_date?></td>
                    <td><?php echo $product->location?></td>
                    <td><?php echo $product->category?></td>
                    <td>
                        <form action="<?= URLROOT?>/workers/edit/<?= $product->id?>" method="post">
                            <button>Edit</button>
                        </form>
                        <form action="<?= URLROOT?>/products/delete/<?=$product->id?>" method="post">
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</body>
</html>