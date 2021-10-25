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
    <?php include '../db-mysql.php' ?>
</head>
<body>
    <div>
        <p>Edit activity</p>
        <section>
            <?php
                $logId = $_POST[logId];
                
                $sql_logId_display = 
                "SELECT *
                FROM history_logs
                INNER JOIN users
                ON history_logs.userId = users.userId
                WHERE history_logs.logId = '$logId'";

                $result_logId_display = mysqli_query($conn, $sql_logId_display);

                // print_r($result_logId_display);

                if (mysqli_num_rows($result_logId_display) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result_logId_display)) {
                        $name = $row["name"];
                        $userId = $row["userId"];
                        $currenttimestamp = $row["timeLogin"];
                        
                        echo '<form action="new-activity.php" method="post">
                            <label for="logid">Log ID</label>
                            <input type="text" name="logId" id="logid" value="'.$logId.'" readonly>
                            <label for="employeename">Employee name</label>
                            <input type="text" name="name" id="employeename" value="'.$name.'" readonly>
                            <input type="hidden" name="userid" id="userid" value="'.$userId.'" readonly>
                            <label for="currenttimestamp">Current</label>
                            <input type="datetime" name="currenttimestamp" id="currenttimestamp" value="'.$currenttimestamp.'" readonly>
                            <label for="newtimestamp">New</label>
                            <input type="datetime" name="newtimestamp" id="newtimestamp" placeholder="YYYY-MM-DD HH:MM:SS">
                            <br><br>
                            <input type="submit" value="Confirm">
                            <input type="button" value="Back" onClick="javascript:history.go(-1)">
                        </form>';
                    }
                } else {
                    echo "error";
                }
            ?>
        </section>
    </div>
</body>
</html>