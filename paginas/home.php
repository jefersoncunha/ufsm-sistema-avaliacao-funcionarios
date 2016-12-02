<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Bootstrap CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION['nome']) and isset($_SESSION['senha'])) {
            echo "Bem-Vindo ", $_SESSION['idA'];
            echo "<br><a href='logout.php'>Logout</a>";
            ?>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="col-md-12"> 
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#">Home</a></li>
                        <li role="presentation"><a href="avaliar.php">Avaliar</a></li>
                        <li role="presentation"><a href="meusFuncionario.php">Meus
                                Funcionarios</a></li>
                        <li role="presentation"><a href="addFuncionarios.php">Cadastrar
                                Funcionarios</a></li>

                        <div  class="pull-right">
                            <div class="btn-group" role="group">


                                <a class="dropdown-toggle" data-toggle="dropdown" >
                                    <div class="glyphicon glyphicon-user  ">
                                        <strong><?php echo $_SESSION['nome']; ?></strong>
                                    </div>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logoff</a></li>
                                </ul>                                        
                            </div>
                        </div>
                    </ul>


                </div>
                <?php
            } else {
                ?>
                <h1>
                    <div class="alert alert-info">
                        <strong>Erro Login!</strong> <a href="../index.php">Click aqui</a> para fazer login
                    </div>
                </h1>
                <?php
            }
            ?>


        </nav>
        <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
        <script src="../js/jquery-3.1.1.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
