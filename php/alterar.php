<?php
//incluir a conexao

include("conexao.php");

//Obter dados

$obterDados  = file_get_contents("php://input");
//extrair dados do json
$extrair = json_encode($obterDados);
//Separar os dados do JSON
$idCurso = $extrair->cursos->idCurso;
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCursos = $extrair->cursos ->  valorCursos;

//SQL
$sql = "UPDATE cursos SET valorCursos='$nomeCurso',valorCursos='$valorCursos WHERE idCurso=$idCurso";
$mysqli_query($conexao, $sql);
//exportar os dados cadastrados
$curso =[
    "idCurso" => $id,
    "nomeCurso" => $nomeCurso,
    "valorCursos" => $valorCursos
]
json_encode(['curso']=>$curso);

?>