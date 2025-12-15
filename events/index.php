<?php
require_once ('../lib/library.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="style.css?ver=1.0.1">
</head>
<body>
    <h1>Eventi JavaScript</h1>
    <button onclick=esercizio01()>rosso</button><br><br>
    <button onclick=esercizio02()>giallo</button><br><br>
    <button onclick=esercizio03()>blu</button><br><br>
    <button onclick=esercizio04()>alterna</button><br><br>
    <button onclick=esercizio05()>verde</button><br><br>
    <button onclick=esercizio06()>arancione</button><br><br>
<?php 
for ($i=1; $i<=20; $i++) {
    printDiv("div generati","div", "giallo");
}
?>
<script src="script.js?ver=1.0.1"></script>
</body>
</html>
