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
</head>
<body>
    <div>
        <section>
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
        </section>
    </div>
</body>
</html>