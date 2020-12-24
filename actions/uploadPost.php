<?php 

include "db_connection.php";
session_start();

$userId = $_SESSION["auth"]['user_id'];
$type = $_POST["type"];
$title = $_POST["title"];
$content = $_POST["content"];

    $sql = "INSERT INTO posts ( user_id, forum_id, title, content)
    VALUES ('$userId', '$type', '$title', '$content')";
    $conn->exec($sql);
    

    // return header("Location: ../home.php");



