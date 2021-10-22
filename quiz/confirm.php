<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <!-- css file here -->
    <style>
        html, body {
            height: auto; 
            width: 100%;
            font-family: monospace;
        }
        img {
            width: 100%;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow-wrap: anywhere;
        }
        hr {
            margin-top: 30px;
            border: none;
            border-top: 1px solid gainsboro;
        }
        div {
            width: 70%;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-items: center;
            align-items: flex-start;
            border-bottom: 1px solid gainsboro;
            padding-bottom: 50px;
        }
        .div-flex-center {
            align-items: center;
            text-align: center;
        }
        section {
            margin-top: 10px;
            background-color: #dcdcdc8a;
            line-height: 1.5;
        }
    </style>

    <!-- php file here -->
    <?php include 'db-mysql.php' ?>
</head>
<body>
    <div>
        <p>You are clocked in.</p>
        <section>
            <?php
            // get the userId from the email
            $email = $_POST[email];

            // sql command here
            $sql_get_row_from_users = 
            "SELECT *
            FROM users
            WHERE email = '$email'";

            // get the result
            $result_row_from_users = mysqli_query($conn, $sql_get_row_from_users);

            // fetch the result
            if ($row_from_table = mysqli_fetch_assoc($result_row_from_users)) {
                $userId = $row_from_table['userId'];
                $name = $row_from_table['name'];
                date_default_timezone_set("Asia/Kuala_Lumpur");
                $time = date("Y-m-d H:i:s");

                echo'<strong>Staff ID</strong> '.$userId.
                '<br><strong>Staff name</strong> '.$name.
                '<br><strong>Clock in time</strong> '.$time;

            }
            
            // push userId to the table log history
            $sql_push_history_log = 
            "INSERT INTO history_logs (userId)
            VALUES ('$userId')";

            if ($conn->query($sql_push_history_log) === TRUE) {
                echo "<br><br>New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                echo '<form><br><br><input type="button" value="Back" onClick="javascript:history.go(-1)"></form>';
            ?>
        </section>
    </div>
</body>
</html>