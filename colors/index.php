<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Colori</h1>
    <?php
    $num_div = rand(5, 30);
    for($i=1; $i <= $num_div; $i++)
        echo "<div class='casuale'>div</div>";
    ?>
    <div class="finale">fine pagina</div>
</body>
</html>