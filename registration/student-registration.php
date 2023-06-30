
<!DOCTYPE html>
<html>
    <head>
        <title>User Registration</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet"> 
        <div class="registrationbox">
            <h1>Student Registration</h1>
            <form action = "connect-student.php" method="post">
                <p for="first_name">First Name</p>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name">
                <p for="last_name">Last name</p>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
                <p for="course">Course</p>
                <input type="text" class="form-control" id="course" name="course" placeholder="Enter Course">
                <p for="section">Section</p>
                <input type="text" class="form-control" id="section" name="section" placeholder="Enter Section">
                <p for="username">Username</p>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                <p for="email">Email</p>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                <p for="password">Password</p>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                <input type="submit" name="" value="Register"><br>
                <a href="../login/student-login.php">Back to Log-in page</a>
                <br>
                <a href="../index.php">Home</a>
            </form>  
        </div>
        </div>
    </head>

</html>