<?php
session_start();

 // Create connection
$conn = new mysqli('localhost', 'root', '', 'test-login');
 
 if(isset($_POST['login'])){
     $_POST['username'];
     $_POST['password'];


    $query = "SELECT * FROM prof WHERE username = '".$_POST['username']."' AND password = '".$_POST['password'] ."'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)){
        $_SESSION['prof_id'] = $row['prof_id'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        header("location:../adminphp/index-prof.php");
    }
    else{
        echo "failed";
    }
 
    
    }


 ?>


<!DOCTYPE html>
<html>
    <head>
        <title>User Login</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet"> 
        <div class="student-loginbox">
            <h1>Professor Log-in</h1>
            <form method="POST">
                <p>Username</p>
                <input type="username" name="username" class = "form-control form-control user" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password"  class = "form-control form-control user" placeholder="Enter Password">
                <input type="submit" name="login" value="Login"><br>
                <a href="#">Forget password?</a><br>
                <a href="../registration/prof-registration.php">Create an account</a>
                <br>
                <a href="../index.php">Home</a>
            </form>
        </div>
        </div>
        

 
    <body>
    </head>

    </body>
</html>