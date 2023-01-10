<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7</title>
</head>
<body>
    <h1>ping <?php
        echo 'pong';
    ?></h1>
    <?php
        $link = mysql_connect('phpdb.mysql.database.azure.com:3306', 'phpadmin', 'Asdf-1234', 'mydb');
            if ($link) {
                echo 'Успешно соединились';
            }
        mysql_close($link);
    ?>
    
</body>
</html>
