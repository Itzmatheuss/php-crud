<?php
    require 'dbcon.php';
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do Aluno</h4>
                        <a href="student-create.php" class="btn btn-primary float-end">Adicionar Aluno</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-stiped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do Aluno</th>
                                    <th>Email do Aluno</th>
                                    <th>Telefone do Aluno</th>
                                    <th>Curso do Aluno</th>       
                                    <th>Ação</th>       
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query = "SELECT * FROM alunos";
                                $query_run = mysqli_query($con,$query);

                                if(mysqli_num_rows($query_run)>0){
                                    foreach($query_run as $alunos){
                                        ?>
                                        <tr>
                                            <td><?= $alunos['id'];?></td>
                                            <td><?= $alunos['nome'];?></td>
                                            <td><?= $alunos['email'];?></td>
                                            <td><?= $alunos['telefone'];?></td>
                                            <td><?= $alunos['curso'];?></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">Info</a>
                                                <a href="studen-edit.php?id<?=$alunos['id'];?>" class="btn btn-success btn-sm">Editar</a>
                                                <a href="" class="btn btn-danger btn-sm">Apagar</a>
                                            </td>
                                         </tr>
                                        <?php
                                       
                                    }
                                }else{
                                        echo "<h5>Nenhum dado encontrado</h5>";
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

