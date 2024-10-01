<?php
require "db.php";
$db = new Database();

if (isset($_POST["submit"])) {
    $productNaam = $_POST["productNaam"];
    $prijs= $_POST["prijs"];
    $db->insertProduct($productNaam, $prijs);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert formulier</title>
</head>
<body>

<form method="POST">
    <input type="text" name="productNaam" placeholder="Product naam">
    <input type="number" step=".01" name="prijs" placeholder="Prijs">
    <input type="submit" name="submit" value="Toevoegen">
</form>
    
</body>
</html>