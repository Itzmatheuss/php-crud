<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student CRUD</title>
    <style>
        body{
            background-color: bisque;
        }
    </style>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('mensagem.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Alunos registrados
                            <a href="student-create.php" class="btn btn-primary float-end">Adicionar Aluno</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do Aluno</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Curso</th>
                                    <th>Edições</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM alunos";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $aluno)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $aluno['id']; ?></td>
                                                <td><?= $aluno['nome']; ?></td>
                                                <td><?= $aluno['email']; ?></td>
                                                <td><?= $aluno['telefone']; ?></td>
                                                <td><?= $aluno['curso']; ?></td>
                                                <td>
                                                    <a href="student-view.php?id=<?= $aluno['id']; ?>" class="btn btn-info btn-sm">Visualizar</a>
                                                    <a href="student-edit.php?id=<?= $aluno['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="deletar_aluno" value="<?=$aluno['id'];?>" class="btn btn-danger btn-sm">Deletar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>