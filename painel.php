<?php
    require_once 'cabecalho.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecomendaIA</title>
    <link rel="stylesheet" href="estilo.css">
    <script type="text/javascript" src="pace.min.js"></script>
   
</head>
<body>
    <div class="row">
        <div class="col-sm-12" id="navbar">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="menu">
                <div class="container-fluid">
                    <a class="navbar-brand" href="painel.php"><img src="https://img.icons8.com/color/24/000000/artificial-intelligence.png"/> RecomendaIA</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="painel.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php" id="logout"><?=$_SESSION['id']?>-logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="row container">
        <div class="col-sm-12">
            <h1>Lista de posts aqui</h1>
            <h1>TESTE</h1>
        </div>
    </div>


</body>
</html>

