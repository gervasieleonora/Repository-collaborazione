<?php
require_once ('../lib/library.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Prenotazioni</title>
</head>
<body>
    <h1>Prenotazioni</h1>
    <?php
    require_once ('../lib/library.php');
    //inizializza la connessione al database
    $db_connection = connect_database('prenotazioni');

    if ($db_connection === null) {
        echo 'Errore: connessione al database non riuscita';
        exit;
    }

    $query = 'SELECT DISTINCT regioni.regione AS Regione, regioni.area_geografica AS Area_Geografica, CONCAT(clienti.nome, " ", clienti.cognome) AS Nome, citta.citta
    FROM  regioni INNER JOIN citta ON regioni.id_regione = citta.regione
    INNER JOIN clienti ON citta.id_citta = clienti.citta';
    $result = mysqli_query($db_connection, $query);


    //ciclo sulle righe restituite e stampo risultato
    while ($row = mysqli_fetch_assoc($result)) {
	    echo '<div><h2>'.$row['Nome'] . '</h2>' . 
        '<p>Regione: ' . $row['Regione'] . '</br>
        Area geografica: ' . $row['Area_Geografica'] . '</br>
        Citta: '. $row['citta'] . '</p></div>';
    }
    ?>
</body>
</html>