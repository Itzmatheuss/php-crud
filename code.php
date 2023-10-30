<?php
session_start();
require 'dbcon.php';

if(isset($_POST['salvar_aluno'])){
    $nome = mysqli_real_escape_string($con,$_POST['nome']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $telefone = mysqli_real_escape_string($con,$_POST['telefone']);
    $curso = mysqli_real_escape_string($con,$_POST['curso']);

    $query = "INSERT INTO alunos (nome, email, telefone, curso) VALUES ('$nome','$email','$telefone','$curso')";

    $query_run = mysqli_query($con,$query);

    if($query_run){

        $_SESSION['mensagem'] = "Aluno Criado com Sucesso !";

        header("Location: student-create.php");
        exit(0);
    }else{
        $_SESSION['mensagem'] = "Não foi possivel criar o aluno !";

        header("Location: student-create.php");
        exit(0);
    }
}
?>