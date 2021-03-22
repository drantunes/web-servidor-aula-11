<?php
    interface Pagamento {
        public function executar();
        public function recibo();
    }