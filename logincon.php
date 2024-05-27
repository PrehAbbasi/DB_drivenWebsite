<?php

// Get user input
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 $conn = mysqli_connect("localhost", "root", "", "project_db");

 if($conn->connect_error){
    die("Failed to connect: ". $conn->connect_error);
 } else {
    $stmt = $conn->prepare("select * from register where email = ?" );
    $stmt -> bind_param("s", $email);
    $stmt -> execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
         $data = $stmt_result->fetch_assoc();
         if($data['password'] === $password){
            echo "<h2><center><a href='dashboard.html'>Login Successfully</a></center></h2>";
         }else{
            echo "Invalid Email or Password";
         }
    }
    else{
        echo "Invalid Email or Password";
    }
 }
?>
