<?php

require_once('modelos/PagamentoCartao.php');
require_once('modelos/CartaoMastercard.php');
require_once('modelos/CartaoVisa.php');

function novoCartao($bandeira)
{
    // transformar bandeira em primeira letra maiúscula
    $cartao = ucwords($bandeira);
    // nome da classe que será instanciada dinamicamente
    $CartaoClasse = "Cartao${cartao}";
    // instanciar a classe dinamicamente
    return new $CartaoClasse();
}

if(!empty($_POST['bandeira'])) {
    //Criar um pagamento
    $pagamento = new PagamentoCartao();
    $pagamento->total = $_POST['total'];
    //Criar um Cartão
    $cartao =  novoCartao($_POST['bandeira']);

    $cartao->numero = $_POST['number'];
    $cartao->nome = $_POST['name'];
    $cartao->cvc = $_POST['cvc'];
    $cartao->expiry = $_POST['expiry'];
    $cartao->valor = $pagamento->total;

    $pagamento->cartao = $cartao;
    //Executar o pagamento
    $pagamento->executar();
    //Mostrar um recibo
    header('Location: /?sucesso=' . $pagamento->recibo);
}