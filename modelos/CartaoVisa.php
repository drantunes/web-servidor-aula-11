<?php
    require_once('Cartao.php');

    class CartaoVisa extends Cartao {
        public function cobrar()
        {
            $this->data = new DateTime('now', new DateTimeZone('-03:00'));
            // chamada ao servidor da VISA
            return "Pagamento realizado, Cartão Visa, R$ " . $this->valor . " em " . $this->data->format('d/m/Y - H:i:s'); 
        }
    }