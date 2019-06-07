<?php	include "header.php";?>		
	<main>
		<div class="message">
			<div class="wrapper message__wrapper">
				<img src="img/envelope.png" alt="" class="message__img">
				<div class="message__text">
					<h1>Спасибо за заказ!</h1>
					<p>Информацию по заказу <b>#413</b> мы отправили вам на egmalt@ya.ru. Заказ также доступен в личном кабинете. Мы свяжемся с вами в ближайшее время для его подтверждения.</p>
					<a href="/" class="btn btn_green btn_highest">Перейти в мои заказы</a>
				</div>				
			</div>
		</div>
		<div class="follow">
			<div class="wrapper">
				<h2 class="follow__title">Узнавайте полезную информацию<br> о борьбе с вредителями</h2>
				<p>Подпишитесь на нас в социальных сетях</p>
				<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
				<!-- VK Widget -->
				<div id="vk_groups" class="follow__widget"></div>
				<script type="text/javascript">
				VK.Widgets.Group("vk_groups", {mode: 3,width: '500px'}, 20003922);
				</script>
			</div>
		</div>
	</main>
<?php	include "footer.php";?>	