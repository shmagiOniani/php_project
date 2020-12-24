<?php 
include "header.php";
include "actions/getForums.php";
?>
<div class="container-fluid">
<?php
    if(isset($_SESSION['auth'])){
        // echo "ავტორიზებული მომხმარებლისათვის კონტენტი!";
        foreach ($datas as $data) {
    ?>
        <!-- echo $data['forum_title']. "<br>"; -->
            <a href="./forum.php?id=<?php echo $data['id'] ?>">
                <div class="col" onclick = "getForumId($data['id'])">
                    <h1><?php echo $data['forum_title']; ?></h1>
                    <div class="image">
                        <img src="images/<?php echo $data['forum_title'] ?>.jpg" alt="">
                    </div>
                    <p><?php echo $data['forum_description']; ?></p>
                    <!-- <form action="actions/getComments.php" method="POST">
                        <input type="text" name ="id" value="<?php echo $data['id'] ?>">
                        <button type="submit" >გადასვლა ფორუმზე</button>
                    </form> -->
                </div>
            </a>
    <?php
        }
    }else{
        echo "არა ავტორიზებული მომხმარებლისათვის კონტენტი!";
    }
?>
</div>
<?php
include "footer.php";
?>