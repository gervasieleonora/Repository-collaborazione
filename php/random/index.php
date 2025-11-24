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
    
    for ($i=0; $i < 19; $i++) :
        if ($i % 2 == 0) 
            echo "<div class='pari'>questo è un div pari</div>";
        else
            echo "<div class='dispari'>questo è un div dispari</div>";
    endfor;
        ?>

</body>
</html>