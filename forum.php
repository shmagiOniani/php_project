<?php
include "header.php";
include "actions/getcomments.php";

?>
<div class="col forum-page">
    <h1 id="forum-header"><?php echo $data[0]['forum_title']; ?></h1>
    <div class="image">
        <img src="images/<?php echo $data[0]['forum_title'] ?>.jpg" alt="">
    </div>
    <p><?php echo $data[0]['forum_description']; ?></p>
</div>

<?php
    $counter = 0;
    foreach ($comments as $data) {
        $counter++;
    ?>
        <!-- echo $data['forum_title']. "<br>"; -->
        <div id="comment">
            <div class="comment-content">
                <h1><?php echo $data['content']; ?></h1>
            </div>
            <div class="comment-detail">
                <h3>კომენტარის ნომერი :<?php echo $counter; ?></h3>
                <p>თარიღი : <?php echo $data['datatime']; ?></p>
                <p>მომხმარებელი : <?php echo $data['name']; ?></p>
                <?php
                if($_SESSION['auth']["status"] === "admin"){
                    ?>
                        <form action="actions/deleteCommentar.php" method="post">
                        <input type="hidden" name="comment-id" value="<?php echo $data['id']; ?>">
                        <button class="delete-button">კომენტარის წაშლა</button>
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
?>
<div id="add-comment">

    <form action="actions/addComment.php" method="post">
        <textarea name="content" id="" cols="30" rows="10" placeholder="დაწერეთ კომენტარები..." ></textarea>
        <input type="hidden" name="post-id" value="<?php echo $data[0]['id']; ?>">
        <input type="hidden" name="user-id" value="<?php echo $_SESSION["auth"]["user_id"] ?>">
        <button type="submit" class="apply-button">კომენტარის დამატება</button>
    </form>
</div>













<?php
include "footer.php";
?>