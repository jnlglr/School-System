<?php
session_start();

 // Create connection
 $conn = new mysqli('localhost', 'root', '', 'test-login');
 
 if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $password = $_POST['password'];


    $sql = "SELECT * FROM `students` WHERE username = '$username' AND password = '$password'";
    $result = $conn ->query($sql);

    if($result->num_rows > 0){
        $_SESSION['username'] = $username;
        echo "success";
        die;

    }
    }
 ?>