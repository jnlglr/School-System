<?php

 // Create connection
 $conn = new mysqli('localhost', 'root', '', 'test-login');
 if ($conn->connect_error){
     die('Connect failed');

 }else{ $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $course = $_POST['course'];
    $section = $_POST['section'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare ("INSERT INTO students (first_name, last_name, course, section, username, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $first_name, $last_name, $course, $section, $username, $email, $password);
    $stmt->execute();
    header("location:../login/student-login.php");
    $stmt->close();
    $conn->close();
}
?>

   