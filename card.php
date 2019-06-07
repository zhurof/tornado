<div class="card">
	<? 
		switch($card['label']){
			case 'Хит продаж':
				echo '<div class="label card__label">'.$card['label'].'</div>';
				break;
			case 'Новинка': 
				echo '<div class="label purp card__label">'.$card['label'].'</div>';
				break;
		} 
	?>	
	<span class="favorites-btn card__favorites"></span>
	<div class="card__pic">
		<img src="img/goods/<?=$card['image'];?>.jpg" alt="">
	</div>
	<div class="card__body">
		<h3 class="card__title"><?=$card['title'];?></h3>
		<div class="card__text">
			<?=$card['description'];?>
			<div class="details">
				<div class="details__trigger">Характеристики</div>
				<div class="details__content">
					<table width="302">
						<tbody>
							<tr>
								<th width="163">Мощность</th>
								<td width="139">10 Вт</td>
							</tr>
							<tr>
								<th>Вес, гр</th>
								<td>500</td>
							</tr>
							<tr>
								<th>Питание</th>
								<td>Сеть 220В (±15%), 50 Гц</td>
							</tr>
							<tr>
								<th>Частота перестройки ультразвука</th>
								<td>2 - 10 Гц</td>
							</tr>
							<tr>
								<th>Уровень ультразвукового давления на расстоянии 1 м </th>
								<td>не менее 102 дБ</td>
							</tr>
							<tr>
								<th>Габариты</th>
								<td>90 x 95 x 130 мм</td>
							</tr>
							<tr>
								<th>Диапазон излучаемых частот </th>
								<td>18 - 70 кГц</td>
							</tr>
							<tr>
								<th>Диапазон рабочих температур </th>
								<td>-40 … +80°С</td>
							</tr>
							<tr>
								<th>Эффективная площадь </th>
								<td>800 кв.м.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="card__footer">
		<div>
			<?if($card['old-price']):?>
				<span class="card__old-price"><?=$card['old-price'];?></span>
			<?endif;?>
			<?if($card['discount']):?>
				<span class="card__discount">-<?=$card['discount'];?></span>
			<?endif;?>
		</div>
		<div class="card__price"><?=$card['price'];?> руб.</div>
		<div class="card__buttons">
			<button class="btn btn_green btn_low btn_cart card__btn">в корзину</button>
			<button class="btn btn_low card__btn">Купить в 1 клик</button>
		</div>
	</div>
</div>