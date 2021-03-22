<div class="items">
    <h2>Produtos no Carrinho</h2>
    <ul>
        <li>
            <img src="https://images.goodgam.es/03MqYktzTDU/enlarge:1/plain/covers/16-fortnite-cover.jpg@png" />
            <div class="dados">
                <h4>Fortnite Chapter 2, Season 3</h4>
                <span>Windows 10</span>
                <small>R$ 50,00</small>
            </div>
        </li>

        <li>
            <img src="https://www.mobygames.com/images/covers/l/441545-rocket-league-xbox-one-front-cover.jpg" />
            <div class="dados">
                <h4>Rocket League 2020</h4>
                <span>Windows 10</span>
                <small>R$ 35,00</small>
            </div>
        </li>
    </ul>
    <div class="total">
        <small>Total</small>
        <h1>R$85,00</h1>
    </div>
</div>

<div class="pagamento">
    <h2>Pagamento</h2>

    <div class='card-wrapper'></div>
    <form method="POST" action="/">
        <input type="hidden" id="total" name="total" value="85.00" />
        <input type="hidden" id="bandeira" name="bandeira" value="" />
        <input type="text" name="number" id="number" placeholder="Número do Cartão" class="mw-100 input h">
        <input type="text" name="name" id="name" placeholder="Seu nome" class="mw-100 input h" />
        <div class="flex">
            <input type="text" name="expiry" id="expiry" placeholder="MM/YYYY" class="input w-50" />
            <input type="text" name="cvc" name="cvc" class="input w-50" placeholder="CVC" />
        </div>
        <button>Pagar</button>
    </form>
</div>