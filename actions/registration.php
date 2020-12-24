<?php 

include "db_connection.php";
// session_start();





$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$userName = $_POST["username"];
$password = $_POST["password"];
$Cpassword = $_POST["password_confirm"];


$regTrue = true;

if($password === $Cpassword){

    $stmt = $conn->prepare("SELECT username FROM users WHERE username='$userName'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $users = $stmt->fetchAll();


    foreach($users as $user){
        echo "მომხმარებელი უკვე არსებობს";
        $regTrue = false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);


    if($regTrue){
        $sql = "INSERT INTO users (username, password, name, lastname)
        VALUES ('$userName', '$password', '$firstName', '$lastName')";
        // var_dump($conn);
        $conn->exec($sql);
        // var_dump($conn);
    }else{
        echo "მომხმარებელი უკვე არსებობს";
    }



    return header("Location: ../login.php");
}


