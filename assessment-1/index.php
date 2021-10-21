<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment 1</title>
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
        <p><strong>Question 1</strong></p>
        <br>
        <p><em>User 1, 2, 3 please fill in the form with 5 number.</em></p>
        
        <form action="index.php" method="get">
            <br><br>
            <p>User 1</p>
            <label for="user1"></label>
            <input type="number" name="numUser1" id="user1">
            <p>User 2</p>
            <label for="user2"></label>
            <input type="number" name="numUser2" id="user2">
            <p>User 3</p>
            <label for="user3"></label>
            <input type="number" name="numUser3" id="user3">
            <br><br>
            <input type="submit" value="Analyse">
        </form>
        <section>
          <?php
            $numUser1 = str_split($_GET[numUser1]);
            $numUser2 = str_split($_GET[numUser2]);
            $numUser3 = str_split($_GET[numUser3]);

            // print_r($numUser1);
            // echo '<br>';
            // print_r($numUser2);
            // echo '<br>';
            // print_r($numUser3);

            function above5($arr) {
                echo 'This are the number above and equal 5 <br>';
                for ($i=0; $i < count($arr); $i++) { 
                    if ($arr[$i] >= 5) {
                        echo $arr[$i].' ';
                    }
                }
                echo '<br><br>';
            }

            function below5($arr) {
                echo 'This are the number below and equal 5 <br>';
                for ($i=0; $i < count($arr); $i++) { 
                    if ($arr[$i] <= 5) {
                        echo $arr[$i].' ';
                    }
                }
                echo '<br><br>';
            }

            function largest3($arr) {
                $largest = [];
                echo 'This are the number below and equal 5 <br>';
                for ($i=0; $i < count($arr); $i++) { 
                    if ($arr[$i] <= 5) {
                        echo $arr[$i].' ';
                    }
                }
                echo '<br><br>';
            }



            above5($numUser1);
            below5($numUser2);

          ?>
        </section>
    </div>
</body>
</html>