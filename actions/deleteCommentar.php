<?php
include "db_connection.php";

$id = $_POST['comment-id'];

$stmt = "DELETE FROM comments WHERE id ='$id'";
$conn->exec($stmt);

header("Location: ../news.php");