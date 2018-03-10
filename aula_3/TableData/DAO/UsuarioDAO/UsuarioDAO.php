<?php

namespace DAO\UsuarioDAO;

use DAO\Conexao\Conexao;
use PDO;
use Model\Usuario\Usuario;


class UsuarioDAO{

    private $con = null;

    public function __construct(){
        $this->con = Conexao::getInstance();
    }

    public function insert(Usuario $usuario){ 

        try{

            $this->con->beginTransaction();
 
                $sql = "insert into usuarios(usuario,senha)values(:user, :pass)";
                $stmt = $this->con->prepare($sql);

                $stmt->bindValue(":user", $usuario->getUsuario());
                $stmt->bindValue(":pass", $usuario->getSenha());

                $stmt->execute();

            $this->con->commit();
        }CATCH(PDOException $e){
            $dbPostgres->rollback();
            echo "Erro: " . $e->getMessage();
        }
    }

}

