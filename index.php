<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9</title>
</head>
<body>
    <h1>ping <?php
        echo 'pong';
    ?></h1>
    <?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:server-ilyas.database.windows.net,1433; Database = AdventureWorks", "sqladmin", "Asdf-1234");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "sqladmin", "pwd" => "{your_password_here}", "Database" => "AdventureWorks", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:server-ilyas.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
    
</body>
</html>
