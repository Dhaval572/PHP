<form method="post">
    <input type="text" name="name1" placeholder="Form 1" autocomplete="off">
    <button type="submit" name="form1">Submit Form 1</button>
</form>

<form method="post">
    <input type="text" name="name2" placeholder="Form 2" autocomplete="off" >
    <button type="submit" name="form2">Submit Form 2</button>
</form>

<?php
if (isset($_POST['form1'])) {
    echo "Form 1: " . $_POST['name1'];
}

if (isset($_POST['form2'])) {
    echo "Form 2: " . $_POST['name2'];
}
?>
