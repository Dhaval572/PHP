<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Sort in PHP</title>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Container styling */
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Heading styling */
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        /* Input field styling */
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #28a745;
        }

        /* Submit button styling */
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        /* Result styling */
        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 6px;
            border: 1px solid #eee;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bubble Sort in PHP</h1>
        <form method="post" action="#">
            <input type="text" name="numbers" placeholder="Enter numbers separated by commas" required, autocomplete="off">
            <input type="submit" name="submit" value="Sort">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // Get input from the form
            $input = $_POST['numbers'];

            // Convert the input string into an array of integers
            $numbers = array_map('intval', explode(',', $input));

            // Bubble Sort Algorithm
            $n = count($numbers);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($numbers[$j] > $numbers[$j + 1]) {
                        // Swap the elements
                        $temp = $numbers[$j];
                        $numbers[$j] = $numbers[$j + 1];
                        $numbers[$j + 1] = $temp;
                    }
                }
            }

            // Display the sorted array
            echo '<div class="result">Sorted Numbers: ' . implode(', ', $numbers) . '</div>';
        }
        ?>
    </div>
</body>
</html>