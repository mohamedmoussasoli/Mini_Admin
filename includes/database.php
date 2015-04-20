<?php
    
    class Database {
        
        private $conn; // database connection object
        private $dsn = "mysql:host=localhost;dbname=task5";
        private $username = "root";
        private $password = "root";
        
        private $query; //database query object
        
        public function __construct () { // when the object is created connect to the database automatically using the the connection function
            $this->connect($this->dsn);
        }
        
        private function connect ($dsn) { // database connection function
            try{
                $this->conn = new PDO ($dsn,$this->username,$this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            }catch(PDOException $e) {
                die ($e->getMessage);
            }
        }
        
        public function query ($sql) { // sql using query method
            $this->query = $this->conn->query($sql);
            return $this->query;
        }
        
        public function exec ($sql) { // sql using exec method
            $this->query = $this->conn->exec($sql);
            return $this->query;
        }
        
        public function prepare ($sql) { // sql using prepare method
            $this->query = $this->conn->prepare($sql);
            return $this->query;
        }
        
        public function bind_param ($placeholder,$value,$param_constant = null) { //bindParam method for prepare statement
            $this->query->bindParam($placeholder,$value,$param_constant);
        }
        
        public function bind_value ($placeholder,$value,$param_constant = null) { //bindValue method for prepare statement
            $this->query->bindValue($placeholder,$value,$param_constant);
        }
        
        public function bind_column ($column,$var) { //bindColumn method to assign column value to a variable 
            $this->query->bindColumn($column,$var);
        }
            
        public function execute () { // execute method for prepare method
            $this->query->execute();
        }
        
        public function quick_prepare ($sql,$array = array()) {
            $this->query = $this->conn->prepare($sql);
            $this->query->execute($array);
        }
        
        public function select_row ($sql,$array) { // selecting row from a table
            $this->quick_prepare($sql,$array);
            return $this->fetch();
        }
        
        public function row_count () { // return number of affected rows 
            return $this->query->rowCount();
        }
        
        public function last_insert_id(){ // return the last inserted id 
            return $this->conn->lastInsertId();
        }       
        
        public function fetch ($fetch_method = PDO::FETCH_ASSOC) { // fetch a row from a table based on (pdo fetch method)
            return $this->query->fetch($fetch_method);
        }
        
        public function fetch_column ($index) { // fetch a column from a table
            return $this->query->fetchColumn($index);
        }
        
        
        public function fetch_all ($fetch_all_method = PDO::FETCH_ASSOC) { // fetching all data from database
            return $this->query->fetchAll($fetch_all_method);  
        }
        
        
        public function close () { // close connection
            $this->conn = null;
        }
        
    }
    

    
    
    $database = new Database();
    
    
    
?>