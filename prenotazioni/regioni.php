<?php
require_once ('../lib/library.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Regioni</title>
</head>
<body>
    <h1>Regioni</h1>
    <?php
    //inizializza la connessione al database
    $dbconnection = connect_database('prenotazioni');

    //esegui una query di esempio

    $query = 'SELECT regioni.regione, COUNT(prenotazioni.ID_prenotazione) as numero_prenotazioni, ROUND(SUM(prenotazioni.importo),2) as Importo_delle_prenotazioni, ROUND(SUM(prenotazioni.importo-prenotazioni.caparra),2) as Saldo
                FROM regioni INNER JOIN citta on regioni.ID_regione = citta.regione
                INNER JOIN clienti on citta.id_citta = clienti.citta
                INNER JOIN prenotazioni on clienti.ID_cliente = prenotazioni.cliente
                GROUP BY regioni.regione';

    $result = mysqli_query($dbconnection, $query);

    //ciclo sulle righe restituite e stampo risultato
    while ($row = mysqli_fetch_assoc($result)) {
	    echo '<div><h2>Regione: ' . $row['regione'] . '</h2>' . 
        '<p>Numero prenotazioni: ' . $row['numero_prenotazioni'] . '</br>
        Somma degli importi: ' . $row['Importo_delle_prenotazioni'] . '</br>' . 
        'Saldo delle prenotazioni:' . '<strong>'.($row['Saldo']) . '</strong>'. 
        '</div>';
    }

    ?>
</body>
</html>