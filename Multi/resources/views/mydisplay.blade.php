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
            font-family: 'Itim', cursive;
        }
        div.container {
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

    <div class="container">
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
