
<!DOCTYPE html>
<html>
    <head>
        <title>User Registration</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet"> 
        <div class="registrationbox">
            <h1>Professor Registration</h1>
            <form action = "connect-prof.php" method="post">
                <p for="firstname">First Name</p>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
                <p for="lastname">Last name</p>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
                <p for="username">Username</p>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                <p for="email">Email</p>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                <p for="password">Password</p>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                <input type="submit" name="" value="Register"><br>
                <a href="../login/prof-login.php">Back to Log-in page</a>
                <br>
                <a href="index.php">Home</a>
            </form>  
        </div>
        </div>
    </head>

</html>