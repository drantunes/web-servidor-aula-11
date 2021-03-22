<?php
    require_once('Cartao.php');

    class CartaoMastercard extends Cartao {
        public function cobrar()
        {
            // chamada ao servidor da MASTERCARD
            return "Pagamento realizado, Cartão Mastercard, R$ " . $this->valor; 
        }
    }