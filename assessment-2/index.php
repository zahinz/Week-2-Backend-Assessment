<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment 2</title>
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
        <p><strong>Key in staff directory</strong></p>
        <form action="action.php" method="get">
            <br><br>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <br><br>
            <label for="dob">Date of birth</label>
            <input type="date" name="dob" id="dob">
            <br><br>
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
            <br><br>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br><br>
            <label for="salary">Salary</label>
            <input type="text" name="salary" id="salary">
            <br><br>
            <label for="bonus">Bonus</label>
            <input type="text" name="bonus" id="bonus">
            <br><br>
            <label for="leave_days">Leave days</label>
            <input type="text" name="leave_days" id="leave_days">
            <br><br>
            <label for="leave_days_proof">Leave days proof</label>
            <input type="text" name="leave_days_proof" id="leave_days_proof">
            <br><br>
            <label for="mc">MC</label>
            <input type="text" name="mc" id="mc">
            <br><br>
            <label for="mc-proof">MN proof</label>
            <input type="text" name="mc_proof" id="mc-proof">
            <br><br>
            <label for="claims">Claims</label>
            <input type="text" name="claims" id="claims">
            <br><br>
            <label for="claims-proof">Claims proof</label>
            <input type="text" name="claims_proof" id="claims-proof">
            <br><br>
            <input type="submit" value="Insert into database">
            <br><br>
            <a href="http://localhost:8888/backend-day-9/assessment-2">Reset</a>
            <br>
            <a href="http://localhost:8888/backend-day-9/assessment-2/dashboard.php">View database</a>
        </form>
        <section>
          <?php
            $name = $_GET[username];
            $dob = $_GET[dob];
            $age = $_GET[age];
            $username = $_GET[username];
            $password = $_GET[password];
            $salary = $_GET[salary];
            $bonus = $_GET[bonus];
            $leaveDays = $_GET[leave_days];
            $leaveDaysProof = $_GET[leave_days_proof];
            $mc = $_GET[mc];
            $mcProof = $_GET[mc_proof];
            $claims = $_GET[claims];
            $claimsProof = $_GET[claims_proof];
          ?>
        </section>
    </div>
</body>
</html>