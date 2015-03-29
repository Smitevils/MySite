$( document ).ready(function() {
	/* === Скрипт смены цвета === */
	var color = $('.red, .yellow, .green, .orange');
	// При клике по ссылке #home
	$("#home").click(function() {
		color.removeClass("red yellow green orange").addClass("red");
	});
	// При клике по ссылке #porfolio
	$("#porfolio").click(function() {
		color.removeClass("red yellow green orange").addClass("yellow");
	});
	// При клике по ссылке #projects
	$("#projects").click(function() {
		color.removeClass("red yellow green orange").addClass("green");
	});
	// При клике по ссылке #contacts
	$("#contacts").click(function() {
		color.removeClass("red yellow green orange").addClass("orange");
	});

	/* === Скрипт смены текста - инфо === */
	$("#home").click(function() {
		$('#info').html("<h2 class='red animate_2'>Привет Всем!</h2><h4 class='animate_1'>Приветствую вас на своем сайте/ визитке/ портфолио.</h4><h4 class='animate_1'>На данный момент я работаю над этой страничкой. Пока работает только ссылка на мой блог.</h4>");
	});
	$("#porfolio").click(function() {
		$('#info').html("<h2 class='yellow animate_3'>Мои работы</h2><h4 class='animate_1'>Что и как я делаю? Примеры верстки, дизайна и других работ можно посмотреть здесь.</h4>");
	});
	$("#projects").click(function() {
		$('#info').html("<h2 class='green animate_2'>Проекты</h2><h4 class='animate_1'>Тут опишу свои проекты. Пока описывать некогда...</h4>");
	});
	$("#contacts").click(function() {
		$('#info').html("<h2 class='orange animate_3'>Мои контакты</h2><h4 class='animate_1'>Как со мной связаться? Да, тысяча способов. Тут и мой телефон, skype, социальный сети.</h4><h4 class='animate_1'>Можно так же и старую добрую заявочку оставить. </h4>");
	});

});