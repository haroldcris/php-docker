<?php

return phpinfo();


try
{
    $pdo = new PDO('sqlsrv:Server=192.168.100.212;Database=database', 'sa', 'password');

} catch( Exception $e)
{
    die (print_r($e->getMessage()));
}

$statement = $pdo->prepare("SELECT Firstname FROM Employees");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);

echo $json;