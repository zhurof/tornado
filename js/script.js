function is_mobile(){
	return $(window).width()<992
}
function changeTemplate(){
	if(is_mobile()){
		$('.catalog__view-trigger.table-view').trigger('click');
		$('.catalog__filter').each(function(){foldList(this,false)});
	}else{
		$('.catalog__filter').each(function(){foldList(this,8)});
	}
}
$(window).on('load resize',changeTemplate);
//изменение состояния кнопки избранное (для демонстрации)
$('.card__favorites').click(function(){
	$(this).toggleClass('active');
})
$('.good__favorites').click(function(){
	$(this).toggleClass('active');
	$('.header__favorites').toggleClass('active');
})
//поиск
$('.search-btn').click(function(){
	$('.header__search').toggleClass('open').find('input[type=search]').focus();
	$('.main-menu').removeClass('open');
	$('.menu-btn').removeClass('active');
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
//мобильное меню
$('.menu-btn').click(function(){
	$(this).toggleClass('active')
	$('.main-menu').toggleClass('open')
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
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 1220,
			settings: {
				slidesToShow: 3
			}
		},{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				arrows: false
			}
		},{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				arrows: false
			}
		}
	]
})
//слайдер новостей
$('.news-block__slider').slick({
	variableWidth: true,
	infinite: false,
	prevArrow: '<span class="news-block__arrow icon-angle-left prev"></span>',
	nextArrow: '<span class="news-block__arrow icon-angle-right next"></span>',
	dotsClass: 'slick-dots news-block__dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				variableWidth: false,				
				arrows: false,
				dots: true
			}
		},{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				variableWidth: false,				
				arrows: false,
				dots: true
			}
		}
	]
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
//Сворачивание динных списков-меню в каталоге
function foldList(list,maxItems){
	//Вернуть в исходное состояние
	$(list).find('ul li').appendTo(list);
	$(list).find('ul').parent('li').remove();
	var amount = $(list).children().length,
			itemsToHide = amount - maxItems;	
	//свернуть 
	if(maxItems && itemsToHide>0){
		var items = $(list).children('li').slice(-1*itemsToHide);
		$(list).append('<li class="has-children"><a href="#">Ещё</a><ul></ul></li>');
		$(list).find('ul').append(items);
	}
}
//кастомный details
$('.details__trigger').click(function(){
	$(this).toggleClass('active')
	$(this).siblings('.details__content').slideToggle(200)
})
//Еще один слайдер
$('.slider-block__slider').slick({
	prevArrow: '<span class="slider-block__arrow icon-angle-left prev"></span>',
	nextArrow: '<span class="slider-block__arrow icon-angle-right next"></span>',
	dotsClass: 'slick-dots slider-block__dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 992,
			settings: {
				arrows: false,
				dots: true
			}
		}
	]
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
	focusOnSelect: true,
	responsive: [
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 2
			}
		}
	]
})
$('.history__slider').slick({
	slidesToShow: 6,
	prevArrow: '<span class="history__arrow icon-angle-left prev"></span>',
	nextArrow: '<span class="history__arrow icon-angle-right next"></span>',
	dotsClass: 'slick-dots history-slider__dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 1220,
			settings: {
				slidesToShow: 5
			}
		},{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
				arrows: false,
				dots: true
			}
		},{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				arrows: false,
				dots: true
			}
		},{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				arrows: false,
				dots: true
			}
		}
	]
})
$('.num-tabs__item').click(function(){
	$(this).toggleClass('open').find('.num-tabs__value').slideToggle(200)
})
$('.faq__item').click(function(){
	$(this).toggleClass('open').find('.faq__answer').slideToggle(200)
})
//баннер над шапкой
$('.action-banner__close').click(function(){
	$(this).parents('.action-banner').slideUp();
})
//Модальные окна
function openModal(modalId, initiator){  
  var scrollWidth = window.innerWidth - document.body.clientWidth;//Ширина полосы прокрутки
  
	$('.modal-wrapper').children().unwrap();
	if(!$('#'+modalId).length){
		alert('Ошибка вызова модального окна');
		return false;
	}
	$('#'+modalId).trigger('beforeShow',initiator).wrap('<div class="modal-wrapper" style="display:none" />');
	$('.modal-wrapper').fadeIn(400,function(){
    $('#'+modalId).trigger('afterShow',initiator);
  });	
	if(scrollWidth){
		$('html').css('padding-right',scrollWidth);
		$('body').css('overflow-y','hidden');
	}
}
function closeModal(){
	$('.modal-wrapper').fadeOut(200, function(){
		$('html').css('padding-right','');
		$('body').css('overflow-y','');
	});
}
$(document).on('click', '[data-modal]', function(e){
	e.preventDefault();
	var modal = $(this).data('modal');
	openModal(modal,e.target);
})
$(document).on('click', '.modal__close', closeModal);

$(document).on('mousedown', '.modal-wrapper', function(e){
	if(!$('.modal').is(e.target) && $('.modal').has(e.target).length === 0){
		closeModal();
	}
})
$(document).keydown(function(e){
	//Закрытие окна на Esc
	if(e.which == 27){
		closeModal();
	}
});