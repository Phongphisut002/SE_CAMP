





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
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        div.container {
            width: 50%;
            max-height: 500px;
            overflow-y: scroll;
            text-align: center;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            padding: 20px;
            background-color: #ffffff;
            border: 2px solid #ddd;
            margin-top: 20px;
        }
        div.container:hover {
            box-shadow: 0 0 10px rgb(255, 0, 0);
        }

        h1 {
            color: #333;
            margin-top: 5rem;
            margin-bottom: 1rem;
            font-size: 36px;

        }

        table {
            width: 100%;
            margin-top: 1rem;


        td {
            padding: 30px;

    </style>
</head>

<body>

    <h1>เเม่สูตรคูณ</h1>

    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $x = $_POST['myinputnumber'];
            echo '<table>';
            for ($i = 1; $i <= 24; $i++) {
                echo '<tr><td>' . $x . '</td><td>x</td><td>' . $i . '</td><td>=</td><td>' . $x * $i . '</td></tr>';
            }
            echo '</table>';
        }
        ?>

    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\SE_CAMP\Multi\resources\views/mydisplay.blade.php ENDPATH**/ ?>