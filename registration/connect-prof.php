<?php

 // Create connection
 $conn = new mysqli('localhost', 'root', '', 'test-login');
 if ($conn->connect_error){
     die('Connect failed');

 }else{ 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare ("INSERT INTO prof (firstname, lastname, username, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $username, $email, $password);
    $stmt->execute();
    header("location:../login/prof-login.php");
    $stmt->close();
    $conn->close();
}

?>
   