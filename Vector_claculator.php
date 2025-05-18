<?php
// Process form submission
$error = $result = '';
$vec1_x = $vec1_y = $vec2_x = $vec2_y = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$vec1_x = $_POST['vec1_x'];
	$vec1_y = $_POST['vec1_y'];
	$vec2_x = $_POST['vec2_x'];
	$vec2_y = $_POST['vec2_y'];
	$operation = $_POST['operation'];

	// Validate if all inputs are numeric
	if (!is_numeric($vec1_x) || !is_numeric($vec1_y) ||
		!is_numeric($vec2_x) || !is_numeric($vec2_y)) 
			$error = "Please enter valid numbers in all fields!";
	else 
	{
		// Perform vector calculations based on selected operation
		switch ($operation) {
			case 'add':
				$result = [
					$vec1_x + $vec2_x,
					$vec1_y + $vec2_y
				];
				break;

			case 'subtract':
				$result = [
					$vec1_x - $vec2_x,
					$vec1_y - $vec2_y
				];
				break;

			case 'multiply':
				$result = [
					$vec1_x * $vec2_x,
					$vec1_y * $vec2_y
				];
				break;

			case 'divide':
				// Check for division by zero
				if ($vec2_x == 0 || $vec2_y == 0) {
					$error = "Cannot divide by zero!";
				} 
				else 
				{
					$result = [
						$vec1_x / $vec2_x,
						$vec1_y / $vec2_y
					];
				}
				
				break;
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vector Calculator</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.calculator-container {
			max-width: 600px;
			margin: 2rem auto;
			padding: 2rem;
			border-radius: 20px;
			background: linear-gradient(145deg, #f8f9fa, #e9ecef);
			box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
		}

		.input-group {
			margin: 1.5rem 0;
		}

		.vector-input {
			padding: 1rem;
			border: 2px solid #dee2e6;
			border-radius: 15px;
			background: white;
		}

		.result-box {
			padding: 1.5rem;
			margin-top: 2rem;
			border-radius: 15px;
			background: #007bff;
			color: white;
			transition: transform 0.3s ease;
		}

		.result-box:hover {
			transform: scale(1.02);
		}

		.alert-custom {
			border-radius: 15px;
			animation: fadeIn 0.5s ease;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(-20px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}
	</style>
</head>

<body class="bg-light">
	<div class="container">
		<div class="calculator-container bg-white">
			<h1 class="text-center mb-4">🎯 Vector Calculator</h1>

			<?php if ($error): ?>
				<div class="alert alert-danger alert-custom alert-dismissible fade show" role="alert">
					<?= htmlspecialchars($error) ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				</div>
			<?php endif; ?>

			<form method="post">
				<div class="vector-input">
					<h4 class="mb-3">📐 Vector 1</h4>
					<div class="row g-3">
						<div class="col">
							<input type="number" class="form-control rounded-pill" name="vec1_x" step="any" required
								placeholder="X component" value="<?= htmlspecialchars($vec1_x) ?>">
						</div>
						<div class="col">
							<input type="number" class="form-control rounded-pill" name="vec1_y" step="any" required
								placeholder="Y component" value="<?= htmlspecialchars($vec1_y) ?>">
						</div>
					</div>
				</div>

				<div class="vector-input">
					<h4 class="mb-3">📐 Vector 2</h4>
					<div class="row g-3">
						<div class="col">
							<input type="number" class="form-control rounded-pill" name="vec2_x" step="any" required
								placeholder="X component" value="<?= htmlspecialchars($vec2_x) ?>">
						</div>
						<div class="col">
							<input type="number" class="form-control rounded-pill" name="vec2_y" step="any" required
								placeholder="Y component" value="<?= htmlspecialchars($vec2_y) ?>">
						</div>
					</div>
				</div>

				<div class="input-group">
					<select class="form-select rounded-pill" name="operation" required>
						<option value="add">➕ Addition</option>
						<option value="subtract">➖ Subtraction</option>
						<option value="multiply">✖️ Multiplication</option>
						<option value="divide">➗ Division</option>
					</select>
				</div>

				<div class="d-grid mt-4">
					<button type="submit" class="btn btn-primary btn-lg rounded-pill">
						🚀 Calculate
					</button>
				</div>
			</form>

			<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$error && $result): ?>
				<div class="result-box text-center">
					<h3 class="mb-0">🎉 Result</h3>
					<h2 class="display-4 fw-bold mt-2">
						[ <?= htmlspecialchars(round($result[0], 2)) ?>, <?= htmlspecialchars(round($result[1], 2)) ?> ]
					</h2>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>