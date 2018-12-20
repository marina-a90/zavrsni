<?php 

include_once("database.php");

if (!empty($_POST["commentId"])) {
    $commentId = $_POST["commentId"];

    $sqlDeleteComment = "DELETE FROM comments WHERE id = $commentId";
    $deleteComment = insert($sqlDeleteComment, $connection);
}


?>