<?php
session_start();
require 'dbcon.php';

if(isset($_POST['salvar_aluno'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $curso = mysqli_real_escape_string($con,$_POST['curso']);

    $query = "INSERT INTO alunos (nome, email, telefone, curso) VALUES ('$name','$email','$phone','$curso')";

    $query_run = mysqli_query($con,$query);

    if($query_run){

        $_SESSION['message'] = "Aluno Criado com Sucesso !";

        header("Location: student-create.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Não foi possivel criar o aluno !";

        header("Location: student-create.php");
        exit(0);
    }
}
?>