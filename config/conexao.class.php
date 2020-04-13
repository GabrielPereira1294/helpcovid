<?php
class conexao {
    private $conn;
    function getConnect(){
        // tratamento de exceção
        try {
            //pdo = php data object - objeto de acesso aos dados
            
            $this->conn = new PDO("mysql:host=localhost;
                                   port=3306;
                                   dbname=helpcovid",
                                   "root","");
            
        } catch (Exception $ex){
            echo 'Erro:'.$ex->getMessage();
            
        }  catch (PDOException $ex){
            echo 'Erro:'.$ex->getMessage();
        }
            
        return $this->conn;
    }
    
    function closeConnect() {
        
        if($this->conn != null){
            $this->conn = null;
        }
    }
}

?>