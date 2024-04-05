<?php

include "../db/db.php";

$db = new DB('ledelidb');

class Klant {
    public $klant_id;
    public $klant_naam;
    public $email;
    public $wachtwoord;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klant_naam = $_POST['klant_naam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    // Wachtwoord hashen voordat het wordt opgeslagen in de database
    $hashed_wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Klanten (klant_naam, email, wachtwoord) VALUES (?, ?, ?)";
    $args = [$klant_naam, $email, $hashed_wachtwoord]; // Gebruik het gehashde wachtwoord
    $db->run($sql, $args);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Klant Toevoegen</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../product/insert-product.php">Producten</a></li>
            <li><a href="../tafel/insert-tafel.php">Tafels</a></li>
            <li><a href="../reservering/insert-reservering.php">Reserveringen</a></li>
            <li><a href="../rekening/insert-rekening.php">Rekeningen</a></li>
            <li><a href="../klant/insert-klant.php">Klanten</a></li>
        </ul>
    </nav>

    <h2>Klant Toevoegen</h2>
    <form method="POST">
        <input type="text" id="klant_naam" name="klant_naam" placeholder="Naam"><br>
        <input type="text" id="email" name="email" placeholder="E-mail"><br>
        <input type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>