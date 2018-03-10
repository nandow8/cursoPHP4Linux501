<?php

require 'conexao.php';

try{

    $dbPostgres->beginTransaction();

    $dados = [
        'usuario' => 'jose',
        'senha'   => '555'
    ];
 
    $sql = "insert into usuarios(usuario,senha)values(:user, :pass)";
    $stmt = $dbPostgres->prepare($sql);

    $params = [
        ':user' => $dados['usuario'],
        ':pass' => $dados['senha']
    ];

    $stmt->execute($params);


    $dbPostgres->commit();
}CATCH(PDOException $e){
    $dbPostgres->rollback();
    echo "Erro: " . $e->getMessage();
}