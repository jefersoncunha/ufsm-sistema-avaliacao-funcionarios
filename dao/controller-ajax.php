<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Produto</title>
        <!-- Bootstrap CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <?php
            include './AdministradorDAO.php';
            include './FuncionarioDAO.php';
            include './AvaliacaoDAO.php';

            $operacao = $_POST["operacao"]; //operação input
            //inicialização objetos
            $adm = new administrador();
            $func = new funcionario();
            $ava = new Avaliacao;

            switch ($operacao) {

                case "avaliar":
                    $ava->idFuncionario = $_POST["idFuncionario"];
                    $ava->nota = $_POST["nota"];;
                    $ava->inserir();
                    echo"ok";
                    break;

            }
            ?>

        </div>
        <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
        <script src="../js/jquery-3.1.1.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
