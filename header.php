<header>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">

                <?php if (preg_match("/index.php/i", $_SERVER["SCRIPT_NAME"])) { ?>
                    <a href="index.php" class="nav-link active">Home</a>
                <?php } else { ?>
                    <a href="index.php" class="nav-link">Home</a>
                <?php } ?>

                <?php if (preg_match("/create-post.php/i", $_SERVER["SCRIPT_NAME"])) { ?>
                    <a href="create-post.php" class="nav-link active">Create</a>
                <?php } else { ?>
                    <a href="create-post.php" class="nav-link">Create</a>
                <?php } ?>

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