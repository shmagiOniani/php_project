<?php 
include "header.php";
?>

<div class="post">
    <form action="actions/uploadPost.php" method="POST">
        <label for="type">აირჩიეთ კატეგორია:</label>
        <select name="type">
            <option value="1">სპორტი</option>
            <option value="2">ნადირობა</option>
            <option value="3">მედიცინა</option>
            <option value="4">გართობა</option>
        </select>
        <br>
        <input type="text" name="title" placeholder="სათაური">
        <br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Register">
        <br>
    </form>
</div>


<?php
include "footer.php";
?>