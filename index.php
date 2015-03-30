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
	<link rel="stylesheet" href="styles/preloader.css">
	<link rel="stylesheet" href="styles/normalize.css">
	<!--<link rel="stylesheet" href="styles/style.css">-->
	<link rel="stylesheet/less" href="styles/style.less">
	<!-- jQuery -->
	<script src="js/jquery-2.1.3.min.js"></script>
	<!-- LESS.js -->
	<script src="js/less.min.js"></script>
	<!-- Мои скримпты -->
	<script src="js/my_script.js"></script>
</head>
<body>
	<div id="page">
		<header>
			<a href="#"><div id="logo"></div></a>
			<!-- блок-обертка для меню -->
			<div id="menu" class="red">
				<nav>
					<ul>
						<li><a id="home" href="#">Главная</a></li>
						<li><a id="porfolio" href="#">Портфолио</a></li>
						<li><a id="projects" href="#">Проекты</a></li>
						<li><a id="blog" href="/my_blog/index.php" target="blank">Блог</a></li>
						<li><a id="contacts" href="#">Контакты</a></li>
					</ul>
				</nav>
			</div>
			<div class="clear"></div>
		</header>
		<div id="info">
			<h2 class="red">Привет Всем!</h2>
			<h4>Приветствую вас на своем сайте/ визитке/ портфолио.</h4>
			<h4>На данный момент я работаю над этой страничкой. Пока работает только ссылка на мой блог.</h4>
			<h4>Блог тоже самописный и продолжает развиваться. Там я выкладываю свякую всячину.</h4>
		</div>
		<div class="content">
			<!--  -->
			<div id="home_block" class="animate_1">
				<img src="img/chalk_1.png" width="100%" height="auto" alt="Изготовление сайтов">
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
			<div id="contacts_block" class="animate_1">
				<h2 class="orange">Контакты - Пока пусто</h2>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
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
</body>
</html>