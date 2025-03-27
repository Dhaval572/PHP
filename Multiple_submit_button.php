<form method="post">
    <button type="submit" name="btn1">Button 1</button>
    <button type="submit" name="btn2">Button 2</button>
</form>

<?php	
if (isset($_POST['btn1'])) {
    echo "You clicked: Button 1";
} 

if (isset($_POST['btn2'])) {
    echo "You clicked: Button 2";
}
?>
