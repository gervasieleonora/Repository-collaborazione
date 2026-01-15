<?php
require_once ('../lib/library.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Regioni</title>
</head>
<body>
    <h1>Regioni</h1>
    <?php
    //inizializza la connessione al database
    $dbconnection = connect_database('prenotazioni');

    //esegui una query di esempio

    $query = 'SELECT regioni.regione AS Regione, prenotazioni.id_prenotazione AS Numero_prenotazioni, prenotazioni.importo AS Importo, prenotazioni.caparra AS Caparra, (prenotazioni.importo - prenotazioni.caparra) AS saldo
    FROM regioni INNER JOIN citta ON regioni.id_regione = citta.regione
    INNER JOIN clienti ON citta.id_citta = clienti.citta
    INNER JOIN prenotazioni ON clienti.id_cliente = prenotazioni.cliente';

    $result = mysqli_query($dbconnection, $query);

    //ciclo sulle righe restituite e stampo risultato
    while ($row = mysqli_fetch_assoc($result)) {
	    echo '<div><h2>Data di arrivo:' .' ' . $row['Arrivo'] . '</h2>' . 
        '<p>Nome: ' . $row['nome'] . '</br>
        Cognome: ' . $row['cognome'] . '</br>' . 'Citta:'. $row['Citta'] . '</br>Importo:' . $row['Importo'] . '</br>Caparra: ' . $row['Caparra'] . '</br> Saldo: </p>
        <p class="grassetto">' . round($row['saldo']) . 
        '</div>';
    }

    ?>
</body>
</html>