<!-- Popup-с формой -->
<div class="popup popup_callback">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close" aria-label="Закрыть модальное окно"></div>
			<div class="popup__item d-flex">
				<div class="popup__img">
					<img src="img/popup.jpg" alt="">
				</div>
				<div class="popup__form-block">
					<h2>Заказать звонок</h2>
					<p class="popup__notific">Оставьте заявку и мы свяжемся с Вами в течении 15 минут</p>
					<form action="#" class="form">
						<div class="form__line">
							<input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Имя"
								class="popup__form-input input _req">
							<input id="tel2" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Телефон"
								class="popup__form-input input _phone _req">
							<input id="email" autocomplete="off" type="text" name="form[]" data-error="Заполните поля" data-value="Email"
								class="popup__form-input input _email _req">
						</div>
						<p class="popup__policy">Заполняя данную форму вы соглашаетесь с <a href="#">политикой
								конфиденциальности</a></p>
						<button class="popup__form-btn form__btn btn">Заказать</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<x-city-popup></x-city-popup>

<!-- =============================================================================================================================== -->

<div class="popup popup_massagename-message">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close" aria-label="Закрыть модальное окно"></div>
		</div>
	</div>
</div>
<!-- =============================================================================================================================== -->

<div class="popup popup_video">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close popup__close_video" aria-label="Закрыть модальное окно"></div>
			<div class="popup__video _video"></div>
		</div>
	</div>
</div>
<!-- <a href="#video" data-video="stFOy0Noahg" class=" _popup-link">Открыть видео</a> -->
<!-- =============================================================================================================================== -->