<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    <?php
        $link = mysql_connect('phpdb.mysql.database.azure.com', 'phpadmin', 'Asdf-1234');
            if (!$link) {
                die('Ошибка соединения: ' . mysql_error());
            }
        echo 'Успешно соединились';
        mysql_close($link);
    ?>
    <h1>ping <?php
        echo 'pong';
    ?></h1>
</body>
</html>
