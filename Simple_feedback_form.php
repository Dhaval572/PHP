<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $data = "$name: $message\n";
    file_put_contents("feedback.txt", $data, FILE_APPEND);
    echo "<p style='color: green; font-weight: bold; text-align: center;'>Thank you for your feedback!</p>";
}
?>

<form method="POST" style="max-width: 600px; margin: 30px auto; padding: 30px; border-radius: 12px; 
            background: #f4f4f4; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2); 
            display: flex; flex-direction: column; font-family: Arial, sans-serif;">
    
    <h2 style="text-align: center; color: #333;">Feedback Form</h2>

    <label style="font-weight: bold; font-size: 16px; margin-bottom: 5px;">Name:</label>
    <input type="text" name="name" autocomplete="off" required 
        style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #aaa; 
               border-radius: 8px; font-size: 16px;">

    <label style="font-weight: bold; font-size: 16px; margin-bottom: 5px;">Message:</label>
    <textarea name="message" autocomplete="off" required 
        style="width: 100%; padding: 12px; min-height: 150px; border: 1px solid #aaa; 
               border-radius: 8px; font-size: 16px; overflow: hidden; resize: none;"></textarea>

    <button type="submit" style="width: 100%; padding: 14px; background: #007bff; color: white; 
            font-size: 18px; border: none; border-radius: 8px; cursor: pointer; margin-top: 15px;">
        Submit
    </button>
</form>
