<?php	include "header.php";?>		
	<main>
		<div class="page-head">
			<div class="wrapper">
				<ul class="breadcrumbs page-head__breadcrumbs">
					<li><a href="/">Главная</a></li>
					<li>Контакты</li>
				</ul>
				<div class="page-head__inner">
					<div class="page-head__text">
						<h1 class="page-head__title">Контакты</h1>
					</div>					
				</div>
			</div>
		</div>
		<div class="contacts">
			<div class="wrapper contacts__wrapper">
				<div class="contacts__main">
					<h3>Телефон горячей линии:</h3>
					<p>
						<a href="tel:+78003333900">+7 800 3333 900</a>
					</p>
					<h3>Эл. почта:</h3>
					<p>секретарь — <a href="mailto:cnt-tlt@yandex.ru">cnt-tlt@yandex.ru</a><br>	отдел продаж — <a href="mailto:info@tornado-rf.ru">info@tornado-rf.ru</a></p>
					<h3>График работы:</h3>
					<p>Пн-Пт: с 9-00 до 18-00<br> Сб-Вс: выходной</p>
					<hr>
					<a href="doc.pdf" class="file-link" download>
						<span class="file-link__title">Скачать реквизиты для оплаты</span>
						<span class="file-link__info">Pdf, 1,6 мб.</span>
					</a>
				</div>
				<div class="contacts__box">
					<div class="contact">
						<h3>Москва</h3>
						<p>ул. Шумкина, 9, офис 6 <br>+7 499 348-82-21</p>
						<p><a href="https://goo.gl/maps/V5bBV6djTpghbK358" target="_blank">Показать на карте</a></p>
					</div>
					<div class="contact">
						<h3>Екатеринбург</h3>
						<p>ул. Крауля, 76<br> +7 343 382-60-30</p>
						<p><a href="https://goo.gl/maps/V5bBV6djTpghbK358" target="_blank">Показать на карте</a></p>
					</div>
					<div class="contact">
						<h3>Тольятти <small>(производство)</small></h3>
						<p>ул. Ярославская, 12, строение 15<br> +7 8482 557-447</p>
						<p><a href="https://goo.gl/maps/V5bBV6djTpghbK358" target="_blank">Показать на карте</a></p>
					</div>
					<div class="contact">
						<h3>Волгоград</h3>
						<p>шоссе Авиаторов, 15, корпус 7<br> +7 8442 50-70-03</p>
						<p><a href="https://goo.gl/maps/V5bBV6djTpghbK358" target="_blank">Показать на карте</a></p>
					</div>
					<div class="contact">
						<h3>Ростов-на-Дону</h3>
						<p>пр. Стачки, 249, кабинет 110<br> +7 863 209-83-86</p>
						<p><a href="https://goo.gl/maps/V5bBV6djTpghbK358" target="_blank">Показать на карте</a></p>
					</div>
					<div class="contact">
						<h3>Уфа</h3>
						<p>ул. Кольцевая, 65<br> +7 347 299-31-88</p>
						<p><a href="https://goo.gl/maps/V5bBV6djTpghbK358" target="_blank">Показать на карте</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-form">
			<div class="wrapper contact-form__wrapper">
				<div class="contact-form__text">
					<h2>Связаться с нами</h2>
					<p>Мы работаем каждый будний день<br> с 9-00 до 18-00</p>
				</div>
				<form action="" class="contact-form__form">
					<div class="double-field">
						<input type="text" placeholder="Имя" />
						<input type="text" placeholder="Город" />
					</div>
					<div class="double-field">
						<input type="tel" placeholder="Телефон" />
						<input type="email" placeholder="Эл. почта" />
					</div>
					<textarea rows="5" placeholder="Вопрос или комментарий"></textarea>
					<button class="btn btn_green btn_highest contact-form__btn">Отправить</button>
					<pre>Отправляя форму вы соглашаетесь с политикой конфиденциальности</pre>
				</form>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	