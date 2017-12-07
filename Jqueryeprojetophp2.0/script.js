$(document).ready(function(){
	$('.parent').hover(function(){
		$('.submenu').slideDown('fast');

	})
	$('.parent').mouseleave(function(){
			$('.submenu').slideUp('fast');
	})

		$('.parent2').hover(function(){
		$('.submenu2').slideDown('fast');

	})
	$('.parent2').mouseleave(function(){
			$('.submenu2').slideUp('fast');
	})

	$('.click').click(function(){
		$('.modal').removeClass('escondido');
	})
	$('.modal').click(function(){
		$('.modal').addClass('escondido');
		})
	})

