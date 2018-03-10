<?php

require 'conexao.php';

//$sql = "insert into usuarios(usuario,senha)values('nandao','321')";

//$dbPostgres->exec($sql);

/*
//select

$sql = "SELECT * FROM usuarios";

$result = $dbPostgres->query($sql);
$usuarios = $result->fetchALL(PDO::FETCH_ASSOC);

echo $usuarios[0]['usuario'];
echo "<pre>";
print_r($usuarios);
*/


//transação

/*
try{

    $dbPostgres->beginTransaction();

    $sql = "insert into usuarios(usuario,senha)values('nandao','321')";
    $dbPostgres->exec($sql);

    $dbPostgres->commit();
}CATCH(PDOException $e){
    $dbPostgres->rollback();
    echo "Erro: " . $e->getMessage();
}
*/

//prepare statement      proteje injeção sql