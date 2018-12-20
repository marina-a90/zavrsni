<?php 

include_once("database.php");
include_once("header.php");
include_once("create-comment.php");

?> 

<ul>

<h4><b>Comments</b></h4>

<button id = "ShowHideButton" class = ".btn .btn-default" onclick="showHideButton()">Hide Comments</button>
<br><br>

<!-- ***********************
ovo posle prebaciti u main.js -->
<script> 
    function showHideButton() {
        var comments = document.getElementById("showHide");
        var button = document.getElementById("ShowHideButton");
        if (comments.style.display === "none") {
            comments.style.display = "block";
            button.innerHTML = "Hide Comments";
        } else {
            comments.style.display = "none";
            button.innerHTML = "Show Comments";
        }
    }
</script>
<!-- *********************** -->

<div id = "showHide">

<?php

$sqlComments = "SELECT comments.text, comments.author, comments.id FROM comments 
INNER JOIN posts ON comments.post_id = posts.id WHERE posts.id = {$_GET["id"]}";
$comments = queryAll($sqlComments, $connection);


foreach ($comments as $comment) {
?>
    <li id = "singleComment">
        <?php echo $comment["author"] . ": <br>" . $comment["text"] . "<br>" ; ?>
        
        <form name = "deleteComment" method = "POST">
        <input name="commentId" type="hidden" value="<?php echo $comment["id"]; ?>"/>
        <button id = "deleteComment" class = "btn btn-default">Delete Comment</button>
        </form>

        <hr>
    </li>
<?php } ?>

</ul>

</div> 
<!-- show / hide div end -->


<?php

include_once("delete-comment.php");
include_once("sidebar.php");
include_once("footer.php");

?>