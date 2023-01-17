<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/form.css">
    
</head>
<body>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['date'];

        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $date = htmlspecialchars($date);
    ?>
    <p>Здравствуйте, <?php echo $name ?></p>
    <p>На ваш email <?php echo $email ?> успешно отправлено письмо!</p>
</body>
</html>