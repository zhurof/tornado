<?php	include "header.php";?>		
	<main>
		<div class="catalog">
			<div class="wrapper">
				<div class="catalog__nav">
					<ul class="breadcrumbs catalog__breadcrumbs">
						<li><a href="/">Главная</a></li>
						<li><a href="#">Каталог</a></li>
						<li>Отпугиватели</li>
					</ul>
					<div class="catalog__view">
						<span class="catalog__view-trigger list-view">Список</span>
						<span class="catalog__view-trigger table-view active">Карточки</span>
					</div>
				</div>
				<div class="catalog__head">
					<div class="catalog__select">
						<h1 class="catalog__title">Отпугиватели</h1>
						<ul class="catalog__cat-list">
							<li><a href="#">Автосервис</a></li>
							<li><a href="#">Товары для дома</a></li>
						</ul>
					</div>
					<ul class="catalog__filter">
						<li><a href="#">Все</a></li>
						<li><a href="#">Крысы</a></li>
						<li><a href="#">Мыши</a></li>
						<li><a href="#">Кроты</a></li>
						<li><a href="#">Собаки</a></li>
						<li><a href="#">Комары</a></li>
						<li><a href="#">Птицы</a></li>
						<li><a href="#">Тараканы</a></li>
						<li class="has-children">
							<a href="javascript:void(0)">Еще</a>
							<ul>
								<li><a href="#">lorem</a></li>
								<li><a href="#">lorem</a></li>
								<li><a href="#">lorem</a></li>
							</ul>
						</li>
					</ul>
					<select class="catalog__sort">
						<option>по популярности</option>
						<option>по цене ↑</option>
						<option>по цене ↓</option>
					</select>
				</div>
				<div class="box catalog__box">
					<?
						$catalog = [
							[
								'title'=>'Торнадо-200',
								'image'=>'tornado-200',
								'description'=>'<p>Вибросейсмический отпугиватель кротов "Торнадо ОЗВ.04" – разработан в 2016 г. самое новое оружие в борьбе с земляными вредителями.</p>',
								'label'=>'Хит продаж',
								'price'=>'1 700',
								'old-price'=>'2300',
								'discount'=>'5000',
							],[
								'title'=>'Торнадо-1200',
								'image'=>'tornado-1200',
								'description'=>'<p>Свето-ультразвуковой отпугиватель грызунов "Торнадо 1200" - инновационно новый прибор для отпугивания крыс и мышей!</p>',
								'label'=>'Новинка',
								'price'=>'17 900',
								'old-price'=>'23900',
								'discount'=>'7000',
							],[
								'title'=>'Торнадо-100',
								'image'=>'tornado-100',
								'description'=>'<p>Ультразвуковой отпугиватель "Торнадо М" (100) - мощная сила противодействия вредным животными - крысам и мышам.</p>',
								'label'=>'',
								'price'=>'1 700',
							],[
								'title'=>'Торнадо-300',
								'image'=>'tornado-300',
								'description'=>'<p>Ультразвуковой отпугиватель "Торнадо 300" - следующий шаг в борьбе с вредными животными - крысами и мышами.</p>',
								'label'=>'',
								'price'=>'2 000',
							],[
								'title'=>'Торнадо-400',
								'image'=>'tornado-400',
								'description'=>'<p>Ультразвуковой отпугиватель "Торнадо 400" - больше мощность, эффективнее борьба с вредными животными - крысами и мышами.</p>',
								'label'=>'',
								'price'=>'2 200',
							],[
								'title'=>'Торнадо-800',
								'image'=>'tornado-800',
								'description'=>'<p>Ультразвуковой отпугиватель "Торнадо 800" - самое мощное и эффективное средство борьбы с вредными животными - крысами и мышами.</p>',
								'label'=>'',
								'price'=>'3 300',
							],
						];
						foreach($catalog as $card){
							include 'card.php';
						};
					?>
				</div>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	