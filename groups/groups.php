<?php
require_once ('../lib/library.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?ver=1.0.1">
</head>
<body>
    <div class="buttons">
        <button onclick=esercizio01()>primo rosso</button>
        <button onclick=esercizio02()>secondo rosso</button>
        <button onclick=esercizio07()>terzo rosso</button>
        <button onclick=esercizio03()>tutti rosso</button>
        <button onclick=esercizio04()>primo blu</button>
        <button onclick=esercizio05()>secondo blu</button>
        <button onclick=esercizio08()>terzo blu</button>
        <button onclick=esercizio06()>tutti blu</button>
        <button onclick=esercizio09()>primo giallo</button>
        <button onclick=esercizio10()>secondo giallo</button>
        <button onclick=esercizio11()>terzo giallo</button>
        <button onclick=esercizio12()>tutti giallo</button>
    </div>
    <h2>primo gruppo</h2>
    <?php
    tantiDiv(5, 10, "primo", "tutti");
    ?>
    <h2>secondo gruppo</h2>
    <?php
    tantiDiv(10, 15, "secondo", "tutti");
    ?>
    <h2>terzo gruppo</h2>
    <?php
    tantiDiv(5, 20, "terzo", "tutti");
    ?>
    <script src="script.js?ver=1.0.1S"></script>
</body>
</html>