<?php 

include "db_connection.php";
session_start();
$userName = $_POST["username"];
$password = $_POST["password"];



$stmt = $conn->prepare("SELECT id, username, password FROM users where username='$userName'");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$users = $stmt->fetchAll();

echo "ნაპოვნია ",count($users)," მომხმარებელი <br>";
if(count($users) === 1){
    $user = $users[0];


    if(password_verify($password, $user["password"])){
        echo "მომხმარებელმა", $user['username']," წარმატებით გაიარა ავტორიზაცია";
        
        $_SESSION["auth"]=array(
            "user_id" => $user["id"],
            "username" => $user["username"],
        );

        header("Location: ../index.php");
    }else {
        echo "პაროლი არასწორია!!";
        $_SESSION = [];
        session_destroy();
    }

}else{
    echo "ავტორიზაცია დაუშვებელია";
    $_SESSION = [];
    session_destroy();
}


var_dump($_SESSION);

        



