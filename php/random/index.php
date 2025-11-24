<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio</title>
    <link rel="stylesheet" href="style_<?php echo rand(1, 3)?>.css">
</head>
<body>
    <h1>Css casuali!</h1>
    <?php
    
    for ($i=1; $i <= 20; $i++) :
        if ($i % 2 == 0) 
            echo "<div class='dispari'>questo è un div dispari</div>";
        else
            echo "<div class='pari'>questo è un div pari</div>";
    endfor;
        ?>
<div class="chiusura">Questa è la fine della pagina</div>
</body>
</html>