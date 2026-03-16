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
        <input type="text" name="cliente" id="cliente">
        <label for="">Regione:</label>
        <input type="text" name="regione" id="regione">
        <input type="submit" value="Cerca">
    </form>
    

    <?php
    //inizializza la connessione al database
    $dbconnection = connect_database('prenotazioni');
    //esegui una query di esempio
    $query = 'SELECT DISTINCT prenotazioni.arrivo as Arrivo, clienti.nome, clienti.cognome,  citta.citta AS Citta, prenotazioni.importo AS Importo, prenotazioni.caparra AS Caparra, (prenotazioni.importo - prenotazioni.caparra) AS saldo 
    FROM citta INNER JOIN clienti ON citta.id_citta = clienti.citta
    INNER JOIN prenotazioni ON clienti.id_cliente = prenotazioni.cliente';

    $result = mysqli_query($dbconnection, $query);

  