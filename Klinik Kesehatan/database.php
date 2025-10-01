<?php
class Database {
    public $host = "localhost";
    private $db   = "klinik_kesehatan";
    private $user = "root";
    private $pass = "";
    private $pdo;

    public function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db}";
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Koneksi Berhasil"; 
        } catch(PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}
?>