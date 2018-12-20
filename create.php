<form id = "addPosts" onsubmit = "return validatePost()" method = "POST">
        <input name="author" type="text" placeholder="Your Name"> 
        <br>
        <input name="title" type="text" placeholder="Post Title"/> 
        <br> 
        <textarea name="post" rows="10" columns="100" placeholder="Post Text"></textarea> 
        <br>
        <p id = "alertTagPost" class = "alert alert-danger" style = "display:none"> All fileds must be filed in </p>
        <button name="button" type="submit">Create a post</button>

        <script>
                function validatePost() {
                var author = document.forms["addPosts"]["author"].value; 
                var title = document.forms["addPosts"]["title"].value;
                var post = document.forms["addPosts"]["post"].value;
                if (author === "" || title === "" || post === "") {
                        document.getElementById("alertTagPost").style.display = "block";
                        return false;
                }
}
        </script>


</form>