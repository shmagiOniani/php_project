<?php 

include "header.php";
?>

<div class="user-ui register">
    <form action="actions/registration.php" method="POST">
        <input type="text" name="firstname" placeholder="სახელი"><br>
        <input type="text" name="lastname" placeholder="გვარი"><br>
        <input type="text" name="username" placeholder="მომხმარებელი"><br>
        <input type="password" name="password" placeholder="პაროლი"><br>
        <input type="password" name="password_confirm" placeholder="პაროლის დადასტურება"><br>
        <input type="submit" value="რეგისტრაცია" class="apply-button"><br>
    </form>
</div>


<?php
include "footer.php";