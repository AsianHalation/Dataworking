<?php 

class DB {
    private $dbh; // database connectie
    protected $stmt; // dit is het huidige statement

    public function __construct($db, $host = "localhost:3307", $user = "root")
    {
        try {
            $this->dbh = new PDO("mysql:host=$host;dbname=$db", $user);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected to $db succesfully";
            session_start();
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function run($sql, $args = NULL)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}

//database aanmaken
$db = new DB('ledelidb');

?>