<?php
session_start();

if (!isset($_SESSION['editable']) || $_SESSION['editable'] !== true) {
	$_SESSION['editable'] = false;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['edit'])) {
		$_SESSION['editable'] = true;
	} elseif (isset($_POST['save'])) {
		$_SESSION['editable'] = false;
	}
}
$readonly = $_SESSION['editable'] ? 'false' : 'true';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit the code</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/theme/dracula.min.css">
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			background-color: #0d1117;
			color: #c9d1d9;
			display: flex;
			height: 100vh;
			flex-direction: row;
		}

		#sidebar {
			width: 20%;
			background: #161b22;
			color: #c9d1d9;
			padding: 15px;
			border-right: 1px solid #30363d;
		}

		#sidebar h3 {
			font-size: 1.2em;
			margin-bottom: 20px;
			color: #f0f6fc;
		}

		#sidebar ul {
			list-style: none;
			padding: 0;
		}

		#sidebar ul li {
			margin: 10px 0;
			padding: 8px;
			cursor: pointer;
			transition: background 0.3s;
			border-radius: 6px;
		}

		#sidebar ul li:hover {
			background: #21262d;
		}

		#main-content {
			flex: 1;
			display: flex;
			flex-direction: column;
		}

		#header {
			background: #161b22;
			padding: 10px 20px;
			border-bottom: 1px solid #30363d;
			display: flex;
			align-items: center;
		}

		#header .breadcrumbs {
			font-size: 0.9em;
			color: #8b949e;
		}

		#header .breadcrumbs a {
			color: #58a6ff;
			text-decoration: none;
		}

		#header .breadcrumbs a:hover {
			text-decoration: underline;
		}

		#file-content {
			flex: 1;
			padding: 20px;
			overflow-y: auto;
		}

		.CodeMirror {
			height: 80vh;
			border-radius: 6px;
			background: #0d1117;
			color: #c9d1d9;
		}

		.CodeMirror-gutters {
			background: #0d1117;
			border-right: 1px solid #30363d;
		}

		.CodeMirror-linenumber {
			color: #8b949e;
		}

		.button-container {
			margin-top: 10px;
			text-align: center;
		}

		.btn {
			padding: 10px 20px;
			background: #58a6ff;
			color: white;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		.btn:hover {
			background: #1f80c7;
		}
	</style>
</head>

<body>
	<div id="sidebar">
		<h3>Repository Name</h3>
		<ul>
			<li>📁 src</li>
			<li>📁 public</li>
			<li>📄 index.html</li>
			<li>📄 style.css</li>
			<li>📄 script.js</li>
		</ul>
	</div>
	<div id="main-content">
		<div id="header">
			<div class="breadcrumbs">
				<a href="#">Repository Name</a> / <a href="#">src</a> / <span>index.html</span>
			</div>
		</div>
		<div id="file-content">
			<form method="POST">
				<textarea id="editor" name="editor_content"><?php echo htmlspecialchars(file_get_contents("Sample_text.txt")); ?></textarea>
				<div class="button-container">
					<?php if ($_SESSION['editable']): ?>
						<button type="submit" name="save" class="btn">Save</button>
					<?php else: ?>
						<button type="submit" name="edit" class="btn">Edit</button>
					<?php endif; ?>
				</div>
			</form>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/codemirror.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/javascript/javascript.min.js"></script>
	<!-- Include the necessary add-ons for auto-close brackets -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/edit/closebrackets.min.js"></script>
	<script>
		var editor = CodeMirror.fromTextArea(document.getElementById("editor"), {
			lineNumbers: true,
			mode: "javascript",
			theme: "dracula",
			readOnly: <?php echo $readonly; ?>, // Use PHP to set readOnly mode dynamically
			autoCloseBrackets: true // Enable auto-closing of brackets
		});
	</script>
</body>

</html>	