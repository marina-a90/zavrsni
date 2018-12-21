<?php include_once("create-comment.php"); ?>

<form id = "addComments" onsubmit = "return validateComment()" method = "POST">
        <label for = "name"><b>Your name:</b></label><br>   
        <input name="name" type="text" placeholder="Name"/>  
        <br><br> 

        <label for = "comment"><b>Commment:</b></label><br>
        <textarea name="comment" rows="10" columns="30" placeholder="Enter your comment"></textarea> 
        <br><br>

        <p id = "alertTagComment" class = "alert alert-danger" style = "display:none">All fileds must be filed in</p>

        <button name="button" type="submit">Submit Comment</button>


        <script>
                function validateComment() {
                        var name = document.forms["addComments"]["name"].value; 
                        var comment = document.forms["addComments"]["comment"].value;
                        if (name === "" || comment === "") {
                                document.getElementById("alertTagComment").style.display = "block";
                                if (name === "") {
                                        document.forms["addComments"]["name"].classList.add("alert-danger");
                                }
                                else {
                                        document.forms["addComments"]["name"].classList.remove("alert-danger");
                                }
                                if (comment === "") {
                                        document.forms["addComments"]["comment"].classList.add("alert-danger");
                                }
                                else {
                                        document.forms["addComments"]["comment"].classList.remove("alert-danger");
                                }
                                return false;
                        }
                }
        </script>

</form>