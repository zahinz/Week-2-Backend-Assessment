<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 9</title>
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
        <p>Day 9</p>
        <form action="action.php" method="get">
            <label for="name">What is your name?</label>
            <input type="text" name="username" id="name">
            <br><br>
            <input type="submit" value="Insert into database">
            <br><br>
            <a href="http://localhost:8888/backend-day-9/demo">Reset</a>
            <br>
            <a href="http://localhost:8888/backend-day-9/demo/dashboard.php">View database</a>
        </form>
        <section>
          <?php
            $name = $_GET[username];
          ?>
        </section>
    </div>
</body>
</html>