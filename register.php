<?php

require "db.php";

if (isset($_POST['submit'])) {
    $email = $_POST['mail'];
    $password = $_POST['wachtwoord'];
    $db = new Database();
    $db->registerUser($email, $password);
    echo "Registratie gelukt!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<style>
    .formulier {
        display: flex;
        flex-direction: column;
    max-width: 500px;
    margin: 50px auto;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 10px;
    }

    img {
        width: 25%;
    }

</style>
<body>

<div class="formulier">
<img src="register.png" alt="foto">
<h1>Registreren</h1>
<form method="POST">
    <input type="email" name="mail" placeholder="E-mailadres" required><br>
    <input type="password" name="wachtwoord" placeholder="Wachtwoord" required><br>
    <input type="submit" name="submit" value="Registeren">
</form>
</div>
</body>
</html>