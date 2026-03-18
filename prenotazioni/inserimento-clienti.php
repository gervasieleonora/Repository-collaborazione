<?php
require_once ('../lib/library.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Inserimento clienti</title>
</head>
<body>
    <h1>Inserimento clienti</h1>

    <form method="get">
        <label for="">Nome</label>
        <input type="text" name="Nome" id="Nome" required>

        <label for="">Cognome</label>
        <input type="text" name="Cognome" id="Cognome" required>

        <label for="">Città</label>
        <input type="text" name="Citta" id="Citta" required>

        <input type="submit" name="Annulla" value="Annulla">
        <input type="submit" name="Salva" value="Salva">

    </form>

    <?php
    if (isset($_GET['Annulla'])) {
        $nome = "";
        $cognome = "";
        $citta = "";
    } else if (isset($_GET['Salva'])){
        // Altrimenti, elabora i dati (es. pulisci gli spazi bianchi)
        $nome = trim($_GET['Nome'] ?? '');
        $cognome = trim($_GET['Cognome'] ?? '');
        $citta = trim($_GET['Citta'] ?? '');
        //inizializza la connessione al database
        $dbconnection = connect_database('prenotazioni');
    
        //esegui una query di esempio
        $query = "INSERT INTO clienti (nome, cognome, citta) VALUES ('" . $nome . "', '" . $cognome . "', '" . $citta . "')";
        $result = mysqli_query($dbconnection, $query);
        echo '<h2>Inserimento completato</h2>';
    }


    mysqli_close($dbconnection);
    ?>
</body>
</html>