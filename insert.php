<?php

include "index1.php";

if (isset($_POST["submit"])) {
    $product_naam = $_POST["product_naam"];
    $prijs_per_stuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];

    $database = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (?,?,?)";
    $result = $pdo->prepare($database);
    $placeholders = array($product_naam, $prijs_per_stuk, $omschrijving);
    $result->execute($placeholders);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert opdracht</title>
</head>
<body>

<form method="POST">
    <input type="text" name="product_naam" placeholder="Product naam">
    <input type="number" name="prijs_per_stuk" placeholder="Prijs per stuk">
    <input type="text" name="omschrijving" placeholder="Omschrijving">
    <input type="submit" name="submit" value="Toevoegen">
</form>
    
</body>
</html>