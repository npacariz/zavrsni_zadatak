<?php

$servername = "localhost";
$username = "root";
$password = "vivify";
$dbname = "blog_dodatni";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


function query($sql, $conn){
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}


function insertOrDelete($sql, $conn){
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}




?>
