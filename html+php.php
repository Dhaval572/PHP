<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML + PHP Example</title>
</head>
<body>

<h1>Contact Form</h1>
<form action="#" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Simple message displaying the submitted data
    echo "<h1>Form Submitted Successfully!</h1>";
    echo "<p>Name: " . $name . "</p>";
    echo "<p>Email: " . $email . "</p>";
}
?>

</body>
</html>
