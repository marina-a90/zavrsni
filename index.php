<script type="text/javascript">
    var alerted = localStorage.getItem('alerted') || '';
    if (alerted != 'yes') {
     alert("To ensure proper program function, please update database information to match your PC settings (in database.php). \n\nIf you have already done this, just click ok. \n\nYou will not see this message again.");
     localStorage.setItem('alerted','yes');
    }
</script>


<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>

<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Blog</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="styles/blog.css" rel="stylesheet">
        <link href="styles/styles.css" rel="stylesheet">

    </head>

    

    <body>

    <?php include_once("header.php"); ?>

        <main role="main" class="container">

            <div class="row">

                <div class="col-sm-8 blog-main" class = "wrap">

                    <?php 
                        include_once("posts.php");
                    ?>
                

                    <nav class="blog-pagination">
                            <a class="btn btn-outline-primary" href="$prevlink">Older</a>
                            <a class="btn btn-outline-secondary disabled" href="$nextlink">Newer</a>
                    </nav>

                </div><!-- /.blog-main -->

                <?php include_once("sidebar.php"); ?>

            </div><!-- /.row -->

        </main><!-- /.container -->

        <?php include_once("footer.php") ?>
        
    </body>
</html>