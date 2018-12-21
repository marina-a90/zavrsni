<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Create a Blog</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="styles/blog.css" rel="stylesheet">
        <link href="styles/styles.css" rel="stylesheet">
    </head>

    

    <main role="main" class="container">

        <div class="row">
            <div class="col-sm-8 blog-main">

                <form id = "addPosts" onsubmit = "return validatePost()" method = "POST">
                    
                    <label for = "author"><b>Your name:</b></label><br>    
                    <input name="author" id = "formAuthor" type="text" placeholder="Your Name"> 
                    <br><br>

                    <label for = "title"><b>Post title:</b></label><br>   
                    <input name="title" type="text" placeholder="Post Title"/> 
                    <br><br>

                    <label for = "post"><b>Post text:</b></label><br>   
                    <textarea name="post" rows="10" columns="100" placeholder="Post Text"></textarea> 
                    <br><br>

                    <p id = "alertTagPost" class = "alert alert-danger" style = "display:none"> All fileds must be filed in </p>

                    <button name="button" type="submit">Create a post</button>

                    <script>
                        function validatePost() {
                            var author = document.forms["addPosts"]["author"].value; 
                            var title = document.forms["addPosts"]["title"].value;
                            var post = document.forms["addPosts"]["post"].value;
                            if (author === "" || title === "" || post === "") {
                                    document.getElementById("alertTagPost").style.display = "block";
                                    if (author === "") {
                                        document.forms["addPosts"]["author"].classList.add("alert-danger");
                                    }
                                    else {
                                        document.forms["addPosts"]["author"].classList.remove("alert-danger");
                                    }
                                    if (title === "") {
                                        document.forms["addPosts"]["title"].classList.add("alert-danger");
                                    }
                                    else {
                                        document.forms["addPosts"]["title"].classList.remove("alert-danger");
                                    }
                                    if (post === "") {
                                        document.forms["addPosts"]["post"].classList.add("alert-danger");
                                    }
                                    else {
                                        document.forms["addPosts"]["post"].classList.remove("alert-danger");
                                    }
                                    return false;
                            }
                        }
                    </script>

            </form>

        </div>
            <?php include_once("sidebar.php");  ?>
        </div>


    </main>
</html>

<?php include_once("footer.php"); ?>