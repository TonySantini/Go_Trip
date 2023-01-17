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
        $name = $_POST['login'];
        $password = $_POST['password'];

        $name = htmlspecialchars($name);
        $password = htmlspecialchars($password);
    ?>
    <p>Здравствуйте, <?php echo $name ?></p>
</body>
</html>