<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./index.css">
    <title>Register</title>
</head>

<body>
    <div class="container ">
        <h3 class="form__title register --title">Register</h3>
        <form action="index.php" class="form form--register" method="post">
            <label for="name ">
                Enter your email
                <input type="text" name="name" placeholder="Name" id="name" required maxlength="20">
            </label>
            <label for="email ">
                Enter your email
                <input type="email" name="email" placeholder="email"  id="email" required maxlength="30">
            </label>
            <label for="password">
                Enter your new password
                <input type="password" name="password" placeholder="password"   id="password" required maxlength="15">
            </label>
            <label for="captcha ">
                Enter the value of the given example
                <div class="captcha-block">
                    <img src="
                    <?php
                    include './captcha.php';
                    function getRandCaptcha($captchas)
                    {
                        return $captchas[rand(0, (count($captchas) - 1))];
                    };
                    echo getRandCaptcha($captchas)['img'];
                    ?>
                    " alt="" class="img-captcha">
                </div>
                <input type="text" name="captcha-valid" id="captcha" required maxlength="2">
            </label>

            <button type="submit" class="form--register__button">Register</button>
        </form>
    </div>
</body>

</html>