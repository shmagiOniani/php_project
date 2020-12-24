<?php
    include "actions/session_verify.php";
    $auth = false;


    if(isset($_SESSION["auth"])){
        if(isset($_SESSION["auth"]["user_id"])){
            // var_dump($_SESSION["auth"]);
            $auth = true;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ფორუმი</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<nav>
    <ul>
        <!-- <li><a href="home.php">მთავარი</a></li> -->
        <li><a href="news.php" class="header">მთავარი</a></li>
    </ul>
    <ul>
        <!-- <li><a href="home.php">მთავარი</a></li> -->
        <li class="header-user">სალამი  
            <?php 
            if(isset($_SESSION['auth'])){
                echo $_SESSION['auth']['username'];
            }
            ?>
        </li>
    </ul>

    <?php 

    if(!$auth){
        ?>
    <ul class="header-registration">
        <li><a href="register.php">რეგისტრაცია</a></li>
        <li><a href="login.php">ავტორიზაცია</a></li>
    </ul>
        <?php
    }else if ($_SESSION['auth']['status'] === "admin"){
        ?>
            <div class="header-registration">
                <a href="logout.php">გასვლა</a>
                <a href="profile.php">პოსტის დამატება</a>

            </div>
        <?php
    }else {
        ?>
            <div>
                <a href="logout.php">გასვლა</a>
            </div>
        <?php
    }
?>

</nav>

<section>
<?php 
  
