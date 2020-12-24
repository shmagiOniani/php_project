<?php
include "db_connection.php";

$postId = $_POST['post-id'];
$userId = $_POST['user-id'];
$content = $_POST['content'];

// var_dump($postId);
// echo '<br>';
// var_dump($userId);
// echo '<br>';
// var_dump($content);

$sql = "INSERT INTO comments (post_id, user_id, content)
        VALUES ('$postId', '$userId', '$content')";
$conn->exec($sql);

header('Location:../news.php');