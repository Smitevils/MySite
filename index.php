<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<!-- viewport -->
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
	<link rel="stylesheet" href="styles/preloader.css">
	<link rel="stylesheet" href="styles/normalize.css">
	<!-- == Стиль компилирую с из less с помощью программы koala == -->
	<link rel="stylesheet" href="styles/style.css">
	<!-- <link rel="stylesheet/less" href="styles/style.less"> -->
	<!-- jQuery -->
	<script src="scripts/js/jquery-2.1.3.min.js"></script>
	<!-- LESS.js -->
	<script src="scripts/js/less.min.js"></script>
	<!-- Мои скримпты -->
	<script src="scripts/js/my_script.js"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<!-- Мои скримпты -->
	<script src="scripts/js/fancybox.js"></script>
</head>
<body>
	<div id="page">
		<header>
			<a href="#"><div id="logo" class="animate_0"></div></a>
			<!-- блок-обертка для меню -->
			<div id="menu" class="red">
				<nav>
					<ul>
						<li><a id="home" href="#">Главная</a></li>
						<li><a id="porfolio" href="#">Портфолио</a></li>
						<!-- <li><a id="projects" href="#">Проекты</a></li> -->
						<li><a id="blog" href="http://blog.smitevils.ru/" target="blank">Блог</a></li>
						<li><a id="contacts" href="#">Контакты</a></li>
					</ul>
				</nav>
			</div>
			<div class="clear"></div>
		</header>
		<div id="info">
			<h2 class="red">Привет Всем!</h2>
			<h4>Приветствую вас на своем сайте.</h4>
			<h4>Можете посмотреть на мои работы или написать мне.</h4>
			<h4>Есть и ссыылочка на мой персональный блог.</h4>
		</div>
		<div class="content">
			<div id="home_block" class="animate_1">
				<!--<img src="img/chalk_1.png" width="100%" height="auto" alt="Изготовление сайтов">-->
				<?php include_once 'img\svg\svg_slider_1.php'; ?>
			</div>
			<div id="portfolio_block" class="animate_4">
				<h2 class="orange">Верстка Web страниц</h2>
				<div class="window_wrap">
					<a href="portfolio/websites/works/19/index.html" target="blank">
						<div class="window">
							<img src="img/websites/1.jpg" width="100%" height="auto" alt="web">
						</div>
					</a>
				</div>
				<div class="window_wrap">
					<a href="portfolio/websites/works/27/index.html" target="blank">
						<div class="window">
							<img src="img/websites/2.jpg" width="100%" height="auto" alt="web">
						</div>
					</a>
				</div>
				<div class="window_wrap">
					<a href="portfolio/websites/works/30/index.html" target="blank">
						<div class="window">
							<img src="img/websites/3.jpg" width="100%" height="auto" alt="web">
						</div>
					</a>
				</div>
				<div class="window_wrap">
					<a href="portfolio/websites/works/13/index.php" target="blank">
						<div class="window">
							<img src="img/websites/4.jpg" width="100%" height="auto" alt="web">
						</div>
					</a>
				</div>
				<div class="window_wrap">
					<a href="portfolio/websites/works/15/index.php" target="blank">
						<div class="window">
							<img src="img/websites/5.jpg" width="100%" height="auto" alt="web">
						</div>
					</a>
				</div>
				<div class="window_wrap">
					<a href="portfolio/websites/works/29/index.html" target="blank">
						<div class="window">
							<img src="img/websites/6.jpg" width="100%" height="auto" alt="web">
						</div>
					</a>
				</div>
			</div>
			<div id="projects_block" class="animate_1">
				<h2 class="orange">Проекты - Тут пока ничего</h2>
			</div>
			<div id="contacts_block" class="animate_1 blue">
				<h2 class="orange">Напиши или позвони...</h2>
				<!-- Контейнер с контактом :) -->
				<div class="contact_wrap">
					<div class="contact_img">
						<img src="img/icons/circle/vk.png" alt="vk">
					</div>
					<div class="contact_text">
						<a href="http://vk.com/smitevilsvk" target="blank">vk.com/smitevilsvk</a>
					</div>
				</div>
				<!-- Контейнер с контактом :) -->
				<div class="contact_wrap">
					<div class="contact_img">
						<img src="img/icons/circle/fb.png" alt="fb">
					</div>
					<div class="contact_text">
						<a href="https://www.facebook.com/SmiteVils" target="blank">facebook.com/SmiteVils</a>
					</div>
				</div>
				<!-- Контейнер с контактом :) -->
				<div class="contact_wrap">
					<div class="contact_img">
						<img src="img/icons/circle/tel.png" alt="tel">
					</div>
					<div class="contact_text">
						+7 (960) 472-63-24
					</div>
				</div>
				<!-- Контейнер с контактом :) -->
				<div class="contact_wrap">
					<div class="contact_img">
						<img src="img/icons/circle/sc.png" alt="scype">
					</div>
					<div class="contact_text">
						SmiteVils
					</div>
				</div>
				<!-- Контейнер с контактом :) -->
				<div class="contact_wrap">
					<div class="contact_img">
						<img src="img/icons/circle/mail.png" alt="mail">
					</div>
					<div class="contact_text">
						SmiteVils@yandex.ru
					</div>
				</div>
				<div class="clear"></div>
				<!--  -->
				<h2 class="orange">А можешь оставь заявку, и я напишу тебе сам :)</h2>
				<form action="mail.php" method="get">
					<div class="form_left">
						<input type="text" id="name" name="name" placeholder="Ваше имя:"><br>
						<input type="text" id="email" name="email" placeholder="Ваш email:"><br>
						
					</div>
					<div class="form_right">
						<textarea name="text" id="text" placeholder="Сообщение:"></textarea>
					</div>
					<div class="form_left">
						<!-- <input type="submit" class="submit"><br> -->
						<div class="submit">Отправить</div>
					</div>
					<div class="clear"></div>
				</form>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<!-- POPUP -->
	<div id="popup" style="display: table-cell; vertical-align: middle;"><div id="popup_text"></div></div>
	<a href="#popup" id="popup_link" class="fancybox" style="display: none;">ссылка</a>
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
	<!-- Yandex Metrica and Google Analytics -->
	<?php
		include_once("scripts/php/metrika.php");
		include_once("scripts/php/analyticstracking.php");
	?>
</body>
</html>