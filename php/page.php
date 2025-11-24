<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 id="titolo" >Pagina di prova</h1>
    <?php 
    for ($i=1; $i <= 15; $i++) { ?>
     <div class="ciclo">Questo è il div numero <?echo $i; ?></div>
    <?php
    }
    ?>
    <div class="chiusura">Questa è la fine della pagina</div>
</body>
</html>
