<?php
//incluir a conexao

include("conexao.php");

//Obter dados

$obterDados  = file_get_contents("php://input");
//extrair dados do json
$extrair = json_decode($obterDados);
//Separar os dados do JSON
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCursos = $extrair->cursos ->  valorCursos;

//SQL
$sql = "INSERT INTO curso (nomeCurso, valorCurso) VALUES ('$nomeCurso', '$valorCur)";
mysqli_query($conexao, $sql);
//exportar os dados cadastrados
$curso =[
    "nomeCurso" => $nomeCurso,
    "valorCursos" => $valorCursos
];
json_encode(['curso' =>$curso]);

?>