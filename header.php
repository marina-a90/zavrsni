<?php
session_start();
?>

<header>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav headerFlex">
                <div class = "row">
                    <?php if (preg_match("/index.php/i", $_SERVER["SCRIPT_NAME"])) { ?>
                        <a href="index.php" class="nav-link active">Home</a>
                    <?php } else { ?>
                        <a href="index.php" class="nav-link">Home</a>
                    <?php } ?> 



                    <?php

                if (preg_match("/create-post.php/i", $_SERVER["SCRIPT_NAME"])) { 
                    echo "<a href='create-post.php' class='nav-link active'>Create</a>";
                } else { 
                    echo "<a href='create-post.php' class='nav-link'>Create</a>";
                } 

                if(isset($_SESSION['id'])){
                    if (preg_match("/your-posts.php/i", $_SERVER["SCRIPT_NAME"])) {
                        echo "<a href='your-posts.php' class='nav-link active'>Your Posts</a>";
                    } else {
                        echo "<a href='your-posts.php' class='nav-link'>Your Posts</a>";
                    }
                }
                
                
                ?>

            </div>


            <div class ="row">

            <?php
       
            if(isset($_SESSION['id'])){
                echo "<a class='nav-link' href='logout.php'>Logout</a>";
            }else{
                if (preg_match('/login.php/i', $_SERVER['SCRIPT_NAME'])) {
                    echo "<a href='login.php' class='nav-link active'>Login</a>";
                } else {
                    echo "<a href='login.php' class='nav-link'>Login</a>";
                }

                if (preg_match('/signup.php/i', $_SERVER['SCRIPT_NAME'])) {
                    echo "<a href='signup.php' class='nav-link active'>Signup</a>";
                } else {
                    echo "<a href='signup.php' class='nav-link'>Signup</a>";
                }
            }
            ?>

        </div>


    

            </nav>
        </div>
    </div>

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Blog</h1>
            <p class="lead blog-description">Super kul blog</p>
        </div>
    </div>
</header>