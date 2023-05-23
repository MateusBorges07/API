<?php
//incluir a conexao

include("conexao.php");

//sql

$sql = "SELECT * FROM  cursos";

//execurtar
$executar = mysqli_query($conexao, $sql);

   
//vetor
$cursos= [];
//indice
$indice = 0;
//laço
while ($linha = mysqli_fetch_assoc($executar)){
    $cursos[$indice]['idCursos']=   $linha['idCursos'];
    $cursos[$indice]['nomeCurso']=   $linha['nomeCurso'];
    $cursos[$indice]['valorCurso']=   $linha['valorCurso'];
    $indice++;
}

//Json
json_encode(['cursos'=>$cursos]);

var_dump($cursos);

?>