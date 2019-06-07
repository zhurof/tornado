//изменение состояния кнопки избранное (для демонстрации)
$('.favorites-btn').click(function(){
	$(this).toggleClass('active');
})
//поиск
$('.search-btn').click(function(){
	$('.header__search').toggleClass('open').find('input[type=search]').focus();
})
$('.header__search-close').click(function(){
	$('.header__search').find('input[type=search]').blur();
	$('.header__search').removeClass('open')
})
//Корзина
$('.cart-link').click(function(){
	$('.cart').toggleClass('show');
})
$(document).mousedown(function(e){
	if(!$(e.target).is('.cart,.cart-link') && $('.cart').find(e.target).length == 0){
		$('.cart').removeClass('show');
	}
})
//кастомный input[type=number]
$('.number__btn').click(function(){
	var input = $(this).siblings('input')[0],
			min = input.min || 0,
			max = input.max || 100,
			step = input.step || 1,
			value = input.value || min;
	if($(this).is('.minus') && value >= +min + +step){
		input.value = value - step;
	}
	if($(this).is('.plus') && value <= max - step){
		input.value = +value + +step;
	}
})
//главный слайдер
$('.top-block').slick({
	prevArrow: '<span class="top-block__arrow dark icon-angle-left prev"></span>',
	nextArrow: '<span class="top-block__arrow dark icon-angle-right next"></span>',
	dots: true,
	dotsClass: 'slick-dots top-block__dots',
	customPaging: function(){return ''}
})
//слайдер товаров
$('.offers__slider').slick({
	slidesToShow: 4,
	infinite: false,
	prevArrow: '<span class="offers__arrow icon-angle-left prev"></span>',
	nextArrow: '<span class="offers__arrow icon-angle-right next"></span>',
	dots: true,
	dotsClass: 'slick-dots offers__dots',
	customPaging: function(){return ''}
})
//слайдер новостей
$('.news-block__slider').slick({
	variableWidth: true,
	infinite: false,
	prevArrow: '<span class="news-block__arrow icon-angle-left prev"></span>',
	nextArrow: '<span class="news-block__arrow icon-angle-right next"></span>'
})
//переключение вида карточек в каталоге
$('.catalog__view-trigger').click(function(){
	if(!$(this).is('.active')){
		$(this).addClass('active').siblings().removeClass('active');
		
		if($(this).is('.table-view')){
			$('.catalog__box').addClass('box');
			$('.card').removeClass('long');
		}else{
			$('.catalog__box').removeClass('box');
			$('.card').addClass('long');
		}
	}	
})
//кастомный details
$('.details__trigger').click(function(){
	$(this).toggleClass('active')
	$(this).siblings('.details__content').slideToggle(200)
})
//Еще один слайдер
$('.slider-block__slider').slick({
	prevArrow: '<span class="slider-block__arrow icon-angle-left prev"></span>',
	nextArrow: '<span class="slider-block__arrow icon-angle-right next"></span>'
})
//разворачивание текста в отзыве
$('.review-card__more').click(function(e){
	e.preventDefault();
	$(this).hide().prev('.review-card__text').addClass('open');	
})
//товар
$('.good__slider').slick({
	arrows: false,
	asNavFor: '.good__thumbs'
})
$('.good__thumbs').slick({
	slidesToShow: 3,
	prevArrow: '<span class="good__arrow icon-angle-left prev"></span>',
	nextArrow: '<span class="good__arrow icon-angle-right next"></span>',
	asNavFor: '.good__slider',
	focusOnSelect: true
})
/* $('.good__menu a').click(function(e){
	e.preventDefault()
	var li = $(this).parent(),
			index = li.index();
	if(!li.is('.active')){
		li.addClass('active').siblings().removeClass('active')
		$('.good__text-item').hide().eq(index).fadeIn();
	}
}) */

$('.history__slider').slick({
	slidesToShow: 6,
	prevArrow: '<span class="history__arrow icon-angle-left prev"></span>',
	nextArrow: '<span class="history__arrow icon-angle-right next"></span>'
})
//мини-плагин для табов
/* $.fn.govnoTabs(userSettings){
	var defaultSettings = {
		trigger = '.tabs__trigger',
		item = '.tabs__item'
	};
	var tabs = this;
	var settings = $.extend(defaultSettings,userSettings);
	
	tabs.find(settings.trigger).click(function(e){
		e.preventDefault()
		if(!$(this).is('.active')){
			$(this).addClass('active').siblings().removeClass('active');
			var index = $(this).index();
			tabs.find(settings.item).hide().eq(index).fadeIn();
		}
	})	
}
$('.good').govnoTabs({
	trigger: '.good__menu li',
	item: '.good__text-item'
})
 */
$('.faq__item').click(function(){
	$(this).toggleClass('open').find('.faq__answer').slideToggle(200)
})