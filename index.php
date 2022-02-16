<?php
$dollar = $_POST['dollarName'];
$euro = floatval($dollar) * 0.88;
$dollar = 0;


$valuta = $_POST['valutaName'];
$outputValuta = $valuta * 0.88;
echo ($outputValuta);
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
    <br>
    <br>
    <br>
    <label for="valuta">Choose valuta</label>
    <select id="valuta">
        <option value="Dollar">Dollar</option>
        <option value="Euro">Euro</option>
        <option value="Pond">Pond</option>
        <option value="Kroon">Kroon</option>
    </select><br>
    <br>
    <label for="valutaAmount"></label>
    <input type="text" name="valutaName" id="valutaAmount">
    <input type="submit">
    <br>
    <br>
    <label for="euro">Output</label>
    <input type="text" name="valutaNames" id="euro" value="<?php echo $outputValuta ?>">
</form>
<br>
<br>



