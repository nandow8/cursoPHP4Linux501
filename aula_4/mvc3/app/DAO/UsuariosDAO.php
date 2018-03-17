<?php
 
namespace DAO;

use DAO\Conexao;
use PDO;
 
class UsuariosDAO {
     private $con = null;
    
    public function __construct(){
        $this->con = Conexao::getInstance();
    }
     
    public function all(){ 
            $sql = "SELECT * FROM usuarios";
            
            $stmt = $this->con->query($sql);
            $stmt->execute();
            
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
             
            //return $result; 
             return $usuarios; 
    } 
    
}
