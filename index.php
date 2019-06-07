<?php	include "header.php";?>		
	<main>
		<div class="top-block">
			<div class="top-block__slide" style="background-image: url(img/slider/0.png)">
				<div class="wrapper">
					<div class="top-block__text">
						<h2>Как избавиться от крыс и не навредить семье?</h2>
						<p>Без ядов и мышеловок.<br> Метод со 100% эффективностью</p>
						<a href="https://xage.ru/samye-uzhasnye-vidy-kaznej-mafii-so-vsego-mira/" class="btn top-block__btn" target="_blank">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="top-block__slide" style="background-image: url(img/slider/1.png)">
				<div class="wrapper">
					<div class="top-block__text">
						<h2>Получите скидку<br> 15% на следующую<br> покупку</h2>
						<p>На любой товар в нашем<br> интернет-магазине</p>
						<a href="#" class="btn top-block__btn">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="top-block__slide" style="background-image: url(img/slider/2.png)">
				<div class="wrapper">
					<div class="top-block__text">
						<h2>Собаки и близко<br> не подойдут</h2>
						<p>Не шокер и не перцовый балон</p>
						<a href="#" class="btn top-block__btn">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="services">
			<div class="wrapper">
				<div class="box services__box">
					<div class="service-card high">
						<h3>Ультразвуковые отпугиватели</h3>
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
					</div>
					<div class="service-card">
						<h3>Автосервис</h3>
						<ul>
							<li><a href="#">Диагностика</a></li>
							<li><a href="#">Зарядные устройства</a></li>
							<li><a href="#">Контроллеры ближнего света</a></li>
						</ul>
					</div>
					<div class="service-card high">
						<h3>Промышленное производство</h3>
						<ul>
							<li><a href="#">Культиваторы</a></li>
							<li><a href="#">Плуги</a></li>
							<li><a href="#">Трактора</a></li>
							<li><a href="#">Вспахиватели</a></li>
						</ul>
					</div>
					<div class="service-card">
						<h3>Товары для дома</h3>
						<ul>
							<li><a href="#">Диагностика</a></li>
							<li><a href="#">Зарядные устройства</a></li>
							<li><a href="#">Контроллеры ближнего света</a></li>
						</ul>
					</div>
					<div class="service-card">
						<h3>Сельское<br> хозяйство</h3>
						<ul>
							<li><a href="#">Оборудование для полей</a></li>
						</ul>
					</div>	
					<div class="service-card">
						<h3>Разное</h3>
						<!-- 
							можно было бы реализовать двухколоночный список через css-columns (класс или атрибут style), 
							но учитываю твою любовь пихать разметку из редактора, логичнее сделать так
						-->
						<ul>
							<li><a href="#">Алкотестеры</a></li>
							<li><a href="#">Дозиметры</a></li>
							<li><a href="#">Коврик с подогревом</a></li>
						</ul>
						<ul>
							<li><a href="#">Корректор осанки</a></li>
							<li><a href="#">Терморегуляторы</a></li>
						</ul>
					</div>					
				</div>
			</div>
		</div>
		<div class="offers">
			<div class="wrapper">
				<h2 class="offers__title">Лучшие предложения</h2>
				<div class="offers__slider">
					<?
						$offers = [
							[
								'title'=>'Торнадо-100',
								'image'=>'tornado-100',
								'label'=>'Хит продаж',
								'price'=>'1 700',
								'old-price'=>'2300',
								'discount'=>'5000',
							],[
								'title'=>'Отпугиватель собак Торнадо-112 duo',
								'image'=>'tornado-112',
								'label'=>'Новинка',
								'price'=>'2 200',
							],[
								'title'=>'Торнадо-1200',
								'image'=>'tornado-1200',
								'label'=>'',
								'price'=>'7900',
							],[
								'title'=>'Торнадо-100',
								'image'=>'tornado-100',
								'label'=>'Хит продаж',
								'price'=>'1 700',
								'old-price'=>'2300',
								'discount'=>'5000',
							],
						];
						for($i=0;$i<count($offers)*2;$i++){
							$current = $i % count($offers);
							$card = $offers[$current];
							include 'card.php';
						};
					?>
				</div>
			</div>
		</div>
		<img class="separator" src="img/separator.png" alt="">
		<div class="about-block">
			<div class="wrapper">
				<div class="about-block__inner">
					<div class="about-block__text">
						<h2>Торнадо — российский производитель <br>современного оборудования</h2>
						<p>12 лет проиозводим качественное оборудование в Тольятти</p>
						<a href="#" class="btn">Подробнее</a>
					</div>
					<div class="about-block__gallery">
						<a href="#" class="about-block__link">
							<img src="img/production.jpg" alt="">
							<span class="about-block__caption">Производство</span>
						</a>
						<a href="#" class="about-block__link">
							<img src="img/docs.jpg" alt="">
							<span class="about-block__caption">Сертификаты</span>
						</a>
						<a href="#" class="about-block__link">
							<img src="img/hand-spider.jpg" alt="">
							<span class="about-block__caption">Достижения</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="news-block">
			<div class="wrapper">
				<div class="news-block__head">
					<h2>Читайте наш блог</h2>
					<p>Пишем о том, в чем лучше всего разбираемся</p>
				</div>
			</div>
			<div class="news-block__slider">
				<a href="#" class="news-card">
					<img src="img/news/0.jpg" alt="" class="news-card__img">
					<span class="news-card__caption">Уникальный корректор осанки для взрослых и детей</span>
				</a>
				<a href="#" class="news-card">
					<img src="img/news/1.jpg" alt="" class="news-card__img">
					<span class="news-card__caption">Поведение грызунов<br> под воздействием ультразвука</span>
				</a>
				<a href="#" class="news-card">
					<img src="img/news/2.jpg" alt="" class="news-card__img">
					<span class="news-card__caption">Обзор рынка приборов<br> для отпугивания собак</span>
				</a>
				<a href="#" class="news-card common">Все</a>
			</div>
		</div>
		<div class="text-block">
			<article class="wrapper">
				<h3>Выбрать и купить ультразвуковые отпугиватели от крыс, мышей и кротов</h3>
				<p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, даже всемогущая пунктуация не имеет власти над рыбными текстами, ведущими безорфографичный образ жизни. Однажды одна маленькая строчка рыбного текста по имени Lorem ipsum решила выйти в большой мир грамматики. </p>
				<p>По дороге встретил текст рукопись. Она предупредила его: «В моей стране все переписывается по несколько раз. Единственное, что от меня осталось, это приставка «и». Возвращайся ты лучше в свою безопасную страну». Не послушавшись рукописи, наш текст продолжил свой путь. Вскоре ему повстречался коварный составитель. Вскоре ему повстречался коварный составитель рекламных текстов, напоивший его языком и речью и заманивший в свое агенство, которое использовало его снова и снова в своих проектах.</p>
				<h4>Лучшие публикации на сайте</h4>
				<a href="#">Как избавиться от крыс</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#">Как избавиться от кротов</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#">Лучший отпугиватель насекомых</a>
			</article>
		</div>
	</main>
<?php	include "footer.php";?>	