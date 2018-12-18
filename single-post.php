<!DOCTYPE html>
<html>
<head>
    <title>Blog Post</title>
    <link href="styles/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
</head>


<?php 

    include_once("database.php");
    include_once("header.php");

    // post id provera
    // $postID = $_GET["id"];
    // echo $postID;

    if (isset($_GET["id"])) { 
        $sqlSinglePost = "SELECT * FROM posts WHERE posts.id = {$_GET["id"]}";
        $singlePost = query($sqlSinglePost, $connection);

?>
        <body>

            <h1><?php echo ($singlePost["title"]) ?></h1>
            <div><?php echo "Created by " . ($singlePost["author"]) . " at " .($singlePost["created_at"]) ?></div>
            <div><?php echo ($singlePost["body"]) ?></div>

        </body>
        </html>
<?php    
    }
 
    include_once("comments.php");
    include_once("sidebar.php");
    include_once("footer.php");

?>