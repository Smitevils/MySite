<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SmiteVils - Веб программист, Фрилансер и просто хороший человек.</title>
	<meta name="description" content="Сайтик фрилансера. Куча разнообразных проектов и хобби. Здесь мое резюме и контакты.">
	<meta name="keywords" content="верстка, разработка, создание, сайтов, верстальщик, программист, web, coder, programmist, html5, css3, JQuery, JS, php.">
	<!-- Прошу почаще индексировать, плиз! -->
	<meta name="Document-state" content="Dynamic">
	<meta name="revisit-after" content="3 days">
	<!-- /Прошу почаще индексировать, плиз! -->
	<meta name="author" content="smitevils.ru">
	<!-- Стили CSS -->
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/style.css">
	<!-- jQuery -->
	<script src="js/jquery-2.1.3.min.js"></script>
	<!-- Стили прелоадера / Стили прелоадера в документе для максимально быстрой загрузки -->
	<style>
		#page-preloader {
		    position: fixed;
		    left: 0;
		    top: 0;
		    right: 0;
		    bottom: 0;
		    background: #fff;
		    z-index: 100500;
		}
		#page-preloader .img-preloader {
		    width: 100px;
		    height: 100px;
		    position: absolute;
		    left: 50%;
		    top: 50%;
		    margin: -50px 0 0 -50px;
		    /**/
			/* Размер и позиционирование */
		    font-size: 100px; /* 1em */
		    width: 1em;
		    height: 1em;
			/* Styles */
			border-radius: 50%;
			background: #FF4F72;
			background:
				-webkit-linear-gradient(#999 50%, #555 50%),
				-webkit-linear-gradient(#555 50%, #999 50%);
			background:
				-o-linear-gradient(#999 50%, #555 50%),
				-o-linear-gradient(#555 50%, #999 50%);
			background:
				linear-gradient(#999 50%, #555 50%),
				linear-gradient(#555 50%, #999 50%);
			background-position:0 0,100% 0;
			background-size: 50% 100%;
			background-repeat: no-repeat;
			box-shadow:
			inset 0 0 0 .12em rgba(0,0,0,0.2),
			0 0 0 .12em rgba(255,255,255,0.1);
			-webkit-animation: rotate 2s infinite linear;
			-o-animation: rotate 2s infinite linear;
			animation: rotate 2s infinite linear;
		}
		@-webkit-keyframes rotate {
		    from {-webkit-transform:  rotate(0);}	to {-webkit-transform: rotate(360deg);}
		}
	</style>
</head>
<body>
<!-- Прелоадер -->
<div id="page-preloader"><div class="img-preloader"><div class="spinner"></div></div></div>
<script>
	$(window).on('load', function () {
	    var $preloader = $('#page-preloader'),
	        $img_preloader   = $preloader.find('.img-preloader');
	    $img_preloader.fadeOut();
	    $preloader.delay(350).fadeOut('slow');
	});
</script>
<!-- /Прелоадер -->
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=8Kgp-thCnEEgLMCeYhtVn54J81q_lOZ9&width=600&height=450"></script>
</body>
</html>