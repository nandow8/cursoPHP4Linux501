<?php
 
require 'autoload.php';

use Model\Usuario\Usuario;
use DAO\UsuarioDAO\UsuarioDAO;

$nando = new Usuario('nanananan', '2332');
$nando->save();
echo "<pre>";
var_dump($nando);

$dao = new UsuarioDAO();
//$dao->insert($nando);

//print_r($dao->all());


//print_r($dao->find(2));
//print_r($dao->delete2(10));
//print_r($dao->delete($nando));

//$nandao = $dao->find(2); 
//echo $nandao->getUsuario();

 //print_r(Usuario::all());

//print_r(Usuario::find(5));

//print_r(Usuario::remove2(7));
 //print_r(Usuario::remove($nando));

 

 