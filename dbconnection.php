<?php
class Dbconnection{

        private $host = 'localhost';
        private $db_name = 'praktyka';
        private $username = 'root';
        private $password = '';
        public $conn;
    
        public function getConnection() {
            $this->conn = null;
    
            try {
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            } catch(PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
    
            return $this->conn;
        }
    }
    ?>









<!-- 

    //    private $host = "localhost"; 
    //    private $database = "praktyka";
    //    private $username = "root";
    //    private $password = "";

    // private static ?PDO $connection = null;  

    // public static function connect(string $dsn, string $username, string $password): void  
    // {  
    //     if (self::$connection === null) {  
    //         self::$connection = new PDO($dsn, $username, $password);  
    //         self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    //     }  
    // }  

    // public static function getConnection(): PDO  
    // {  
    //     if (self::$connection === null) {  
    //         throw new Exception("Database connection not established.");  
    //     }  
    //     return self::$connection;  
    // }   -->

