<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        form {
            margin: 20px 0;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ff6b6b;
            border-radius: 5px;
            font-size: 1rem;
        }
        button {
            background: #ff6b6b;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #ee5253;
        }
        .result {
            margin-top: 20px;
            font-size: 1.5rem;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Love Calculator ❤️</h1>
        <form method="POST">
            <input type="text" name="name1" placeholder="Enter first name" required autocomplete="off">
            <br>
            <input type="text" name="name2" placeholder="Enter second name" required autocomplete="off">
            <br>
            <button type="submit">Calculate Love</button>
        </form>
        <?php
        function calculateLove($name1, $name2) {
            // Ensure both names are non-empty
            if (empty($name1) || empty($name2)) {
                return 0;
            }

            $sum = 0;

            // Calculate ASCII sum of the first name
            for ($i = 0; $i < strlen($name1); $i++) {
                $sum += ord($name1[$i]);
            }

            // Calculate ASCII sum of the second name
            for ($i = 0; $i < strlen($name2); $i++) {
                $sum += ord($name2[$i]);
            }

            // Return the love percentage
            return $sum % 101;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name1 = htmlspecialchars(trim($_POST["name1"]));
            $name2 = htmlspecialchars(trim($_POST["name2"]));

            if (!empty($name1) && !empty($name2)) {
                $lovePercentage = calculateLove($name1, $name2);

                echo "<div class='result'>The love percentage between <strong>$name1</strong> and <strong>$name2</strong> is: <strong>$lovePercentage%</strong></div>";
            } else {
                echo "<div class='result' style='color: red;'>Please enter valid names.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
