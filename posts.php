<?php 

    include_once("database.php"); 

    $sqlPosts = 
        "SELECT posts.id, title, body, user_id, created_at, first_name, last_name 
        FROM posts 
        INNER JOIN users ON 
        posts.user_id = users.id 
        ORDER BY created_at DESC";
    $posts = queryAll($sqlPosts, $connection);

    foreach ($posts as $post) { 
        ?>
        <h2 class="blog-post-title"> <a href ="single-post.php?id=<?php echo $post["id"];?>" > <?php echo $post["title"];?> </a></h2>

        <p class="blog-post-meta"> <?php echo $post["created_at"]; ?> by 
 
        <?php echo $post["first_name"] . " " . $post["last_name"]; ?>

        </p>

        <p class = "justify"> <?php echo nl2br($post["body"]); ?> </p>
        <hr>
<?php
    }
?>