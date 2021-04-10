<?php

require 'class.php';

if(isset($_POST['nome'],$_POST['email'],$_POST['telefone'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $cadastro = Cadastro::Aluno($nome,$email,$telefone);

    if ($cadastro) {
        header("Location: alunos.php");
    }else{
        header("Location: index.php");
    }

}else{
    header("Location: index.php");
}