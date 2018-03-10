<?php

//$dbMysql = new PDO("mysql:host=localhost;dbname=aula04", "nando", "nandow8");

$dbPostgres = new PDO("pgsql:host=localhost;dbname=aula04", "nandao", "nandao");

//var_dump($dbMysql);

$dbPostgres->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

var_dump($dbPostgres);

