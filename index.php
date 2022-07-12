<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="/index.css">
    <script src="./js/index.js" defer></script>
</head>

<body>
    <div class="container">
        <?php
            $obj = 12.8;
            echo is_double($obj);
            echo is_float($obj);
            echo gettype($obj);
            require('./components/logo.php')
        ?>
        <?php 
            require('./components/form.php')
        ?>
        <?php
            require('./components/todo-list.php')
        ?>
    </div>
</body>

</html>