<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
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
        .edit-form {
            display: inline;
        }
    </style>

    <!-- php file here -->
    <?php include '../db-mysql.php' ?>
</head>
<body>
    <div>
        <section>
            <?php
                $userId = $_POST[userId];
                $name = $_POST[userName];
                
                $sql_user_activity = 
                "SELECT *
                FROM history_logs
                INNER JOIN users
                ON history_logs.userId = users.userId
                WHERE users.userId = '$userId'";

                $result_user_activity = mysqli_query($conn, $sql_user_activity);

                echo '<p>'.$name."'s activities</p>";
    
                if (mysqli_num_rows($result_user_activity) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result_user_activity)) {
                        $logId = $row["logId"];
                        echo "Log id: " . $row["logId"]. " - Timestamp: " . $row["timeLogin"].'
                        <form class="edit-form" action="edit-activity.php" method="post">
                            <input type="hidden" name="LogId" value="."$logId".">
                            <input type="submit" value="Edit">
                        </form><br><br>';
                    }
                } else {
                    echo "0 results";
                }
                echo '<form><br><br><input type="button" value="Back" onClick="javascript:history.go(-1)"><br></form>';
            ?>

        </section>
    </div>
</body>
</html>