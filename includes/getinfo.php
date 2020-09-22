<?php
    
    
    class DBController{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "database";
        protected $conn;
        
        function __construct(){
            $this->conn = $this->connectDB();
        }
        
        function connectDB(){
            $conn = new mysqli($this->host,$this->user,$this->password,$this->database);  
            if($conn->connect_error)  
            {
                die("<div class=\"alert alert-danger\" role=\"alert\">Database Connection Error !". $conn->connect_error."</div>"); 
            }
            $conn->query("SET CHARACTER SET utf8");
            $conn->query("SET SESSION collation_connection ='utf8_general_ci'");
            return $conn;
        }
        
        function insert($table_name, $data){  
            $sql = "INSERT INTO ".$table_name." (";            
            $sql .= implode(",", array_keys($data)) . ') VALUES (';            
            $sql .= "'" . implode("','", array_values($data)) . "')";  
            if($this->conn->query($sql) === TRUE)  
            {  
                return true;  
            }  
            else  
            {  
                echo "Error: " . $sql . "<br>" . $this->conn->error;;  
            }  
        } 
        
        function runQuery($query){
            $result = $this->conn->query($query);
            while($row=mysqli_fetch_assoc($result)) {
                $resultset[] = $row;
            }       
            if(!empty($resultset))
            {
                return $resultset;
            }
            else {
                return array();
            }
        }
        
        function numRows($query) {
            $result = $this->conn->query($query);
            $rowcount = $result->num_rows;
            return $rowcount;   
        }
        
        function executeUpdate($query) {
            $result = $this->conn->query($query);        
            return $result;     
        }
        function __destruct() {
            $this->conn->close();
            //echo "Destuctor Called";
        }
    }
    
    
?>