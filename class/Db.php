<?php
class Db{
        private $host = "localhost";
        private $username = "root";
        private $password = "123456789";
        private $dbname ="2tstore";
        public $db;
        public function __construct(){
            try{
                $dsn = "mysql:host={$this->host};dbname={$this->dbname};";
                $option = array(PDO::ATTR_PERSISTENT);

                $this->db =  new PDO($dsn,$this->username,$this->password,$option);
        
                // return $pdo;
            }catch(PDOException $e){
                echo "ERROR: " . $e->getMessage();
            }

        }
}
?>