<?php 

    include_once("header.php");
    include_once("database.php");


    if (!empty($_SESSION['id'])) {
        $author = $_SESSION['id'];
    }

    if (!empty($_POST['title'])) {
        $title = $_POST['title'];
    }

    if (!empty($_POST['post'])) {
        $post = $_POST['post'];
    }


    if ($_SERVER['REQUEST_METHOD'] === "POST") { 
        if (!empty($title) && !empty($post) && !empty($author)) {
            
            $sqlCreatePost = "INSERT INTO posts (title, body, user_id) VALUES ('$title', '$post', '$author')";   
            insertOrDelete($sqlCreatePost, $connection);

            header("Location: index.php");
        }

    }

    include_once("create.php");

?>