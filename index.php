<?php

var_dump($_GET);
var_dump($_POST);
echo $_POST['destination'];
?>

<form action="" method="post">
    <label for="destination">Your destination</label>
    <input type="text" name="destination" id="destination">
    <input type="submit">
</form>
