<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แม่สูตรคูณ</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

</head>

<body>
    <h1>แม่สูตรคูณ</h1>
    <div class="box">

        <form action="" method="post">
            <label for="numberInput">ป้อนตัวเลขที่ต้องการคูณ:</label>
            <input type="number" name="x" id="numberInput" placeholder="ป้อนตัวเลขที่ต้องการคูณ" required>
            <input type="submit" value="คูณ">
        </form>


        <div class="container">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $x = $_POST["x"];

                echo "<h2>สูตรคูณเเม่ $x</h2>";
                echo "<ul>";

                for ($i = 1; $i <= 24; $i++) {
                    echo "<br>$x x $i = " . $x * $i . "<br>";
                }

                echo "</ul>";
            }
            ?>
        </div>
    </div>
</body>

</html>