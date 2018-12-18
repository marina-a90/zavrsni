<?php 

include_once("database.php");
include_once("header.php");
include_once("sidebar.php");

?>

<div class="blog-post">

<?php 
    $sqlPosts = "SELECT id, title, body, author, created_at FROM posts ORDER BY created_at DESC LIMIT 3";
    $posts = queryAll($sqlPosts, $connection);

    foreach ($posts as $post) { 
        ?>
        <h2 class="blog-post-title"> <a href ='single-post.php?id=<?php echo $post['id'];?>' > <?php echo $post['title'];?> </a></h2>

        <p class="blog-post-meta"> <?php echo $post["created_at"]; ?> by 
        <!-- dodati link za autora posle -->
        <!-- <a href="#">  -->
        <?php echo $post["author"]; ?> 
        <!-- </a> -->
        </p>

        <p> <?php echo $post["body"] ?> </p>
        <hr>
<?php
    }
?>

</div><!-- /.blog-post -->

<?php

include_once("footer.php");

?>