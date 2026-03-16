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
        <label for="">Regione:</label>
        <input type="text" name="regione" id="regione" required>
        <input type="submit" value="Cerca">
    </form>
    


    <?php
    //inizializza la connessione al database
    $dbconnection = connect_database('prenotazioni');
    //esegui una query di esempio
    $query = 'SELECT DISTINCT clienti.nome as Nome, clienti.cognome as Cognome,
    FROM citta INNER JOIN clienti ON citta.id_citta = clienti.citta
    WHERE clienti.nome LIKE ' . "'%" . ($_GET['cliente'] ?? '') . "%'" . ' AND citta.regione LIKE ' . "'%" . ($_GET['regione'] ?? '') . "%'";
    $result = mysqli_query($dbconnection, $query);


 while ($row = mysqli_fetch_assoc($result)) {
    echo '<div><h2>Cliente: ' . $row['nome'] . ' ' . $row['cognome'] . '</h2> </div>';
    }
    ?>
</body>
</html>