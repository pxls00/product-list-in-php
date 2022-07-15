<?php
    require_once 'config/connect.php';
    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <div class="container">
        <div class="form">
            <h2 class='form__title'>~ Update ~</h2>
            <form action='./vendor/update.php' method='post'>
                <input type="hidden" name="id" value="<?=$product['id']?>">
                <input type='text' name='title' placeholder='Your product title...' maxlength='80' value="<?=$product['title']?>" required />
                <input type='number' name='price' placeholder='Your product price...' maxlength='8' value="<?=$product['price']?>" required />
                <textarea class='description' name='description'><?=$product['description']?></textarea>
                <button class='create-todo' name='sendTask'>
                    <span>Update</span>
                </button>
            </form>
        </div>
    </div>
</body>

</html>