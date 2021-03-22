<?php
    abstract class Cartao {
        private $nome;
        private $numero;
        private $cvc;
        private $expiry;
        private $valor;
        private $data;

        abstract public function cobrar();

        public function __get($propriedade)
        {
            return $this->$propriedade;
        }

        public function __set($propriedade, $valor)
        {
            return $this->$propriedade = $valor;
        }
    }