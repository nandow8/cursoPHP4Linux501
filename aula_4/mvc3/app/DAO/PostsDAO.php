<?php
 
namespace DAO;

use DAO\Conexao;
use PDO;
 
class PostsDAO {
    private $con = null;
    
    public function __construct(){
        $this->con = Conexao::getInstance();
    }
     
    public function all(){ 
            $sql = "SELECT * FROM posts";
            
            $stmt = $this->con->query($sql);
            $stmt->execute();
            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $posts = [];
            
            foreach($result as $item){
                $posts[] = new Usuario($item['usuario'], $item['senha'],$item['id']);
            }
            //return $result; 
             return posts; 
    } 
    
}
