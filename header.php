<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Верстка</title>
	<meta name="viewport" content="width=device-width, shrink-to-fit=no" />	
	<link rel="stylesheet" href="css/fonts.css" />	
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="libs/slick/slick.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header class="header">
		<div class="header__topline">
			<div class="wrapper">
				<a href="/" class="logo header__logo"><img src="img/logo.svg" alt=""></a>
				<div class="header__descr">Ультразвуковые отпугиватели и электроника</div>
				<div class="callback header__callback">
					<a href="javascript:void(0)" class="callback__btn"><i class="icon-phone callback__icon"></i> Обратный звонок</a>
					<a href="javascript:void(0)" class="callback__btn"><i class="icon-chat callback__icon"></i> Онлайн чат</a>
				</div>
				<div class="header__contacts">
					<a href="tel:88003333 00" class="header__phone">8 800 3333 900</a>
					<div>Пн–пт  с 8 до 17:00</div>
				</div>
			</div>
		</div>
		<div class="header__bottomline">
			<div class="wrapper">
				<ul class="main-menu">
					<li>
						<a href="#">Каталог</a>
						<ul>
							<li>
								<a href="#">Ультразвуковые отпугиватели</a>
								<ul>
									<li><a href="#">Крыс и мышей</a></li>
									<li><a href="#">Летучих мышей</a></li>
									<li><a href="#">Тараканов</a></li>
									<li><a href="#">Комаров</a></li>
									<li><a href="#">Кротов</a></li>
									<li><a href="#">Собак</a></li>
									<li><a href="#">Змей</a></li>
									<li><a href="#">Птиц</a></li>
									<li><a href="#">Кошек</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Автосервис</a>
								<ul>
									<li><a href="#">Диагностика</a></li>
									<li><a href="#">Зарядные устройства</a></li>
									<li><a href="#">Контроллеры ближнего света</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Промышленное производство</a>
								<ul>
									<li><a href="#">Культиваторы</a></li>
									<li><a href="#">Плуги</a></li>
									<li><a href="#">Трактора</a></li>
									<li><a href="#">Вспахиватели</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Товары для дома</a>
								<ul>
									<li><a href="#">Диагностика</a></li>
									<li><a href="#">Зарядные устройства</a></li>
									<li><a href="#">Контроллеры ближнего света</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Сельское хозяйство</a>
								<ul>
									<li><a href="#">Оборудование для полей</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Разное</a>
								<ul>
									<li><a href="#">Алкотестеры</a></li>
									<li><a href="#">Дозиметры</a></li>
									<li><a href="#">Коврик с подогревом</a></li>
									<li><a href="#">Корректор осанки</a></li>
									<li><a href="#">Терморегуляторы</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#">Доставка и оплата</a></li>
					<li><a href="#">Применение</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
				<span class="search-btn icon-magnify"></span>
				<div class="header__tools">
					<span class="header__tool">
						<span class="favorites-btn"></span>
					</span>
					<span class="header__tool">
						<a href="#" class="cart-link" data-amount="10">0 р.</a>
					</span>
					<span class="header__tool">
						<a href="#" class="header__login">Войти</a>
					</span>
				</div>
			</div>
		</div>
		<div class="header__search">
			<div class="wrapper">
				<form action="" class="header__search-form">
					<input type="search" placeholder="Что будем искать?">
				</form>
				<span class="header__search-close icon-close"></span>
			</div>
		</div>
		<div class="cart header__cart">
			<div class="cart__body">
				<h3 class="cart__title">Корзина</h3>
				<span class="cart__clear">Очистить</span>
				<div class="cart__content">
					<div class="cart__item">
						<img src="img/goods/tornado-100-min.jpg" alt="" class="cart__img">
						<div class="cart__text">
							<h4 class="cart__subtitle">Торнадо-100</h4>
							<div class="cart__price">1 700 руб.</div>							
						</div>
						<span class="number cart__amount">
							<span class="number__btn minus">-</span><input type="number" min="1" max="100" value="1" /><span class="number__btn plus">+</span>
						</span>
						<span class="cart__remove">❌</span>
					</div>
					<div class="cart__item">
						<img src="img/goods/tornado-100-min.jpg" alt="" class="cart__img">
						<div class="cart__text">
							<h4 class="cart__subtitle">Торнадо-100</h4>
							<div class="cart__price">1 700 руб.</div>							
						</div>
						<span class="number cart__amount">
							<span class="number__btn minus">-</span><input type="number" min="1" max="100" value="1" /><span class="number__btn plus">+</span>
						</span>
						<span class="cart__remove">❌</span>
					</div>
					<div class="cart__item">
						<img src="img/goods/tornado-100-min.jpg" alt="" class="cart__img">
						<div class="cart__text">
							<h4 class="cart__subtitle">Торнадо-100</h4>
							<div class="cart__price">1 700 руб.</div>							
						</div>
						<span class="number cart__amount">
							<span class="number__btn minus">-</span><input type="number" min="1" max="100" value="1" /><span class="number__btn plus">+</span>
						</span>
						<span class="cart__remove">❌</span>
					</div>
				</div>
				<div class="cart__total">Всего:  5400 р.</div>
			</div>
			<button class="btn btn_green btn_high btn_block cart__btn">Оформить заказ</button>
		</div>
	</header>
<!-- Переход на страницу со ссылками на современные браузеры для ie9 и ниже -->
<!--[if lt IE 10]><script>location.href='/old-ie.html';</script><![endif]-->