<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database dashboard</title>
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
        <p>Database dashboard</p>
        <section>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "companyA";
            
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }
            
                $sql = 
                "SELECT * 
                FROM staff";
            
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "id: " . $row["id"]. 
                        " - Name: " . $row["name"].
                        " - DOB: " . $row["dob"].
                        " - Age: " . $row["age"].
                        " - Username: " . $row["username"].
                        " - Password: " . $row["password"].
                        " - Salary: " . $row["salary"].
                        " - Bonus: " . $row["bonus"].
                        " - Leave days: " . $row["leaveDays"].
                        " - Leave days proof: " . $row["leaveDaysProof"].
                        " - MC: " . $row["mc"].
                        " - MC proof: " . $row["mcProof"].
                        " - Claims: " . $row["claims"].
                        " - Claims proof: " . $row["claimProof"].
                        "<br>";
                    }
                } else {
                    echo "0 results";
                }

                mysqli_close($conn);
            ?>
        </section>
        <form action="dashboard.php" method="get">
            <br><br>
            <input type="submit" value="Delete last row">
        </form>
    </div>
</body>
</html>