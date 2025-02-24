<?php
class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'gimnasio';
    private static $conn = null;

    public static function Connect() {
        if (self::$conn != null) {
            try {
                // self::$conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
                // self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                // self::$conn = new PDO("mysql:host=". self::$host . ";dbname=" . self::$database, self::$user, self::$password [
                //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                // ]);
                self::$conn = new PDO(
                    "mysql:host=" . self::$host . ";dbname=" . self::$database, 
                    self::$user, 
                    self::$password
                );
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
        }
        return self::$conn;
    }
}