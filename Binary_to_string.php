<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Binary to String Converter</title>
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

		.result-box {
			background-color: #f1f1f1;
			padding: 15px;
			border-radius: 8px;
			margin-top: 20px;
			word-wrap: break-word;
		}

		.btn-convert {
			background-color: #28a745;
			border: none;
			padding: 10px 20px;
			transition: all 0.3s;
		}

		.btn-convert:hover {
			background-color: #218838;
			transform: translateY(-2px);
		}

		.title {
			color: #28a745;
			margin-bottom: 30px;
			text-align: center;
			font-weight: 600;
		}

		.form-note {
			font-size: 0.9rem;
			color: #6c757d;
			margin-top: 5px;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="converter-container">
			<h1 class="title">Binary to String Converter</h1>
			<form method="POST" class="mb-4" id="binaryForm">
				<div class="mb-3">
					<label for="binaryInput" class="form-label">Enter binary code (8-bit groups separated by
						spaces):</label>
					<input type="text" class="form-control form-control-lg" id="binaryInput" name="binary" required
						autocomplete="off" placeholder="Type something...">
				</div>
				<div class="d-grid">
					<button type="submit" class="btn btn-success btn-convert btn-lg">Convert to String</button>
				</div>
			</form>

			<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$binary = $_POST['binary'];

				// Convert binary to string
				$bValues = explode(' ', $binary);
				$text = '';

				foreach ($bValues as $bValue) {
					// Validate it's 8-bit binary
					if (preg_match('/^[01]{8}$/', $bValue)) {
						$text .= chr(bindec($bValue));
					}
				}

				if (!empty($text)) {
					echo '<div class="result-box" id="resultContainer">';
					echo '<h5 class="mb-3"><strong>Text Result:</strong></h5>';
					echo '<div class="result-text p-3 bg-white rounded">' . htmlspecialchars($text) . '</div>';
					echo '</div>';
				} else {
					echo '<div class="alert alert-danger mt-3" role="alert">';
					echo 'Invalid binary input. Please enter valid 8-bit binary numbers separated by spaces.';
					echo '</div>';
				}
			}
			?>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>