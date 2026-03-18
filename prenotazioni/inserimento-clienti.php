<?php
require_once ('../lib/library.php');

$nome = '';
$cognome = '';
$citta = '';
$message = '';

if (isset($_GET['Annulla'])) {
    // Cancella i campi, non eseguire query
    $nome = '';
    $cognome = '';
    $citta = '';
} elseif (isset($_GET['Salva'])) {
    // Elabora i dati
    $nome = trim($_GET['Nome'] ?? '');
    $cognome = trim($_GET['Cognome'] ?? '');
    $citta = trim($_GET['Citta'] ?? '');

    if (!empty($nome) && !empty($cognome) && !empty($citta)) {
        // Inizializza la connessione al database
        $dbconnection = connect_database('prenotazioni');
        $conteggio = 0;
        // Prepara la query con escape per sicurezza
        $nome_escaped = mysqli_real_escape_string($dbconnection, $nome);
        $cognome_escaped = mysqli_real_escape_string($dbconnection, $cognome);
        $citta_escaped = mysqli_real_escape_string($dbconnection, $citta);

        $query = "INSERT INTO clienti (nome, cognome) VALUES ('$nome_escaped', '$cognome_escaped')";
        $result = mysqli_query($dbconnection, $query);
        $conteggio += 1;
        $query_2 = "INSERT INTO citta (citta) VALUES ('$citta_escaped')";
        $conteggio += 1;
        $result_2 = mysqli_query($dbconnection, $query_2);

        if ($conteggio == 2) {
            $message = '<h2>Inserimento completato</h2>';
            // Cancella i campi dopo l'inserimento
            $nome = '';
            $cognome = '';
            $citta = '';
        } else {
            $message = '<h2>Errore nell\'inserimento</h2>';
        }

        mysqli_close($dbconnection);
    } else {
        $message = '<h2>Tutti i campi sono obbligatori</h2>';
    }
}
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
        <label for="Nome">Nome</label>
        <input type="text" name="Nome" id="Nome" value="<?php echo htmlspecialchars($nome); ?>" required>

        <label for="Cognome">Cognome</label>
        <input type="text" name="Cognome" id="Cognome" value="<?php echo htmlspecialchars($cognome); ?>" required>

        <label for="Citta">Città</label>
        <input type="text" name="Citta" id="Citta" value="<?php echo htmlspecialchars($citta); ?>" required>

        <input type="submit" name="Annulla" value="Annulla">
        <input type="submit" name="Salva" value="Salva">
    </form>

    <?php echo $message; ?>
</body>
</html>