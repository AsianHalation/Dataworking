<?php

include "../db/db.php";

$db = new DB('ledelidb');

class Reservering {
    public $reservering_id;
    public $klant_id;
    public $tafel_id;
    public $reserverings_datum;
    public $begin_tijd;
    public $eind_tijd;
}

$sql = "INSERT INTO Rekeningen (klant_id, product_id, aantal) VALUES (?, ?, ?)";
$args = [1, 1, 3]; // Vervang 1 door het klant_id en product_id, en pas het aantal aan indien nodig
$db->run($sql, $args);
?>