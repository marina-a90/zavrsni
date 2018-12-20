<!DOCTYPE html>
<html>
<head>
    <title>Blog Post</title>
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>


<?php 

    include_once("database.php");
    include_once("header.php");

    // post id provera
    $postID = $_GET["id"];
    // echo $postID;

    if (isset($_GET["id"])) { 
        $sqlSinglePost = "SELECT * FROM posts WHERE posts.id = $postID";
        $singlePost = query($sqlSinglePost, $connection);

?>
    <body>
    <div>

            <h1><?php echo ($singlePost["title"]) ?></h1>
            <div><?php echo "Created by " . ($singlePost["author"]) . " at " .($singlePost["created_at"]) ?></div>
            <div><?php echo ($singlePost["body"]) ?></div>

            <form name = "deletePost" method = "POST">
            <input name="postId" type="hidden" value="<?php echo $singlePost["id"]; ?>"/>
            <button id = "deletePost" class = "btn btn-default" onclick = "return reallyDeletePost()">Delete Post</button>

            <script>
                function reallyDeletePost() {
                    return confirm("Are you sure you want to delete this post?");
            }
            </script>

            </form>
            
    <br>

    <?php 
    include_once("delete-post.php");
    include_once("add-comments.php");
    include_once("sidebar.php"); 
    ?>

    </div>

    </body>
    </html>

<?php    
    }
 
    include_once("comments.php");
    include_once("footer.php");

?>