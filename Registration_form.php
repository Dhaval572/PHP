<?php

$mysqli = new mysqli("localhost", "root", "", "test_database");


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$name = $email = $gender = $dob = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $terms = isset($_POST['terms']) ? true : false;

    // Form validation
    if (empty($name) || strlen($name) < 3) {
        $errors[] = "Name must be at least 3 characters long.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if (empty($password) || strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    if (empty($gender)) {
        $errors[] = "Gender is required.";
    }

    if (empty($dob)) {
        $errors[] = "Date of Birth is required.";
    }

    if (!$terms) {
        $errors[] = "You must agree to the terms and conditions.";
    }

    // Check if email is already registered
    $stmt = $mysqli->prepare("SELECT id FROM test WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $errors[] = "Email is already registered.";
    }

    $stmt->close();

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $mysqli->prepare("INSERT INTO test (`name`, `email`, `password`, `gender`, `dob`) VALUES (?, ?, ?, ?, ?)");
        
        if ($stmt === false) {
            die("SQL Error: " . $mysqli->error);
        }

        $stmt->bind_param("sssss", $name, $email, $hashed_password, $gender, $dob);

        if ($stmt->execute()) {
            echo "<h1>Registration Successful!</h1><p>Thank you for registering.</p>";
            exit();
        } else {
            $errors[] = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h1>User Registration</h1>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
                <p><?php echo htmlspecialchars($error); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" <?php echo ($gender === 'Male') ? 'checked' : ''; ?> required> Male
        <input type="radio" id="female" name="gender" value="Female" <?php echo ($gender === 'Female') ? 'checked' : ''; ?>> Female
        <input type="radio" id="other" name="gender" value="Other" <?php echo ($gender === 'Other') ? 'checked' : ''; ?>> Other<br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>" required><br><br>

        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">I agree to the terms and conditions</label><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
