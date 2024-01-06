
{{--        65160231
     นาย พงศ์พิสุทธิ์ เคนชาติ
              มกุล 5      --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Itim', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        form {
            margin-bottom: 100px;
            text-align: center;
        }

        label {
            display: block;
            font-size: 50px;
        }

        input[type="number"],
        button {
            padding: 40px;
            border: 5px solid #ccc;
            border-radius: 50px;
            transition: box-shadow 0.3s ease;
        }

        input[type="number"]:hover,
        button:hover {
            box-shadow: 0 0 10px rgb(255, 0, 0);
        }

        button {
            cursor: pointer;
            background-color: #a6a9a6;
            color: #ffffff;
            border: none;
        }

        .box {
            display: flex;
            gap: 20px;
            align-items: center;
        }
    </style>
</head>

<body>
    <br>
    <div>
        <form method="post" class="box" action="/my-display">
            @csrf
            <label for="NumberInput">Input : </label>
            <input type="number" name="myinputnumber">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
