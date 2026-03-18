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
        <input type="text" name="Nome" id="Nome">

        <label for="">Cognome</label>
        <input type="text" name="Cognome" id="Cognome">

        <label for="">Città</label>
        <input type="text" name="Citta" id="Citta">

        <input type="submit" value="Annulla">
        <input type="submit" value="Salva">

    </form>

    

 
</body>
</html>