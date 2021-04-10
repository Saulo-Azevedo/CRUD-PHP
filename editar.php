<?php

require 'class.php';

if(isset($_POST['id'],$_POST['nome'],$_POST['email'],$_POST['telefone'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $cadastro = Alteracao::Aluno($id,$nome,$email,$telefone);

    if ($cadastro) {
        header("Location: alunos.php");
    }else{
        header("Location: index.php");
    }

}else{
    header("Location: index.php");
}