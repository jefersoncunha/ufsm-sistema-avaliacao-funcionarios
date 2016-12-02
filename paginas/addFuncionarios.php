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
       
        <nav class="navbar navbar-default navbar-fixed-top">
            <?php
            session_start();
            $nomeAdm = $_SESSION['nome'];
            $senhaAdm = $_SESSION['senha'];
            $_SESSION['idA'];
            if (isset($nomeAdm) and isset($senhaAdm)) {
                ?>
                <div class="col-md-12"> 

                    <ul class="nav nav-tabs">
                        <li role="presentation" ><a href="home.php">Home</a></li>
                        <li role="presentation"><a href="avaliar.php">Avaliar</a></li>
                        <li role="presentation"><a href="meusFuncionario.php">Meus
                                Funcionarios</a></li>
                        <li role="presentation" class="active"><a href="#">Cadastrar
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


                <form action="../dao/Controller.php" method="post">
                    <div class="col-lg-12">                    <!-- area de campos do form -->
                        <input type="hidden" name="operacao" value="cadastroFun">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="nome">Nome</label> 
                                <input type="text"class="form-control" id="nome" 
                                       name="nome" placeholder="Ex.Pedro">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="senha">Função</label> 
                                <input type="text"class="form-control" id="funcao" name="funcao" placeholder="Ex.Atendente">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="senha">Telefone</label>
                                <input type="text" class="form-control" id="fone" name="fone" placeholder="(99)9999-9999">
                            </div>
                        </div>
                        <div id="actions" class="form-group col-md-4">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" value="cadastroFun">Adicionar</button>
                                <a href="../index.php" class="btn btn-default">Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>

            </nav>
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
        
        <script src="../js/jquery-3.1.1.js"></script>
         <script src="../js/jquery-mask.js"></script>
        <script src="../js/bootstrap.min.js"></script>
                    <!-- jQuery mascara-->
        <script>
              $(document).ready(function () {
                $('#fone').mask("00000-0000");
              });
        </script>
    </body>
</html>
