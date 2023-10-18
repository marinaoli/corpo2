<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "corpo1";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

$FRATURAS = isset($_POST["FRATURAS"]) ? "1" : "0";
var_dump($FRATURAS);

$LUXACOES = isset($_POST["LUXACOES"]) ? "1" : "0";
var_dump($LUXACOES);

$ENTORSES = isset($_POST["ENTORSES"]) ? "1" : "0";
var_dump($ENTORSES);

$FERIMENTODIVERSOS = isset($_POST["FERIMENTODIVERSOS"]) ? "1" : "0";
var_dump($FERIMENTODIVERSOS);

$HEMORRAGIA = isset($_POST["HEMORRAGIA"]) ? "1" : "0";
var_dump($HEMORRAGIA);

$EVISCERAÇÃO = isset($_POST["EVISCERAÇÃO"]) ? "1" : "0";
var_dump($EVISCERAÇÃO);

$ = isset($_POST[""]) ? "1" : "0";
var_dump($);

$ = isset($_POST[""]) ? "1" : "0";
var_dump($);

$ = isset($_POST[""]) ? "1" : "0";
var_dump($);

$ = isset($_POST[""]) ? "1" : "0";
var_dump($);

$ = isset($_POST[""]) ? "1" : "0";
var_dump($);

