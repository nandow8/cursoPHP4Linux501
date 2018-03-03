<?php

class Aluno{

    public $nome;

}

$nandao = new Aluno();

$nandao->nome = "nandao";

echo $nandao->nome;

$joao = clone $nandao;

$joao->nome = "joao";

echo $joao->nome;

echo $nandao->nome;