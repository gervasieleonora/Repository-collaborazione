<?php
function printDiv($contenuto = " ", $class1 = " ", $class2 = "") {
    echo "<div class='$class1 $class2'>$contenuto</div>";
}


function tantiDiv($n_minimo, $n_massimo, $class1=" ", $class2=" ") {
    $min= $n_minimo;
    $max= $n_massimo;
    $casuale = rand($min, $max);
    for ($i=1; $i<=$casuale; $i++){
        printDiv('div generato', $class1, $class2);
    } 
}
?>