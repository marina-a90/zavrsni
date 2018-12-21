<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signup</title>

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

                $firstname = $lastname = $username = $email = $password1 = $password2 = "";
                $firstnameError = $lastnameError = $usernameError = $emailError = $passwordError = "";
                $firstnameErr = $lastnameErr = $emailErr = $passwordErr = "";
                $passwordErrorMatch = "";

                if (!empty($_POST['firstname'])) {
                    $firstname = $_POST['firstname'];
                    if (!preg_match("/^[a-zA-Z']*$/",$firstname)) {
                        $firstnameErr = "*Only letters allowed";
                    }
                }

                if (!empty($_POST['lastname'])) {
                    $lastname = $_POST['lastname'];
                    if (!preg_match("/^[a-zA-Z']*$/",$lastname)) {
                        $lastnameErr = "*Only letters allowed";
                    }
                }

                if (!empty($_POST['username'])) {
                    $username = $_POST['username'];
                }

                if (!empty($_POST['email'])) {
                    $email = $_POST['email'];
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "*Invalid email format";
                    }
                }

                if (!empty($_POST['password1']) && !empty($_POST['password2'])) {
                    if ($password1 !== $password2) {
                        $passwordErr = "*Passwords do not match";
                    } else {
                        $password1 = $_POST['password1'];
                        $password2 = $_POST['password2'];
                    }
                }  


            ?>

            <form method = "POST" id = "singupForm" onsubmit="return singUpvalidation()" >
                <div>
                    <label for = "firstname">First Name:</label><br>
                    <input type="text" name="firstname" placeholder="First name" id="signupFirstName" />
                    <?php echo $firstnameError; echo $firstnameErr; ?>
                    <br><br>

                    <label for = "lastname">Last Name:</label><br>
                    <input type="text" name="lastname" placeholder="Last name" id="signupLastName" />
                    <?php echo $lastnameError; echo $lastnameErr; ?>
                    <br><br>

                    <label for = "username">Username:</label><br>
                    <input type="text" name="username" placeholder="Username" id="signupUsername" />
                    <?php echo $usernameError; ?>
                    <br><br>

                    <label for = "email">Email:</label><br>
                    <input type="email" name="email" placeholder="email" id="signupEmail" />
                    <?php echo $emailError; echo $emailErr; ?>
                    <br><br>

                    <label for = "password1">Password</label><br>
                    <input type="password" name="password1" placeholder="password" id="signupPassword1" />
                    <?php echo $passwordErr; echo $passwordError; echo $passwordErrorMatch; ?>
                    <br><br>

                    <label for = "password2">Password</label><br>
                    <input type="password" name="password2" placeholder="repeat password" id="signupPassword2" />
                    <?php echo $passwordErr; echo $passwordError; echo $passwordErrorMatch; ?>
                    <br><br>
                </div>
                <p id = "alertTagSignup" class = "alert alert-danger" style = "display:none"> </p>
                
                <button type="submit" name="signupSubmit">Submit</button>

                <script>
                    function singUpvalidation() {
                        var firstname = document.forms["singupForm"]["firstname"].value; 
                        var lastname = document.forms["singupForm"]["lastname"].value;
                        var username = document.forms["singupForm"]["username"].value;
                        var email = document.forms["singupForm"]["email"].value;
                        var password1 = document.forms["singupForm"]["password1"].value;
                        var password2 = document.forms["singupForm"]["password2"].value;

                        if (firstname === "") {
                                        document.forms["singupForm"]["firstname"].classList.add("alert-danger");
                                }
                                else {
                                        document.forms["singupForm"]["firstname"].classList.remove("alert-danger");
                                }

                                if (lastname === "") {
                                        document.forms["singupForm"]["lastname"].classList.add("alert-danger");
                                }
                                else {
                                        document.forms["singupForm"]["lastname"].classList.remove("alert-danger");
                                }

                                if (username === "") {
                                        document.forms["singupForm"]["username"].classList.add("alert-danger");
                                }
                                else {
                                        document.forms["singupForm"]["username"].classList.remove("alert-danger");
                                }

                                if (email === "") {
                                        document.forms["singupForm"]["email"].classList.add("alert-danger");
                                }
                                else {
                                        document.forms["singupForm"]["email"].classList.remove("alert-danger");
                                }

                                if (password1 === "") {
                                        document.forms["singupForm"]["password1"].classList.add("alert-danger");
                                }
                                else {
                                        document.forms["singupForm"]["password1"].classList.remove("alert-danger");
                                }

                                if (password2 === "") {
                                        document.forms["singupForm"]["password2"].classList.add("alert-danger");
                                }
                                else {
                                        document.forms["singupForm"]["password2"].classList.remove("alert-danger");
                                }

                        if (firstname === "" || lastname === "" || username === ""  || email === "" || password1 === "" || password2 === "") {
                                document.getElementById("alertTagSignup").style.display = "block";
                                document.getElementById("alertTagSignup").innerHTML = "All fileds must be filled in";
            
                                return false;
                        }

                        if (password1 !== password2) {
                            document.getElementById("alertTagSignup").innerHTML = "Passwords do not match. Please try again.";
                            return false;
                        }

                }
                </script>


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


    if ($_SERVER['REQUEST_METHOD'] === "POST") { 

            if (empty($firstname)) {
                $firstnameError = "*First name field is required";
                }
            if (empty($lastname)) {
                $lastnameError = "*Last name field is required";
                }
            if (empty($username)) {
                $usernameError = "*Username field is required";
                }
            if (empty($email)) {
                $emailError = "*Email field is required";
                }
            if (empty($password1)) {
                $passwordError = "*Password field is required";
                }
            if (empty($password2)) {
                $passwordError = "*Password field is required";
                }   


        if (!empty($firstname) && !empty($lastname) && !empty($username) && !empty($email) && !empty($password1) && !empty($password2)) {

            $sqlSignupUsername = "SELECT * FROM users WHERE username = '$username'";
            $usernameDBCheckup = queryAll($sqlSignupUsername, $connection);

            $sqlSignupEmail = "SELECT * FROM users WHERE email = '$email'";
            $emailDBCheckup = queryAll($sqlSignupEmail, $connection);

            if (empty($usernameDBCheckup) && empty($emailDBCheckup)) {
            
                $sqlSignup = 
                    "INSERT INTO users 
                    (first_name, last_name, username, email, password) 
                    VALUES 
                    ('$firstname', '$lastname', '$username', '$email', '$password1')";   
                insertOrDelete($sqlSignup, $connection);

                header("Location: index.php");
            } else { ?>
                <script>alert("Username or email are already in use.");</script>
            <?php
            }

        }

    }


?>





<?php    

    include_once("footer.php");

?>