<?php
include_once 'db_connection.php';

// PDO way to connect
$sql = "SELECT * FROM forums";
$datas = $conn->query($sql);

