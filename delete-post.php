<?php 

    include_once("database.php"); 

    if (!empty($_POST["postId"])) {
        $postId = $_POST["postId"];

        $sqlDeletePostComments = "DELETE FROM comments WHERE post_id = $postID";
        $deletePostComments = insertOrDelete($sqlDeletePostComments, $connection);

        $sqlDeletePost = "DELETE FROM posts WHERE id = $postId";
        $deletePost = insertOrDelete($sqlDeletePost, $connection);

        header("Location: index.php");
    }

?>