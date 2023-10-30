<?php

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


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do Aluno 
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
                              
                                    <div class="mb-3">
                                        <label>Nome do Aluno</label>
                                        <p class="form-control">
                                            <?=$aluno['nome'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email do Aluno</label>
                                        <p class="form-control">
                                            <?=$aluno['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefone do Aluno</label>
                                        <p class="form-control">
                                            <?=$aluno['telefone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Curso do Aluno</label>
                                        <p class="form-control">
                                            <?=$aluno['curso'];?>
                                        </p>
                                    </div>
                                

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