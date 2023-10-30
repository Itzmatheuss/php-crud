<?php
session_start();
require 'dbcon.php';

if($_POST['deletar_aluno'])
{
    $aluno_id = mysqli_real_escape_string($con,$_POST['deletar_aluno']);

    $query = "DELETE FROM alunos WHERE id='$aluno_id'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['mensagem'] = "Aluno Deletado com Sucesso !";

        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION['mensagem'] = "Não foi possivel deletar o aluno !";

        header("Location: index.php");
        exit(0);
    }
}


if(isset($_POST['atualizar_aluno']))
    $aluno_id =mysqli_real_escape_string($con,$_POST['aluno_id']);
    $nome = mysqli_real_escape_string($con,$_POST['nome']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $telefone = mysqli_real_escape_string($con,$_POST['telefone']);
    $curso = mysqli_real_escape_string($con,$_POST['curso']);

    $query = "UPDATE alunos SET nome='$nome', email='$email', telefone='$telefone', curso='$curso' WHERE id='$aluno_id'";
    
    $query_run = mysqli_query($con,$query);

    if($query_run){
        $_SESSION['mensagem'] = "Aluno Atualizado com Sucesso !";

        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION['mensagem'] = "Não foi possivel atualizar o aluno !";

        header("Location: index.php");
        exit(0);
    }


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