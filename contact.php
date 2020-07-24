<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Супер блог</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="index.php" class="logo" style="text-transform: uppercase">Супер блог</a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<form>
								<input class="input" name="search" placeholder="">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
						<li>
							<a href="index.php">Главная</a>
						</li>
						<li class="has-dropdown">
							<a href="index.php">Статьи</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										
										<li><a href="6A8RHkvAcLI9M6zI4dNOWRg2.php">Тема: «Экспе...</a></li>
										

										<li><a href="lRaiJrktnrvG3f7g7.php">Тема: «Акцен...</a></li>
										

										<li><a href="5b8ffd338a219f8cc59ddfa1109c9a13.php">Тема: «Колле...</a></li>
										

										<li><a href="c98a88ab4dc5f80ae159debf6514bbca.php">Тема: «Почем...</a></li>
										

										<li><a href="NwqBK8pN3EAawNeqcaeMqxy.php">Тема: «Социа...</a></li>
										

									</ul>
								</div>
							</div>
						</li>

						<li><a href="contact.php">Контакты</a></li>
						<li><a href="terms.php">Условия и положения</a></li>
					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Контакты</h2>
						</div>
						<ul class="contact">
							<li><i class="fa fa-phone"></i> +4159830871200</li>
							<li><i class="fa fa-envelope"></i> <a href="#">info@<span class="server-name"></span></a></li>
							<li><i class="fa fa-map-marker"></i> 753443, Курская область, город Озёры, въезд Гагарина, 50</li>
						</ul>
					</div>

					<div class="section-row">
						<div class="section-title">
							<h2 class="title">Оставьте комментарий</h2>
						</div>
						<form  action="thanks.php">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input class="input" type="text" name="subject" placeholder="Тема">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="input" name="message" placeholder="Текст комментария"></textarea>
									</div>
									<button class="primary-button">Отправить</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">

					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Социальные медиа</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>356.1K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>251.9<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>314.5<br>Followers</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->


					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Рассылка</h2>
						</div>
						<div class="newsletter-widget">
							<form action="thanks.php">
								<p>Введите ваш email чтобы получать новые статьи нашего блога.</p>
								<input class="input" name="newsletter" placeholder="Email">
								<button class="primary-button">Подписаться</button>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->

					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Недавние посты</h2>
						</div>
						
						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="6A8RHkvAcLI9M6zI4dNOWRg2.php"><img src="./img/074-fg5davpgwga.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="6A8RHkvAcLI9M6zI4dNOWRg2.php">Тема: «Экспериментальный код: методология и особенности»</a></h3>
							</div>
						</div>
						<!-- /post -->
						

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="lRaiJrktnrvG3f7g7.php"><img src="./img/15-inqkiakrvlw.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="lRaiJrktnrvG3f7g7.php">Тема: «Акцентуированная личность как тест»</a></h3>
							</div>
						</div>
						<!-- /post -->
						

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="5b8ffd338a219f8cc59ddfa1109c9a13.php"><img src="./img/004-mviv9l5vtuo.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="5b8ffd338a219f8cc59ddfa1109c9a13.php">Тема: «Коллективное бессознательное как коллективное бессознательное»</a></h3>
							</div>
						</div>
						<!-- /post -->
						

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="c98a88ab4dc5f80ae159debf6514bbca.php"><img src="./img/174-ovlophvozw8.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="c98a88ab4dc5f80ae159debf6514bbca.php">Тема: «Почему активно воспитание?»</a></h3>
							</div>
						</div>
						<!-- /post -->
						


					</div>
					<!-- /post widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row justify-content-center">
				<div class="col-md-3 col-md-push-3">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="index.php" class="logo" style="text-transform: uppercase">Супер блог</a>
						</div>
						<ul class="contact-social">
							<li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-md-push-3">
					<div class="footer-widget">
						<h3 class="footer-title">Рассылка</h3>
						<div class="newsletter-widget">
							<form action="thanks.php">
								<p>Введите ваш email чтобы получать новые статьи нашего блога</p>
								<input class="input" name="newsletter" placeholder="Email">
								<button class="primary-button">Подписаться</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-8 col-md-push-3">
					<ul class="footer-nav">
						<li><a href="index.php">Главная</a></li>
						<li><a href="contact.php">Контакты</a></li>
						<li><a href="terms.php">Условия и положения</a></li>
						<li><a href="policy.php">Политика конфиденциальности</a></li>
						<li><a </li>
					</ul>
				</div>
				<div class="col-md-4 col-md-pull-8">
					<div class="footer-copyright">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved

					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
	<div class='cookie-banner'>
		<p>
			Сайт использует файлы cookie. Они позволяют узнавать вас и получать информацию о вашем пользовательском опыте.Продолжая просмотр сайта, я соглашаюсь с использованием файлов cookie владельцем сайта в соответствии с <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie">Политикой cookie</a>
		</p>
		<button class='close-cookie'>&times;</button>
	</div>
	<script>
		window.onload = function() {
			$('.close-cookie').click(function () {
				$('.cookie-banner').fadeOut();
			})
		}
	</script>
	<script>
		let elems = document.querySelectorAll('.server-name');
		elems.forEach((elem) => {
			elem.innerHTML = window.location.hostname
		})
	</script>
</body>

</html>
