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
        <!-- PHP CODE -->
        <?php
        // $name and role retrieve from database based on email login 
        $email = $_POST[email];
        $passwordUser = $_POST[password];

        // sql command here
        $sql_get_row = 
        "SELECT *
        FROM users
        WHERE email = '$email'";

        // get the result
        $result_row_from_table = mysqli_query($conn, $sql_get_row);

        // fetch the password hash
        if ($row_from_table = mysqli_fetch_assoc($result_row_from_table)) {
            // fetch the password hash
            $passwordDatabase = $row_from_table['password'];
            // fetch the name
            $name = $row_from_table['name'];
            // fetch the roleId
            $roleId = $row_from_table['roleId'];
        };

        // declare function for verify hashed password
        function verifyPassword($password, $hashDatabase) {
            if(password_verify($password, $hashDatabase)) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        };

        // call verify password function and password granted
        if (verifyPassword($passwordUser, $passwordDatabase)) {  
            // text appeare depeding in roleId
            if ($roleId == 1) {
                $role = 'Admin';
            } 
            else if ($roleId == 2) {
                $role = 'Employee';
            }

            // UI display
            // name & role
            echo '<p>Clock in</p>';
            echo 'Hello - '.$name.'<br>';
            echo 'Your role - '.$role;
            // open admin dashboard
            if ($roleId == 1) {
                echo '<p>.</p>
                <a href="http://localhost:8888/backend-day-9/quiz/admin">Admin portal</a>';
            }
            
            // html form
            echo '
            <form action="confirm.php" method="post">
            <br><br>
            <input type="hidden" name="email" id="email" value="'.$email.'">
            <br><br>
            <label for="clock-in">I am in the office</label>
            <input type="checkbox" name="clockIn" id="clock-in">
            <br><br>
            <input type="submit" value="Clock in">
            <a href="http://localhost:8888/backend-day-9/quiz/">Sign out</a>
            </form>
            ';
        }
        
        else {
            echo '<p>Error</p>';
            echo 'Wrong password. <br><br> <a href="http://localhost:8888/backend-day-9/quiz/sign-up.php">Sign up</a>';
        }


        ?>

        <!-- END OF PHP CODE -->

        

        <section>

        </section>
    </div>
</body>
</html>