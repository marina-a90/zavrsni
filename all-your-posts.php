<?php 

    include_once("database.php"); 

    $userID = $_SESSION['id'];

    $sqlUserPosts = 
        "SELECT posts.id, title, body, user_id, created_at, first_name, last_name 
        FROM posts 
        INNER JOIN users ON 
        posts.user_id = users.id 
        WHERE users.id = '$userID' 
        ORDER BY created_at DESC";
    
    $userPosts = queryAll($sqlUserPosts, $connection);
    

    foreach ($userPosts as $post) { 
        ?>
        <h2 class="blog-post-title"> <a href ="single-post.php?id=<?php echo $post["posts.id"];?>" > <?php echo $post["title"];?> </a></h2>

        <p class="blog-post-meta"> <?php echo $post["created_at"]; ?> by 

        <?php echo $post["first_name"] . " " . $post["last_name"]; ?>

        </p>

        <p class = "justify"> <?php echo nl2br($post["body"]); ?> </p>
        <hr>
<?php
    }
?>