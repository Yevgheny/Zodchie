<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zodchie
 */

?>
<!-- Advanced Custom Fields -->
<?php 
$headline 						= get_field('заголовок');
$service_1_headline		= get_field('услуга_1_заголовок');
$service_1_disc				= get_field('услуга_1_описание');
$service_2_headline		= get_field('услуга_2_заголовок');
$service_2_disc				= get_field('услуга_2_описание');
$service_3_headline		= get_field('услуга_3_заголовок');
$service_3_disc				= get_field('услуга_3_описание');
$service_4_headline		= get_field('услуга_4_заголовок');
$service_4_disc				= get_field('услуга_4_описание');
$service_5_headline		= get_field('услуга_5_заголовок');
$service_5_disc				= get_field('услуга_5_описание');
$post_headline				= get_field('вывод');
$specialization_2			= get_field('специализация_2_заголовок');
$tab_1_title					= get_field('кнопка-1_наименование');
$tab_1_disc						= get_field('кнопка-1_описание');
$tab_2_title					= get_field('кнопка-2_наименование');
$tab_2_disc						= get_field('кнопка-2_описание');
$tab_3_title					= get_field('кнопка-3_наименование');
$tab_3_disc						= get_field('кнопка-3_описание');

?>

<section class="services">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="main-headline service-headline"><?php echo $headline; ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="service-features-wrap">
				<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0  service-features service-features--1">
					<h3><?php echo $service_1_headline; ?></h3>
					<p><?php echo $service_1_disc; ?></p>
				</div>
				<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 col-md-push-4  service-features service-features--2">
					<h3><?php echo $service_2_headline; ?></h3>
					<p><?php echo $service_2_disc; ?></p>
				</div>
				<div class="clearfix"></div>
				<div class="col-xs-10 col-xs-offset-2 col-md-6 col-md-offset-0 col-md-pull-3 service-picture">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/service-fiatures-pic.png" alt="наша специализация">
				</div>
				
				<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0  service-features service-features--3">
					<h3><?php echo $service_3_headline; ?></h3>
					<p><?php echo $service_3_disc; ?></p>
				</div>
				<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4  service-features service-features--4">
					<h3><?php echo $service_4_headline; ?></h3>
					<p><?php echo $service_4_disc; ?></p>
				</div>
				<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0  service-features service-features--5">
					<h3><?php echo $service_5_headline; ?></h3>
					<p><?php echo $service_5_disc; ?></p>
				</div>
			</div>
		</div> <!--row-->
		<h3 class="service-slogan"><?php echo $post_headline; ?></h3>
		<a href="#" data-toggle="modal" data-target="#modal-1" class="btn btn-orange service-btn">Подробнее</a>
	</div>
</section>
<section class="our-specialization">
	<div class="container">
		<h2 class="main-headline our-specialization__headline"><?php echo $specialization_2; ?></h2>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 services-tab-menu">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="nav-present active" id="nav-present-1">
						<a href="#nav-tabs-item-1" aria-controls="nav-tabs-item-1" role="tab" data-toggle="tab"><?php echo $tab_1_title; ?></a>
					</li>
					<li role="presentation" class="nav-present" id="nav-present-2">
						<a href="#nav-tabs-item-2" aria-controls="nav-tabs-item-1" role="tab" data-toggle="tab"><?php echo $tab_2_title; ?></a>
					</li>
					<li role="presentation" class="nav-present" id="nav-present-3">
						<a href="#nav-tabs-item-3" aria-controls="nav-tabs-item-3" role="tab" data-toggle="tab"><?php echo $tab_3_title; ?></a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="nav-tabs-item-1">
						<?php echo $tab_1_disc; ?>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="nav-tabs-item-2">
						<?php echo $tab_2_disc; ?>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="nav-tabs-item-3">
						<?php echo $tab_3_disc; ?>
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>
<section class="service-call-back">
	<div class="container">
		<h3>Получите бесплатную консультацию и узнайте более детальную информацию  о наших услугах</h3>
		<a href="#" data-toggle="modal" data-target="#modal-1" class="btn btn-orange service-call-back-btn">Получить консультацию</a>
	</div>
</section>
