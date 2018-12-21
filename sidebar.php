<?php include_once("database.php"); ?>

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset" style = " word-wrap: break-word ">
                
                <h4>Latest Posts</h4>
                
                <?php
                $sqlLatestPosts = "SELECT title, id FROM posts ORDER BY created_at DESC LIMIT 5";
                $latestPosts = queryAll($sqlLatestPosts, $connection);

                foreach ($latestPosts as $latestPost) {
                    ?>
                    <div>
                        <a href = "single-post.php?id=<?php echo $latestPost["id"]; ?>" > 
                            <?php echo $latestPost["title"]; ?> 
                        </a>
                    </div>

                    <?php
                }
                ?>

            </div>
</aside>