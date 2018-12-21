<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Post</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>



<?php 

    include_once("header.php");
    include_once("database.php"); 

    // post id provera
    $postID = $_GET["id"];
    // echo $postID;

    if (isset($_GET["id"])) { 
        $sqlSinglePost = 
        "SELECT posts.id, title, body, user_id as author, created_at, first_name, last_name 
        FROM posts 
        INNER JOIN users ON 
        posts.user_id = users.id 
        WHERE posts.id = $postID
        ORDER BY created_at DESC";
        $singlePost = query($sqlSinglePost, $connection);

?>
    <body>

    <main role="main" class="container">


    <div class="row">
    <div class="col-sm-8 blog-main" class = "wrap">
            <h2 class="blog-post-title"><?php echo ($singlePost["title"]) ?></h2>
            <p class="blog-post-meta">
                <?php echo $singlePost["created_at"] . " by " . $singlePost["first_name"] . " " . $singlePost["last_name"]; ?>
                <a href="#"></a></p>
            <p class = "justify"><?php echo nl2br($singlePost["body"]); ?></p>
            <hr>


            <form name = "deletePost" method = "POST">
            <input name="postId" type="hidden" value="<?php echo $singlePost["id"]; ?>"/>
            <button id = "deletePost" class = "btn btn-default" onclick = "return reallyDeletePost()">Delete Post</button>

            <script>
                function reallyDeletePost() {
                    return confirm("Are you sure you want to delete this post?");
                }
            </script>

            </form> 
        </div>
            <?php include_once("sidebar.php");  ?>
        </div>
            
    <br>

    <?php 

    include_once("delete-post.php");
    include_once("add-comments.php");
    include_once("comments.php");

    ?>

    </main>

    </body>
<?php    
    }

    include_once("footer.php");

?>