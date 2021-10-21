<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "invoke_database";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = 
    "SELECT * 
    FROM EMPLOYEE
    INNER JOIN SUPERVISOR
    ON EMPLOYEE.supervisor_id = SUPERVISOR.supervisor_id";

    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["employee_id"]. " - Name: " . $row["name"]. " - Leave date: " . $row["leave_date"]. " - Performance: " . $row["performance_rating"]. " - Feedback: " . $row["performance_feedback"]. " - Supervisor: " . $row["supervisor_name"]."<br>";
        }
    } else {
        echo "0 results";
    }
    
    echo("<script>console.log('PHP: " . $result . "');</script>");
    mysqli_close($conn);
?>
    
</body>
</html>
