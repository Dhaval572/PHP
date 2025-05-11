<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>String to Binary Converter</title>
	<!-- Bootstrap 5 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color: #f8f9fa;
		}

		.converter-container {
			max-width: 600px;
			margin: 50px auto;
			padding: 30px;
			border-radius: 15px;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
			background-color: white;
		}

		.binary-result {
			background-color: #f1f1f1;
			padding: 15px;
			border-radius: 8px;
			margin-top: 20px;
			word-wrap: break-word;
		}

		.btn-convert {
			background-color: #0d6efd;
			border: none;
			padding: 10px 20px;
			transition: all 0.3s;
		}

		.btn-convert:hover {
			background-color: #0b5ed7;
			transform: translateY(-2px);
		}

		.title {
			color: #0d6efd;
			margin-bottom: 30px;
			text-align: center;
			font-weight: 600;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="converter-container">
			<h1 class="title">String to Binary Converter</h1>
			<form method="POST" class="mb-4">
				<div class="mb-3">
					<label for="inputString" class="form-label">Enter a string (no spaces):</label>
					<input type="text" class="form-control form-control-lg" id="inputString" name="input" required
						autocomplete="off" placeholder="Type something...">
				</div>
				<div class="d-grid">
					<button type="submit" class="btn btn-primary btn-convert btn-lg">Convert to Binary</button>
				</div>
			</form>

			<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$input = $_POST['input'];

				// Efficient conversion
				$binary = '';
				for ($i = 0; $i < strlen($input); $i++) {
					$char = $input[$i];
					$binary .= str_pad(decbin(ord($char)), 8, '0', STR_PAD_LEFT) . ' '; 
				}

				echo '<div class="binary-result">';
				echo '<h5 class="mb-3"><strong>Binary Result:</strong></h5>';
				echo '<div class="result-text p-3 bg-white rounded">' . trim($binary) . '</div>';
				echo '</div>';
			}
			?>
		</div>
	</div>
</body>

</html>