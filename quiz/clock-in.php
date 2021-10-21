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
    <?php include 'db-myql.php' ?>
</head>
<body>
    <div>
        <p>Clock in</p>

        <!-- PHP code -->
        <?php
        // $name and role retrieve from database based on email login 
        $name = $_POST[email];
        $role;

        // sql command here
        
        // UI display here
        echo 'Hello '.$name.'<br>';
        echo 'Your role - '.$role;
        ?>

        <section>
            <!-- another php here -->
        </section>
    </div>
</body>
</html>