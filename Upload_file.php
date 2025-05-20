<form method="post" enctype="multipart/form-data">
    Select image: <input type="file" name="img"><br>
    <input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], $_FILES['img']['name']);
    echo "Image uploaded successfully.";
}
?>