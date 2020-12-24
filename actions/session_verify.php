<?php 


session_start();


include "db_connection.php";

if(isset($_SESSION["auth"])){
    if(isset($_SESSION["auth"]["user_id"])){
        $user_id = $_SESSION["auth"]["user_id"];
        $stmt = $conn->prepare("SELECT id, status FROM users WHERE id='$user_id'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $users = $stmt->fetchAll();

        if($users[0]["status"] === "admin"){
            // echo "ავტორიზებული მომხმარებელი ადმინია";
            $_SESSION['auth']["status"] = "admin";
        }else if ($users[0]["status"] === "user") {
            // echo "ავტორიზებული მომხმარებელი უბრალო მოკვდავია";
            $_SESSION['auth']["status"] = "user";

        }else{
            // echo "არაავტორიზებული მომხმარებელი";
            $_SESSION["auth"]=array();
        }
    }
}