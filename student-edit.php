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

    <title>Editar Aluno</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('mensagem.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editando Aluno 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $aluno_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM alunos WHERE id='$aluno_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $aluno = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">


                                    <input type="hidden" name="aluno_id" value="<?= $aluno['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nome do Aluno</label>
                                        <input type="text" name="nome" value="<?=$aluno['nome'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email do Aluno</label>
                                        <input type="email" name="email" value="<?=$aluno['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefone do Aluno</label>
                                        <input type="text" name="telefone" value="<?=$aluno['telefone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Curso do Aluno</label>
                                        <input type="text" name="curso" value="<?=$aluno['curso'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="atualizar_aluno" class="btn btn-primary">
                                            Atualizar Aluno
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>Id não encontrado</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>