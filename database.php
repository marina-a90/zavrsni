<?php 

$host = "localhost";
$user = "root";
// $password = "vivify";
$password = "";
$dbname = "blog";

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $exception) {
    echo $exception->getMessage();
}


// functions: 

function queryAll($sql, $connection) {

    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement->fetchAll();
}

function query($sql, $connection) {

    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement->fetch();
}

function insertOrDelete($sql, $connection) {
    $statement = $connection->prepare($sql);
    $statement->execute();
}

?>