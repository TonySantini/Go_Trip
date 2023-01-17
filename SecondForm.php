<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/second.css">
    <title>Form Sign In</title>
</head>
<body>
    <div class="wrapper">
        <h2 class="wrapper__title">Fill the form</h2>
        <form class='Form' action="SignInForm.php" method='post'>
            <div class="user">
                    <li class="user-info-item">
                        <label for="login">Login.</label>
                        <input type="text" id='login' name='login' required placeholder="Enter your login.">
                    </li>
                    <li class="user-info-item">
                        <label for="password">Password.</label>
                        <input type="password" id='password' name='password' autocomplete="on" required placeholder="Enter your password." minlength="6">
                    </li>
            </div>
            <button class="button" type="submit">Отправить</button>
        </form>
    </div>
</body>
</html>