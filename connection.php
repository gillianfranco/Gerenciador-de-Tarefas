<?php
    $serverName =   "localhost";
    $dbName =       "tasksDataBase";
    $userName =     "root";
    $password =     "";

    try
    {
        $conn =     new PDO("mysql: host={$serverName}; dbname={$dbName}", $userName, $password);
        $conn ->    setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Conectado com o Banco de Dados!";
    }
    catch(PDOException $pdoException)
    {
        echo "Connection failed: ".$pdoException->getMessage();
    }
?>