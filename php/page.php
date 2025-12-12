<?php
require_once ('../lib/library.php');
?>
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
     <div class="ciclo">Questo è il div numero <?php echo $i; ?></div>
    <?php
    }
    printDiv("Questo è un div stampato con la funzione","chiusura"," ");
    ?>
</body>
</html>
