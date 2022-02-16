<?php

$dollar = $_POST['dollarName'];
$euro = $dollar * 0.88;
?>

<head>
    <title>The Dream</title>
</head>

<h1>Calculator</h1>

<form action="" method="post">
    <label for="dollar">Your destination</label>
    <input type="text" name="dollarName" id="dollar">
    <input type="submit"><br>
    <br>
    <label for="euro">Output</label>
    <input type="text" name="destination" id="euro" value="<?php echo $euro ?>">
</form>

