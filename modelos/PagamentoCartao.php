<?php
    require_once('Pagamento.php');

    class PagamentoCartao implements Pagamento {
        private $total;
        private $cartao;
        private $data;
        private $recibo;

        public function __construct()
        {
            $this->data = new DateTime('now', new DateTimeZone('-03:00'));
        }

        public function recibo()
        {
            return $this->recibo;
        }

        public function executar() {
            $this->recibo = $this->cartao->cobrar();
            return "Pagamento realizado!";
        }

        public function __get($propriedade) 
        {
            return $this->$propriedade;
        }

        public function __set($propriedade, $valor)
        {
            return $this->$propriedade = $valor;
        }
    }