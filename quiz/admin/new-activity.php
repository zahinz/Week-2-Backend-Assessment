<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
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
    <?php include '../db-mysql.php' ?>
</head>
<body>
    <div>
        <p>New activity status</p>
        <section>
            <?php
            // get the logId
            $logId = $_POST[logId];
            $name = $_POST[name];
            $userId = $_POST[userid];
            $currenttimestamp = $_POST[currenttimestamp];
            $newtimestamp = $_POST[newtimestamp];

            // push to database
            $sql_push_new_log_change =
            "INSERT INTO change_logs (logId, userId, timeLogin, newTimeLogin)
            VALUES ('$logId', '$userId', '$currenttimestamp', '$newtimestamp')";

            if ($conn->query($sql_push_new_log_change) === TRUE) {
                echo 'New clock in time for Log ID - '.$logId.' is set. <br><br> 
                Details <br> 
                Employee name : '.$name.'<br>
                Old clock time : '.$currenttimestamp.'<br>
                New clock time : '.$newtimestamp.'<br>';
                } 
            else {
            echo "Error: " . $sql_push_new_log_change . "<br>" . $conn->error;
            }
            echo '<form><br><br><input type="button" value="Back" onClick="javascript:history.go(-1)"><br></form>';

            ?>
        </section>
    </div>
</body>
</html>