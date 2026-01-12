<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio Clienti</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Clienti:</h1>
    <?php
    //inizializza la connessione al database
    $databaseHost = 'localhost';
    $databaseName = 'cescot';
    $databaseUsername = 'root';
    $databasePassword = '';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    //verifica la connessione
    if (!$mysqli) {
	    die("Connection failed: " . mysqli_connect_error());
    }

    //esegui una query di esempio
    $query = 'SELECT * FROM clienti';

    $result = mysqli_query($mysqli, $query);

    //ciclo sulle righe restituite e stampo risultato
    while ($row = mysqli_fetch_assoc($result)) {
	    echo '<div><h2>' . $row['id'] . '</h2>' . '<p>' . $row['nome'] . ' ' . $row['cognome'] . '</p></div>';
    }

    ?>
</body>
</html>