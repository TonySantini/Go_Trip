<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Form Login</title>
</head>
<body>
    <div class="wrapper">
        <h2 class="wrapper__title">Fill the form</h2>
        <form class='Form' action="Form.php" method='post'>
            <div class="user">
                <ul class="user__info">
                    <li class="user-info-item">
                        <label for="name">Full name.</label>
                        <input type="text" name="name" id="name" placeholder="Enter your full name.">
                    </li>
                    <li class="user-info-item">
                        <label for="email">E-mail.</label>
                        <input type="email" id="email" name="email" required placeholder="Enter your E-mail.">
                    </li>
                    <li class="user-info-item">
                        <label for="login">Login.</label>
                        <input type="text" id='login' name='login' required placeholder="Enter your login.">
                    </li>
                    <li class="user-info-item">
                        <label for="date">Date of birthday.</label>
                        <input type="date" name='date' id='date' required>
                    </li>
                </ul>
            </div>
            <button class="button" type="submit">Отправить</button>
        </form>
    </div>
</body>
</html>