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
        $nomeAdm = $_SESSION['nome'];
        $senhaAdm = $_SESSION['senha'];
        $idAdm = $_SESSION['idA'];

        if (isset($nomeAdm) and isset($senhaAdm)) {
        ?>

                <nav class="navbar navbar-default">
                    <ul class="nav nav-tabs">
                        <li role="presentation" ><a href="home.php">Home</a></li>
                        <li role="presentation" class="active"><a href="#">Avaliar</a></li>
                        <li role="presentation" ><a href="meusFuncionario.php">Meus
                                Funcionarios</a></li>
                        <li role="presentation" ><a href="addFuncionarios.php">Cadastrar
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
                </nav>


                <div class="panel-body" style="background-color: #f5f5f5;">
                    <?php
                    include '../dao/AdministradorDAO.php';
                    include '../dao/FuncionarioDAO.php';

                    $adm = new administrador();
                    $id = null;


                    $func = new funcionario();

                        $res = $func->mostrar($idAdm);
                    if ($res->num_rows>0) {//verifiaca se possui funcionarios                            ?>
                            <form name="formRadio" method="post">

                                <div class="table-responsive col-md-12">
                                    <table class="table table-striped" cellspacing="0" cellpadding="0">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Função</th>
                                                <th>Fone</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $name = 0;
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['nome'] ?></td>
                                                    <td><?php echo $row['funcao'] ?></td>
                                                    <td><?php echo $row['fone'] ?></td>
                                                    <td>
                                                        <input required="" name="<?php echo $name ?>" id="<?php echo $name ?>" value="1" type="radio">
                                                    </td>
                                                    <td>
                                                        <input required="" name="<?php echo $name ?>" id="<?php echo $name ?>" value="2" type="radio">
                                                    </td>
                                                    <td>
                                                        <input required="" name="<?php echo $name ?>" id="<?php echo $name ?>" value="3" type="radio">
                                                    </td>
                                                    <td>
                                                        <input required="" name="<?php echo $name ?>" id="<?php echo $name ?>" value="4" type="radio">
                                                    </td>
                                                    <td>
                                                        <input required="" name="<?php echo $name ?>" id="<?php echo $name ?>" value="5" type="radio">
                                                    </td>
                                                </tr>
                                                <?php
                                                $name++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary" value="cadastroNotas">Adicionar</button>

                                </div>

                            </form>
                            <?php
                        } else {
                            ?>
                            <h1>
                                <div class="alert alert-info">
                                    <strong>Info!</strong> Não há Funcionários
                                </div>
                            </h1>
                            <?php
                        }

                    ?>
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
      </div>

        <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
        <script src="../js/jquery-3.1.1.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/meuJS.js"></script>
    </body>
</html>
