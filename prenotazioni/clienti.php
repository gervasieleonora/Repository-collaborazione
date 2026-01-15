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
    //inizializza la connessione al database
    $databaseHost = 'localhost';
    $databaseName = 'prenotazioni';
    $databaseUsername = 'root';
    $databasePassword = '';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    //verifica la connessione
    if (!$mysqli) {
	    die("Connection failed: " . mysqli_connect_error());
    }


    $query = 'SELECT DISTINCT regioni.regione AS Regione, regioni.area_geografica AS Area_Geografica, clienti.nome, clienti.cognome
    FROM  regioni INNER JOIN citta ON regioni.id_regione = citta.regione
    INNER JOIN clienti ON citta.id_citta = clienti.citta';
    $result = mysqli_query($mysqli, $query);


    //ciclo sulle righe restituite e stampo risultato
    while ($row = mysqli_fetch_assoc($result)) {
	    echo '<div><h2>' .' ' . $row['Arrivo'] . '</h2>' . 
        '<p>Nome: ' . $row['nome'] . '</br>
        Cognome: ' . $row['cognome'] . '</br>' . 'Citta:'. $row['Citta'] . '</br>Importo:' . $row['Importo'] . '</br>Caparra: ' . $row['Caparra'] . '</br> Saldo: </p>
        <p class="grassetto">' . $row['saldo'] . 
        '</div>';
    }

    ?>
</body>
</html>