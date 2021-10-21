<?php

    include 'index.php';

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "day_9";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = 
    "INSERT INTO users (name)
    VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>