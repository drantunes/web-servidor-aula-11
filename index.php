<?php
//Logica
require_once('controllers/Checkout.php');

//UI Views (HTML)
require_once('views/header.view.php');

if(isset($_GET['sucesso'])):
    require_once('views/sucesso.view.php');
else:
    require_once('views/checkout.view.php');
endif;

require_once('views/footer.view.php');