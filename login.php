<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>



<?php 

    include_once("header.php");
    include_once("database.php");

?>
    <body>

    <main role="main" class="container">


    <div class="row">
    <div class="col-sm-8 blog-main" class = "wrap">
            
        <div>
            <?php

            if(isset($_GET['error']) && $_GET['error'] === 'notfound'){
                echo " <p  class = 'alert alert-danger' > Username or password is wrong </p>";
            }

            ?>
            <form method = "POST" onsubmit="return loginValidation()" >
                <label for="username">Username:</label><br>   
                <input type="text" name="username" placeholder="Enter username" /><br>
                <p id="alertTagUsername" class = 'alert alert-danger' style="display:none" >Username is required</p>

                <label for="password">Password:</label><br>
                <input type="password" name="password" placeholder="password" /><br>
                <p id="alertTagPassword" class = 'alert alert-danger' style="display:none" >Password is required</p>

                <button type="submit" name="loginSubmit">Submit</button>
            </form>
        </div>

        </div>		
            <?php include_once("sidebar.php");  ?>		
        </div>
    <br>
    </div>
    </div>
    </main>

    </body>


    <?php
    
    if (!empty($_POST['username'])) {
        $username = $_POST['username'];
    }

    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
    }

if (!empty($username) && !empty($password)) {

    $sqlSignupPassword = "SELECT * FROM users WHERE password = '$password' AND username = '$username'";
    $passwordDBCheckup = query($sqlSignupPassword, $connection);

    if (!empty($passwordDBCheckup)) {
        // $sql = "SELECT id, username, password FROM users";
        // $array = query( $sql,$conn);

                    session_start();
                    $_SESSION['id'] = $passwordDBCheckup['id'];
                    header("Location: index.php"); 
                    // header("Location:../index.php?login=successful");
                    die();
    }
    else { ?>
        <script>alert("Incorrect username or password");</script>
    <?php
    }

}

    ?>
    
<?php    

    include_once("footer.php");

?>