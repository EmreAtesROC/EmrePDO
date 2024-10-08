<?php
if (!isset($_GET['id'])) {
    header("Location:select.php");
}
try {
    require "db.php";
    $db = new Database();
    $db->deleteProduct($_GET['id']);
    Header("Location:select.php");
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>