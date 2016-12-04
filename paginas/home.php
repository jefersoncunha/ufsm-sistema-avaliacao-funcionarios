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
    			<div class="container">
        <?php
        session_start();
        if (isset($_SESSION['nome']) and isset($_SESSION['senha'])) { ?>
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                  <ul class="nav nav-tabs">
                      <li role="presentation" class="active" ><a href="home.php">Home</a></li>
                      <li role="presentation"><a href="avaliar.php">Avaliar</a></li>
                      <li role="presentation"><a href="meusFuncionario.php">Meus
                              Funcionarios</a></li>
                      <li role="presentation" ><a href="#">Cadastrar
                              Funcionarios</a></li>
                      <div  class="pull-right" style="margin-top: 10px; margin-right: 10px;">
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
                </div><!-- /.container-fluid -->
            </nav>
            <div class="panel-body">


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
          </div>
          <footer class="footer">
            <p class="copyrightFooter">Avaliação de funcionarios<a href="logout.php" class="pull-right">Sair</a> </p>
          </footer>
      </div>


        <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
        <script src="../js/jquery-3.1.1.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
