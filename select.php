<?php
require "db.php";
$db = new Database();
$producten = $db->selectProduct();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Productnaam</th>
                    <th>Prijs</th>
                    <th colspan="2">Acties</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach ($producten as $product) {
                    echo "<tr>";
                    echo "<td> " . $product['id'] . "</td>";
                    echo "<td> " . $product['productNaam'] . "</td>";
                    echo "<td> " . $product['prijs'] . "</td>";
                    echo "<td> <a class='btn btn-primary' href='update.php?id=".$product['id']."&name=".$product['productNaam']."'>Edit</a></td>";
                    echo "<td> <a class='btn btn-danger' href='delete.php?id=".$product['id']."'>Delete</a></td>";        
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
</body>
</html>