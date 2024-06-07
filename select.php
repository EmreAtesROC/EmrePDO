<?php
include "index.php";

$productensql = $pdo->query("SELECT * FROM producten");
$resultaat = $productensql->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "insert.php";
    ?>

    <table border=1>
        <tr>
            <th>ProductID</th>
            <th>Product naam</th>
            <th>Prijs</th>
            <th>Omschrijving</th>
        </tr>

        <?php
        foreach ($resultaat as $row) {
            echo "<tr>";
            echo "<td>" . $row["product_code"] . "</td>";
            echo "<td>" . $row["product_naam"] . "</td>";
            echo "<td>" . $row["prijs_per_stuk"] . "</td>";
            echo "<td>" . $row["omschrijving"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>