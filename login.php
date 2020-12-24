<?php 

include "header.php";
if(isset($_GET["error"])){
    if($_GET["error"] === "808"){
        $error = "მომხმარებელი ან პაროლი არასწორია";
    }
}
?>
<div class="user-ui login">
<?php 

if(isset($error)){
    ?>
        <h1 style="color:red"><?php echo $error; ?></h1>
    <?php
}
?>
<form action="actions/login.php" method="POST">
    <input type="text" name="username" placeholder="მომხმარებელი"><br>
    <input type="password" name="password" placeholder="პაროლი"><br>
    <input type="submit" value="ავტორიზაცია" class="apply-button"><br>
</form>
</div>

<?php
include "footer.php";