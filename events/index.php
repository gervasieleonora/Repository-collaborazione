<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Eventi JavaScript</h1>
    <button onclick=esercizio01()>colora</button> <br> <br>
<?php 
for ($i=0; $i<20; $i++) {
    printDiv("giallo");
}

?>
<script src="script.js"></script>
</body>
</html>

<?php 
function printDiv($classe) {
    echo "<div class='$classe'>div generato</div>";
}
?>