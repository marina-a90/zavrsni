<?php 

include_once("database.php");

if (!empty($_POST["postId"])) {
    $postId = $_POST["postId"];

    $sqlDeletePost = "DELETE FROM posts WHERE id = $postId";
    $deletePost = insert($sqlDeletePost, $connection);

    header("Location: index.php");
}


?>