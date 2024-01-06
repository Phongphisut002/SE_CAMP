<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
       body {
            background: url('https://i.pinimg.com/564x/70/89/b8/7089b8f5419717b5b83e0f59b44a8102.jpg');
            background-size: cover;
            background-color:#ffffff05);
            backdrop:blur(10px);
            -webkit-backdrop-filter:blur(25px);

            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin:0;
            font-family: 'Itim', cursive;
        }

        h1 {
            color: #000000;
            text-shadow: 3px 3px rgb(121, 118, 118);
            font-size: 34px;
            font-weight: bold;
        }

        div.HW {
            width:50%;
            max-height: 500px;
            overflow-y: scroll;
            text-align: center;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 20px 50px;
        }
    </style>
</head>
<body>

    <div class="HW">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $x = $_POST["myinputnumber"];
            echo "<h1>สูตรคูณแม่ $x</h1>";
            for ($i = 1; $i <= 24; $i++) {
                echo "$x x $i = " . ($x * $i) . "<br>";
            }
        }
        ?>
    </div>

</body>
</html>
