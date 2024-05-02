<?php
 
if($_FILES['foto']['size'] > 0){

    $conteudo = file_get_contents($_FILES['foto']['tmp_name']);
    
    
    $tipo = pathinfo($_FILES['foto']['tmp_name'], PATHINFO_EXTENSION);
    
   
    $foto = 'data:image/' . $tipo . ';base64,' . base64_encode($conteudo);
} else {
    $foto = "img/avatar-1.png";
}

if (isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $cargo = addslashes($_POST['cargo']);
    $endereco = addslashes($_POST['endereco']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $resumo = addslashes($_POST['resumo']);
} else{
    null;
}

if (isset($_POST['formacao-curso'])){
    $formacoes = array(
        'cursos' => $_POST['formacao-curso'],
        'instituicoes' => $_POST['formacao-instituicao'],
        'conclusoes' => $_POST['formacao-conclusao']
    );
    } else {
        $formacoes = array(
            'cursos' => null
        );
    }

if (isset($_POST['experiencia-cargo'])){
    $experiencias = array(
        'cargos' => $_POST['experiencia-cargo'],
        'empresas' => $_POST['experiencia-empresa'],
        'inicios' =>  $_POST['experiencia-inicio'],
        'fins' =>  $_POST['experiencia-fim']
    );
} else{
    $experiencias = array(
        'cargos' => null
    );
}



require_once("modelos/modernoPreto.php");
?>