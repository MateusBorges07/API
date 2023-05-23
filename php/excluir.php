<?php
//incluir a conexao

include("conexao.php");

//Obter dados

$obterDados  = file_get_contents("php://input");
//extrair dados do json
$extrair = json_decode($obterDados);
//Separar os dados do JSON
$idCurso = $extrair->cursos->idCurso;


//SQL
$sql = "DELETE FROM cursos WHERE idCurso='$idCurso'";

$mysqli_query($conexao, $sql);
//exportar os dados cadastrados


?>