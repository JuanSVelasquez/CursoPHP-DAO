<?php 

class Sql extends PDO{

    private $conn;

    public function __construct(){
        $this->conn = new PDO("sqlsrv:Database=php;server=localhost\SQLSERVER;ConnectionPooling=0","sa","0000");
    }
    
    private function setParams($statment, $parameters = array()){
        foreach ($parameters as $key => $value) {
            $this->setParam($key, $value);

        }
    }

    private function setParam($statment,$key,$value){
        $statment->bindParam($key,$value);
    }

    public function exequery($rawQuery, $params=array()){
        $stmt=$this->conn->prepare($rawQuery);
        $this->setParams($stmt,$params);
        $stmt->execute();
        return $stmt;
    }
    
    public function select($rawQuery,$params = array()):array{
        $stmt=$this->exequery($rawQuery, $params);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
}
?>