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

/**
 * Funzione che connette php con il database
 * @param string $nome, prende in input il nome del database
 * @param string $host, nome dell'host di default "localhost"
 * @param string $user, prende in input l'user del database, di default "root"
 * @param string $password, prende in input la password del database, di default " "
 * @return mysqli non ritorna niente se non l'effettiva connessione al database 
 */
function connect_database($dbnome,$host= 'localhost', $username='root', $password='' ) {
    $mysqli = mysqli_connect($host, $username, $password, $dbnome);
    //verifica la connessione
    if (!$mysqli) {
	    die("Connection failed: " . mysqli_connect_error());
    }
    return $mysqli;
}
?>