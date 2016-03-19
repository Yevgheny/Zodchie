<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zodchie
 */

?>

<!-- Advanced Custom Fields -->
<?php 

$project_image          = get_field('фото_проекта');
$project_title 					= get_field('наименование_главный_экран');
$project_title 					= get_field('наименование_главный_экран');
$project                = get_field('проект');
$type_of_work           = get_field('тип_работы');
$total_square           = get_field('общая_площадь');
$construction_period    = get_field('срок_строительства');
$project_headline       = get_field('заголовок_страницы');
$general_info           = get_field('общая_информация');

?>

<section class="project-page-main-screen">
	<?php if( !empty($project_image) ) : ?>

		<img src="<?php echo $project_image['url']; ?>" alt="<?php echo $project_image['alt']; ?>">

	<?php endif; ?>

	
	<div class="project-page-inner-block">
		<div class="inner-block-inside">
			<div class="inner-block-centered">
				<h2 class="progect-page-headline"> <?php echo $project_title; ?> </h2>
				<ul>
					<li>
						<span class="project-info-ico project-info-ico--1"></span>
						<span class="project-info">Проект</span><?php echo $project; ?>
					</li>
					<li>
						<span class="project-info-ico project-info-ico--2"></span>
						<span class="project-info">Тип работы</span><?php echo $type_of_work; ?>
					</li>
					<li>
						<span class="project-info-ico project-info-ico--3"></span>
						<span class="project-info">Общая площадь</span><?php echo $total_square; ?>
					</li>
					<li>
						<span class="project-info-ico project-info-ico--4"></span>
						<span class="project-info">Срок строительства</span><?php echo $construction_period; ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section> 
<section class="project-period">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-ms-offset-1  project-period-disc">
				<h2 class="project-period__headline"><?php echo $project_headline; ?></h2>
				<?php echo $general_info; ?>
			</div>
		</div>
	</div>

	<article class="project-stage">
		<div class="container">
			<div class="row">
				<div class="col-md-6 project-statement">
					<span class="project-date">28 ноября</span>
					<h3>(Название какое-то)</h3>
					<p>Уютный домашний вид создается при помощи больших выносов кровли, просторной террасы, высокого эркера и балкона. Все помещения в доме расположены вокруг роскошного двухсветного пространства. Первый этаж отведен для общественной зоны и вспомогательных помещений, а на втором этаже находятся комфортные спальни.</p>
				</div>
				<div class="col-md-6 project-pic">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/project-stage-1-pic.jpg" alt="Этапы строительства">
				</div>
			</div>
		</div>
	</article>

	<article class="project-stage">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6 project-statement">
					<span class="project-date">15 декабря</span>
					<h3>(Название какое-то)</h3>
					<p>Уютный домашний вид создается при помощи больших выносов кровли, просторной террасы, высокого эркера и балкона. Все помещения в доме расположены вокруг роскошного двухсветного пространства. Первый этаж отведен для общественной зоны и вспомогательных помещений, а на втором этаже находятся комфортные спальни.</p>
				</div>
				<div class="col-md-6 col-md-pull-6 project-pic">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/project-stage-2-pic.jpg" alt="Этапы строительства">
				</div>
			</div>
		</div>
	</article>

	<article class="project-stage">
		<div class="container">
			<div class="row">
				<div class="col-md-6 project-statement">
					<span class="project-date">28 ноября</span>
					<h3>(Название какое-то)</h3>
					<p>Уютный домашний вид создается при помощи больших выносов кровли, просторной террасы, высокого эркера и балкона. Все помещения в доме расположены вокруг роскошного двухсветного пространства. Первый этаж отведен для общественной зоны и вспомогательных помещений, а на втором этаже находятся комфортные спальни.</p>
				</div>
				<div class="col-md-6 project-pic">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/project-stage-3-pic.jpg" alt="Этапы строительства">
				</div>
			</div>
		</div>
	</article>

	<article class="project-stage">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6 project-statement">
					<span class="project-date">15 декабря</span>
					<h3>(Название какое-то)</h3>
					<p>Уютный домашний вид создается при помощи больших выносов кровли, просторной террасы, высокого эркера и балкона. Все помещения в доме расположены вокруг роскошного двухсветного пространства. Первый этаж отведен для общественной зоны и вспомогательных помещений, а на втором этаже находятся комфортные спальни.</p>
				</div>
				<div class="col-md-6 col-md-pull-6 project-pic">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/project-stage-4-pic.jpg" alt="Этапы строительства">
				</div>
			</div>
		</div>
	</article>
</section>
<section class="project-feedback">
	<div class="container">
		<h2 class="main-headline  project-feedback__headline">Благодарность от нашего клиента</h2>
		<div class="col-md-6 col-md-offset-1">
			<h3>Заголовок</h3>
			<p>Я потратил очень много времени, раздумывая над тем, из каких материалов лучше строить дом, пока не проконсультировался со специалистами компании «Зодчие». После разговора со специалистками, я четко знал о недостатках и преимуществах каждого отдельного решения.</p>
			<p>а потому легко смог сделать свой выбор. В моем случае это был газоблок. Сейчас объект, о котором идет речь, построен, и уже в ближайшее время я рассчитываю ввести его в эксплуатацию. Среди преимуществ сотрудничества с компанией «Зодчие» хотелось бы отметить актуальность предоставляемой информации и профессионализм представителей.</p>
			<p>Сейчас объект, о котором идет речь, построен, и уже в ближайшее время я рассчитываю вести его в эксплуатацию.</p>
			<a href="#" class="more-feedbacks">Посмотреть отзыв в оригинале</a>
		</div>
		<div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-1">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/progect-feedback-letter.png" alt="отзыв клиента">
		</div>
	</div>
</section>-
<section class="latest-projetcs">
	<div class="container">
		<h2 class="main-headline latest-projetcs__headline">Наши последние проекты</h2>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-md-7 col-sm-offset-2  col-md-offset-0">
				<div class="col-xs-6 col-sm-6 col-md-4 our-project our-project--1">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/our-projects-pic-1.jpg" alt="наши проекты">
					</a>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-4 our-project our-project--2">
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/our-projects-pic-2.jpg" alt="наши проекты">
					</a>
				</div>

				<div class="hidden-xs hidden-sm our-project our-project--3"> 					
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/our-projects-pic-3.jpg" alt="наши проекты">
					</a> 					
				</div>
			</div>

			<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-md-5  col-sm-offset-2 col-md-offset-0">
				<div class="col-xs-6 col-sm-6 col-md-6 our-project our-project--4">
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/our-projects-pic-4.jpg" alt="наши проекты">
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 our-project our-project--5">
					<a href="">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/our-projects-pic-5.jpg" alt="наши проекты">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="any-questions">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 questions-block">
				<h3>Появились вопросы?</h3>
				<p>Оставьте заявку прямо сейчас, специалист компании "Зодчие" свяжется с вами в течение 30 минут и ответит на все ваши вопросы</p>
				<a href="#" data-toggle="modal" data-target="#modal-1" class="btn btn-orange questions-btn">Оставить заявку</a>
			</div>
		</div>
	</div>
</section>
