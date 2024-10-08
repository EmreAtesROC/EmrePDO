<?php
require "db.php";
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db->updateProduct($_POST['productNaam'],$_POST['prijs'], $_GET['id']);
    if ($db) {
        header('Location:select.php?message=Product gewijzigd');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
        <h2>Update product</h2>
        <form method="POST" class="w-50">
            <div class="form-group">
                <input type="text" value="<?php echo $_GET['name'] ?>" name="productNaam" class="form-control" placeholder="Naam">
            </div>
            <br>
            <div class="form-group">

            <input type="number" name="prijs" class="form-control" name="prijs" placeholder="Prijs">
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Update">
        </form>
        </div>

    
</body>
</html>