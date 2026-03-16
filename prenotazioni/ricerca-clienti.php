<?php
require_once ('../lib/library.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Ricerca clienti</title>
</head>
<body>
    <h1>Ricerca clienti</h1>

    <!-- fare form per inserire la regione -->
    <form method="get">
        <label for="">Cliente:</label>
        <input type="text" name="cliente" id="cliente" required>
        
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
            <option value="Valle d Aosta">Valle d'Aosta</option>
            <option value="Veneto">Veneto</option>
            <option value="Lombardia">Lombardia</option>
        </select>
    
        <input type="submit" value="Cerca">
    </form>
    


    <?php
    $cliente = $_GET['cliente'] ?? '';
    $regione = $_GET['regione'] ?? '';
    //inizializza la connessione al database
    $dbconnection = connect_database('prenotazioni');
    //esegui una query di esempio
    $query = "SELECT clienti.nome as Nome, clienti.cognome as Cognome
    FROM regioni INNER JOIN citta ON regioni.ID_regione = citta.regione INNER JOIN clienti ON citta.id_citta = clienti.citta
    WHERE clienti.nome LIKE '%" . $cliente . "%'" . "AND regioni.regione = '". $regione ."'";
    $result = mysqli_query($dbconnection, $query);


 while ($row = mysqli_fetch_assoc($result)) {
    echo '<div><h2>Cliente: ' . $row['Nome'] . ' ' . $row['Cognome'] . '</h2> </div>';
    }

    mysqli_close($dbconnection);
    ?>
</body>
</html>