<footer id="footer" class="footer">
	<div class='_container'>
		<div class="footer__row d-flex">

			<div class="footer__col footer__col_forms">
				<h3>Подпишитесь <br> на нашу рассылку!</h3>

				<form action="#" class="footer__forms d-flex">
					<input type="email" placeholder="E-mail" name="email" class="input">
					<button class="btn">Подписаться</button>
				</form>

				<div class="header__callback callback d-flex">
					<p><a href="tel:88007006045" class="callback__phone">{{Config::get('contact.phone')}}</a></p>
					<a href="#callback" class="callback__popup _popup-link">Заказать обратный звонок</a>
				</div>

				<p class="footer__info-text">
					2012 — 2021г. «Интернет-магазин» Маркет Света» ©
				</p>
			</div>

			<div class="footer__col">
				<h3>Каталог товаров</h3>
				<ul class="footer__menu">
					<li><a href="#">Люстры</a></li>
					<li><a href="#">Уличные светильники</a></li>
					<li><a href="#">Бра</a></li>
					<li><a href="#">Настольные лампы</a></li>
					<li><a href="#">Торшеры</a></li>
					<li><a href="#">Потолочные светильники</a></li>
					<li><a href="#">Встраиваемые светильники</a></li>
					<li><a href="#">Аксессуары</a></li>
					<li><a href="#">Декор</a></li>
					<li><a href="#">Распродажа</a></li>
				</ul>
			</div>

			<div class="footer__col">
				<h3>Помощь покупателю</h3>
				<ul class="footer__menu">
					<li><a href="#">Главная</a></li>
					<li><a href="#">Оплата и доставка</a></li>
					<li><a href="#">Акции</a></li>
					<li><a href="#">Бренды</a></li>
					<li><a href="#">Гарантия</a></li>
				</ul>
				<div class="footer__social-network">
					<p class="footer__social-network-text">СОЦИАЛЬНЫЕ СЕТИ</p>
					<div class="footer__social-network-block">
						<a href="{{Config::get('contact.vk')}}" class="footer__social-network-link social-network-link-01"></a>
						<a href="{{Config::get('contact.tg')}}" class="footer__social-network-link social-network-link-02"></a>
					</div>
				</div>
			</div>

			<div class="footer__col">
				<h3>Информация</h3>
				<ul class="footer__menu">
					<li><a href="#">О компании</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Политика конфиденциальности</a></li>
				</ul>
				<div class="footer__payment-methods">
					<p class="footer__payment-methods-text">Способы оплаты</p>
					<div class="footer__payment-methods-img">
						<img src="{{asset('img/mir.jpg')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>