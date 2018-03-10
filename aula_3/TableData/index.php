<?php
 
require 'autoload.php';

use Model\Usuario\Usuario;
use DAO\UsuarioDAO\UsuarioDAO;

$nando = new Usuario('Franciele', '6541');
echo "<pre>";
var_dump($nando);

$dao = new UsuarioDAO();
$dao->insert($nando);