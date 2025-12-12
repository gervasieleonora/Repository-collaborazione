<?php
require_once ('../lib/library.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Contenuti a caso!</h1>
    <?php 
    $volte= rand(10,30);
    for ($i=1; $i<=$volte; $i++) {
        if ($i % 2 ==0) {
            printDiv('io sono pari','pari');
        } else {
            printDiv('io sono dispari','dispari');
        }
    }
    ?>
    <div class="finale">fine pagina</div>
</body>
</html>