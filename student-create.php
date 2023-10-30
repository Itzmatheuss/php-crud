<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Criar Aluno</title>
    <style>
        body{
            background-color: bisque;
        }
    </style>
</head>
<body>
    <main class="container mt-5">

    <?php include('mensagem.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar Aluno
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            
                            <div class="mb-3">
                                <label for="nome">Nome do Aluno</label>
                                <input type="text" class="form-control"  name="nome">
                            </div>
                            <div class="mb-3">
                                <label for="email">Email do Aluno</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="telefone">Telefone do Aluno</label>
                                <input type="text" class="form-control" name="telefone">
                            </div>
                            <div class="mb-3">
                                <label for="curso">Curso do Aluno</label>
                                <input type="text" class="form-control" name="curso">
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" name="salvar_aluno" class="btn btn-primary">Salvar Aluno</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

