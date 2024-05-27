
<?php

    // Connect to database (replace DB_HOST, DB_USERNAME, DB_PASSWORD, and DB_NAME with your own values)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_db";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $contact_number = $_POST['contact_number'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert data into database
    $sql = "INSERT INTO register (name, age, contact_number, country, email, password) VALUES ('$name', '$age', '$contact_number', '$country', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2><a href='login.html'>User created successfully!</a></h2>";
    } else {
        echo "Error: ";
    }

    // Close database connection
    // mysqli_close($conn);
?>