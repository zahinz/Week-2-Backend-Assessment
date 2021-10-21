<?php

    include 'index.php';

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "companyA";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    
    $sql = 
    "INSERT INTO staff (name, dob, age, username, password, salary, bonus, leave_days, leave_days_proof, mc, mc_proof, claims, claims_proof)
    VALUES ('$name', '$dob', '$age', '$username', '$password', '$salary', '$bonus', '$leaveDays', '$leaveDaysProof', '$mc', '$mcProof', '$claims', '$claimsProof')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>