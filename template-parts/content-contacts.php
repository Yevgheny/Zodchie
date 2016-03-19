<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zodchie
 */

?>

<?php 

$contacts_headline 			= get_field('заголовок');
$address_headline 			= get_field('заголовок_адрес');
$address_text 			    = get_field('текст_адрес');
$work_time              = get_field('заголовок_график');
$work_time_text         = get_field('текст_график');
$phone_headline         = get_field('заголовок_тел');
$phone_1                = get_field('телефон_1');
$phone_2                = get_field('телефон_2');
$email_headline         = get_field('заголовок_меил');
$email_text             = get_field('текст_меил');
$btn_headline           = get_field('заголовок_кнопка');
$btn_subheadline        = get_field('подзаголовок_кнопка');
$btn_text               = get_field('текст_на_кнопке');

?>

<section class="contacts-map">
	<div class="contacts-inner-block">
		<div class="contacts-inside">
			<div class="contacts-inside-centered">
				<h2 class="contacts-headline"><?php echo $contacts_headline; ?></h2>
				<ul>
					<li>
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						<div><span class="contacts-info"><?php echo $address_headline; ?></span>
							<br><?php echo $address_text; ?>
						</div>
					</li>
					<li>
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						<div><span class="contacts-info"><?php echo $work_time; ?></span>
							<br><?php echo $work_time_text; ?>
						</div>
					</li>
					<li>
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						<div><span class="contacts-info"><?php echo $phone_headline; ?></span>
							<br><?php echo $phone_1; ?> 
							<br><?php echo $phone_2; ?>
						</div>
					</li>
					<li>
						<span class="glyphicon glyphicon-envelope" ></span>
						<div><span class="contacts-info"><?php echo $email_headline; ?></span>
							<br><?php echo $email_text; ?>
						</div>
					</li>
				</ul>
				<h3><?php echo $btn_headline; ?></h3>
				<p><?php echo $btn_subheadline; ?></p>
				<a href="#" class="btn btn-orange contacts-btn"><?php echo $btn_text; ?></a>
			</div>
		</div>
	</div>
	<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=z6wbaRaiFW6Vi5mqOYpdjyve-G-zxtRU&width=100%&height=600&lang=ru_RU&sourceType=constructor"></script>
</section>
