<?php
    // database recall
    include 'db-mysql.php';

    $email = $_POST[email];
    $name = $_POST[name];
    $_POST[role] === 'admin' ? $roleId = 1 : $roleId = 2;
    
    $sql_sign_up = 
    "INSERT INTO users (name, email, roleId)
    VALUES ('$name', '$email', '$roleId')";

    if ($conn->query($sql_sign_up) === TRUE) {
        echo "Welcome to your new work place <br> <a href='http://localhost:8888/backend-day-9/quiz/'>Sign in now</a>";
    }
    else {
        echo "Sign up unsuccessfull. Please contact admin for support.<br><a href='http://localhost:8888/backend-day-9/quiz/'>Back to home</a>";
        // echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>