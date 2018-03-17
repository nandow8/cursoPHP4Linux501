<?php

namespace DAO;

use Lib\Db\Conexao;
use PDO;
use Model\Usuario;

class UsuariosDAO {

    private $con = null;

    public function __construct() {
        $this->con = Conexao::getInstance();
    }

    public function all() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->con->query($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insert(array $dados) {
        try {
            $this->con->beginTransaction();
            $sql = "INSERT INTO usuarios(usuario,senha) VALUES(:user,:pass)";
            $stmt = $this->con->prepare($sql);
            $params = [
                ':user' => $dados['usuario'],
                ':pass' => $dados['senha']
            ];
            $stmt->execute($params);
            $this->con->commit();
        } catch (PDOException $e) {
            $this->con->rollback();
            echo "Erro: " . $e->getMessage();
        }
    }

    public function update($usuario) {
        try {
            var_dump($usuario);
            die;
            $this->con->beginTransaction();

            $sql = "UPDATE usuarios SET usuario=:usuario, senha=:senha WHERE id = :id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(":usuario", $usuario->getUsuario());
            $stmt->bindValue(":senha", $usuario->getSenha());
            $stmt->bindValue(":id", $usuario->getId());

            $stmt->execute();

            $this->con->commit();
        } CATCH (PDOException $e) {
            $dbPostgres->rollback();
            echo "Erro: " . $e->getMessage();
        }
    }

    public function find($id) {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $this->con->prepare($sql);

        $stmt->bindValue(":id", $id);
        $stmt->execute();

        $item = $stmt->fetch(PDO::FETCH_ASSOC);

        //return $item;
        return $item;
    }

}
