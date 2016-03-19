<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Строительство  загородных  домов любой  сложности  “под  ключ”</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon/favicon.png" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/libs/bootstrap/css/bootstrap.min.css" />		
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/libs/owl-carousel/owl.carousel.css" />	
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/_media.css" />
	
</head>
<body>
	<header class="main-header">
		<div class="container">
			<div class="row nomargin">
				<div class="col-xs-7 col-sm-8 col-md-5 col-md-offset-0 logo-block">
					<div class="logo">
						<a href="wordpress/?page_id=8"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="логотип зодчие"></a>
					</div>
					<div class="logo-text hidden-xs-only">
						<p>Строительство  загородных  домов любой  сложности  “под  ключ”</p>						
					</div>
				</div>
				<div class="col-xs-5 col-sm-4 col-md-3 col-md-offset-4 header-phone">
					<span><i class="fa fa-phone"></i><a href="tel: +38 044 240 37 35"></a>+38 044 240 37 35</span>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 logo-text-mobile">
						<p>Строительство  загородных  домов любой  сложности  “под  ключ”</p>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar top-menu-line">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>					
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav nav-menu-top">
						<?php
						wp_nav_menu(array(
							'menu' => 'Главное меню',
							'menu_class' => 'main-nav_list'
							) );
							?>		

						<!--<li class="active"><a href="#">О компании <span class="sr-only">(current)</span></a></li>						
						<li><a href="#">Наши услуги</a></li>
						<li><a href="#">Выполненные проекты</a></li>
						<li><a href="#">Фотогалерея</a></li>
						<li><a href="#">Контакты </a></li>	-->					
					</ul>
				
					
				</div><!-- /.navbar-collapse -->
				<div class="clearfix"></div>
			</div><!-- /.container-fluid -->
		</nav>
	</header>
	