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
        form {
            display: inline;
        }
    </style>

    <!-- php file here -->
    <?php include '../db-mysql.php'?>
</head>
<body>
    <div>
        <p>Welcome Admin</p>
        <section>
            <?php
            $sql_all_user = 
            "SELECT *
            FROM users
            INNER JOIN roles
            ON users.roleId = roles.roleId";

            $result_all_user = mysqli_query($conn, $sql_all_user);

            if (mysqli_num_rows($result_all_user) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result_all_user)) {
                    $userId = $row["userId"];
                    $userName = $row["name"];
                    echo "id: " . $row["userId"]. " - Name: " . $row["name"]. " - Role: " . $row["roleName"].'
                    <form action="user-activity.php" method="post">
                        <input type="hidden" name="userId" value="'.$userId.'">
                        <input type="hidden" name="userName" value="'.$userName.'">
                        <input type="submit" value="View activity">
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