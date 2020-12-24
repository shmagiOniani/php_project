<?php
include_once 'db_connection.php';
$forumId = $_GET['id'];

$sql = $conn->prepare("SELECT comments.*, users.name FROM comments 
LEFT JOIN users ON comments.user_id = users.id WHERE comments.post_id = $forumId ");
$sql->execute();
$result = $sql->setFetchMode(PDO::FETCH_ASSOC);
$comments = $sql->fetchAll();
// var_dump($comments);

$sql = $conn->prepare("SELECT * FROM forums WHERE id = $forumId");
$sql->execute();
$result = $sql->setFetchMode(PDO::FETCH_ASSOC);
$data = $sql->fetchAll();

// header('Location: ./forum.php');




// PDO way to connect


