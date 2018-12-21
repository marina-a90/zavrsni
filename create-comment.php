<?php 

    include_once("database.php"); 
    
    // provera
    $postID = $_GET["id"];
    // echo $postID;

    if (!empty($_POST["name"])) {
        $name = $_POST["name"];
    }

    if (!empty($_POST["comment"])) {
        $comment = $_POST["comment"];
    }


    if ($_SERVER["REQUEST_METHOD"] === "POST") { 
        if (!empty($name) && !empty($comment)) {
            
            $sqlCommentsInsert = "INSERT INTO comments (author, text, post_id) VALUES ('$name', '$comment', '$postID')";   
            insertOrDelete($sqlCommentsInsert, $connection);

            header("Location: single-post.php?id=" . $postID);
        }

    }

?>