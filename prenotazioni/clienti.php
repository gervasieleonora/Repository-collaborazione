<?php
require_once ('../lib/library.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Clienti</title>
</head>
<body>
    <h1>Clienti</h1>
     <form method="get">
        <label for="regione">Seleziona la regione:</label>
        <select name="regione" id="regione">
            <option value="">Tutte</option>
            <option value="Abruzzo">Abruzzo</option>
            <option value="Basilicata">Basilicata</option>
            <option value="Calabria">Calabria</option>
            <option value="Campania">Campania</option>
            <option value="Emilia Romagna">Emilia Romagna</option>
            <option value="Friuli Venezia Giulia">Friuli Venezia Giulia</option>
            <option value="Lazio">Lazio</option>
            <option value="Liguria">Liguria</option>
            <option value="Marche">Marche</option>
            <option value="Molise">Molise</option>
            <option value="Piemonte">Piemonte</option>
            <option value="Puglia">Puglia</option>
            <option value="Sardegna">Sardegna</option>
            <option value="Sicilia">Sicilia</option>
            <option value="Toscana">Toscana</option>
            <option value="Trentino Alto Adige">Trentino Alto Adige</option>
            <option value="Umbria">Umbria</option>
            <option value="Valle d'Aosta">Valle d'Aosta</option>
            <option value="Veneto">Veneto</option>
            <option value="Lombardia">Lombardia</option>
        </select>
        <input type="submit" value="Inserisci">
    </form>
    <?php
    $regione = $_GET['regione'] ?? '';
    require_once ('../lib/library.php');
    //inizializza la connessione al database
    $db_connection = connect_database('prenotazioni');

    if ($db_connection === null) {
        echo 'Errore: connessione al database non riuscita';
        exit;
    }

    $query = 'SELECT DISTINCT regioni.regione AS Regione, regioni.area_geografica AS Area_Geografica, CONCAT(clienti.nome, " ", clienti.cognome) AS Nome, citta.citta
    FROM  regioni INNER JOIN citta ON regioni.id_regione = citta.regione
    INNER JOIN clienti ON citta.id_citta = clienti.citta
    WHERE regioni.regione LIKE \'%' . $regione . '%\'';

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