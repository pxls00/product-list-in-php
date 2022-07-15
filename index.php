<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="/index.css">
</head>

<body>
    <div class="container">
        <?php 
            require('./components/logo.php');
            require('./components/form.php');
            echo "<h2 class='title'>PRODUCTS</h3>";
            require('./components/todo-list.php');
        ?>
    </div>
</body>

</html>