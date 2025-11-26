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
    for($i=1; $i <= $num_div; $i++) {
        $rand_color = rand(1,4);
        if($rand_color == 1) {
            printDiv('n',"uno");        
        } else if ($rand_color == 2) {
            printDiv('n',"due");
        } else if ($rand_color == 3) {
            printDiv('n',"tre");
        } else {
            printDiv('n',"quattro");
        }

    }
    ?>
    <div class="finale">fine pagina</div>
</body>
</html>

<?php
function printDiv($nome, $class) {
    echo "<div class='$class'>$nome</div>";
}
?>