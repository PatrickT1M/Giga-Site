<?php
require_once ("../conexao/conexao.php");

$nome = $_GET['nome'];
$depoimento = $_GET['depoimento'];
$curso = $_GET['curso'];

$consultar = ("INSERT INTO `depoimento`(`nome`, `curso`, `depoimento`) VALUES ('$nome', '$curso', '$depoimento')");
$retornar = mysqli_query($mysqli, $consultar);

if($retornar){
    header('location: ../index.php');
    echo ("enviado com sucesso");
}else{
    echo ("Não foi enviado");
}
?>