<?php

require 'class.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $deletar = Delete::Aluno($id);

    if ($cadastro) {
        header("Location: alunos.php");
    }else{
        header("Location: alunos.php");
    }

}else{
    header("Location: alunos.php");
}