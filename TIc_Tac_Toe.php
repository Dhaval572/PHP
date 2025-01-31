<!-- THis code is purly maded by deepseek ai -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic-Tac-Toe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .board {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            gap: 5px;
        }
        .cell {
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            background-color: #fff;
            border: 2px solid #000;
            cursor: pointer;
        }
        .cell:hover {
            background-color: #e0e0e0;
        }
        .message {
            margin-top: 20px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div>
        <div class="board">
            <?php
            // Initialize the board if not already set
            session_start();
            if (!isset($_SESSION['board'])) {
                $_SESSION['board'] = array_fill(0, 9, '');
            }

            // Check for a move
            if (isset($_GET['cell'])) 
            {
                $cell = $_GET['cell'];
                if ($_SESSION['board'][$cell] === '') 
                {
                    $_SESSION['board'][$cell] = 'X'; // Player's move
                    // Simple AI for O's move
                    $emptyCells = array_keys($_SESSION['board'], '');
                    if (!empty($emptyCells)) 
                    {
                        $randomCell = $emptyCells[array_rand($emptyCells)];
                        $_SESSION['board'][$randomCell] = 'O';
                    }
                }
            }

            // Display the board
            for ($i = 0; $i < 9; $i++) 
            {
                echo '<a href="?cell=' . $i . '" class="cell">' . $_SESSION['board'][$i] . '</a>';
            }

            // Check for a winner
            function checkWinner($board) 
            {
                $winningCombinations = 
                [
                    [0, 1, 2], [3, 4, 5], [6, 7, 8], // Rows
                    [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columns
                    [0, 4, 8], [2, 4, 6]             // Diagonals
                ];
                foreach ($winningCombinations as $combo) 
                {
                    if ($board[$combo[0]] !== '' &&
                        $board[$combo[0]] === $board[$combo[1]] &&
                        $board[$combo[1]] === $board[$combo[2]])     
                    {
                        return $board[$combo[0]];
                    }
                }
                return false;
            }

            $winner = checkWinner($_SESSION['board']);
            if ($winner) 
            {
                echo '<div class="message">Player ' . $winner . ' wins!</div>';
                session_destroy(); // Reset the game
            } elseif (!in_array('', $_SESSION['board'])) 
            {
                echo '<div class="message">It\'s a draw!</div>';
                session_destroy(); // Reset the game
            }
            ?>
        </div>
    </div>
</body>
</html>