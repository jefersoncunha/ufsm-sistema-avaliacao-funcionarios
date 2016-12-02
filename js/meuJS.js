$(function () {

    //QUANDO ENVIAR O FORMULÁRIO
    $('#formRadio').submit(function () {

        //CRIA UMA ARRAY PARA SALVAR OS ITENS
        var retorno = [];

        // FAZ O EACH E PEGA SÓ OS RADIO CHECADOS
        $('input[type="radio"]:checked').each(function () {

            //PEGA O VALOR DO RADIO
            var selecionado = [$(this).val()];

            //ADICIONA NA ARRAY RETORNO
            retorno = retorno.concat(selecionado);

        });

        //SALVA AS RESPOSTAS VIA AJAX
        $.getJSON('salvaResposta.php', {respostas: retorno}, function (data) {
            if (data['status'] == '1') {
                alert('Informações salvas com sucesso!');
            } else {
                alert('Erro ao salvar informações.');
            }
        });

    });
    
    //pesquisar os cursos sem refresh na página
    $("#pesquisa").keyup(function () { //recebendo enquanto está digitando
        
        var pesquisa = $(this).val(); //receber o valor que está sendo digitado
        if (pesquisa != '') { //verificar se há algo digitado
            var dados = {//cria objeto para enviar para buscar no banco
                palavra: pesquisa //atribuir pesquisa a palavra
                        //como se fosse no html name="palavra"
            }
            $.post('../paginas/busca.php', dados, function (retorna) {
                //mostra dentro da ul index.php os resultados obtidos
                $("#tab").html(retorna); //id retornar valores
                
            });
        } else { //enquanto o usuário não digitar nada aparecer vazio
            $("#tab").html('');
        }
    });

});

