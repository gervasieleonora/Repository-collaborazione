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
            echo "<div class='pari'>io sono pari</div>";
        } else {
            echo "<div class='dispari'>io sono dispari</div>";
        }
    }
    ?>
    <div class="finale">fine pagina</div>
</body>
</html>