<form id = "addComments" onsubmit = "return validateComment()" method = "POST">
        <input name="name" type="text" placeholder="Name"/>  
        <br> 
        <textarea name="comment" rows="10" columns="100" placeholder="Enter your comment"></textarea> 
        <br>
        <p id = "alertTagComment" class = "alert alert-danger" style = "display:none"> All fileds must be filed in </p>
        <button name="button" type="submit">Submit</button>


<script>
        function validateComment() {
        var name = document.forms["addComments"]["name"].value; 
        var comment = document.forms["addComments"]["comment"].value;
        if (name === "" || comment === "") {
                document.getElementById("alertTagComment").style.display = "block";
                return false;
        }
}
</script>

</form>