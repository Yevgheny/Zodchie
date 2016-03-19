<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zodchie
 */

?>

</div><!-- #content -->

<!-- Modals -->


<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <button type="button" class="close" data-toggle="modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <h4 class="modal-title">Чтобы дать Вам подробную информацию о разработке индивидуального проекта, нам важно услышать ваше видение и пожелания</h4>
      <p class="modal-text">Введите  данные и наш специалист свяжется с вами в течение 30 минут</p>	
      <form action="<?php echo get_stylesheet_directory_uri() ?>/form-control/mail.php" method="post" class="modal-form-1" name="modal-form">	
       <!-- Hidden Required Fields -->
       <input type="hidden" name="project_name" value="Zodchie">
       <input type="hidden" name="admin_email" value="yevgheny78@gmail.com">
       <input type="hidden" name="form_subject" value="Заявка с сайта">
       <!-- END Hidden Required Fields -->
       <div class="form-group  form-group-1">
          <input type="text"  name="name" class="name" placeholder="Ваше имя" required>
      </div>

      <div class="form-group  form-group-2">
          <input type="digits"  name="phone" id="phone-1" class="phone" placeholder="Ваш телефон" required>
      </div>				
      <input type="hidden"  name="s_formi" value="Заявка с сайта">
      <button type="submit" name="submit" class="btn btn-orange modal-btn">Оставить заявку</button>
  </form>			
</div>
</div>
</div>

<!--  <div class="modal fade" id="modal-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-toggle="modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title"></h4>
				<p class="modal-text"></p>				
			</div>
			<div class="modal-content">
				<form action="" method="post" class="modal-form-1" name="modal-form">	
					
					<div class="form-group">
						<input type="text"  name="name" placeholder="Ваше имя" required>
					</div>
					
					<div class="form-group">
						<input type="text"  name="phone" id="phone-1" placeholder="Ваш телефон" required>
					</div>				
					
					<button type="submit" name="submit" class="btn btn-orange modal-btn">Оставить заявку</button>
				</form>
			</div>
		</div>
	</div>
</div>-->


<footer class="main-footer">
	<div class="container">
		<div class="row footer-descktop-block" id="footer-display-block">
			<div class="col-md-2 between-wrap">
				<a href="wordpress/?page_id=18">О компании</a>
				<a href="wordpress/?page_id=10">Наши услуги</a>
				<a href="wordpress/?page_id=18">Выполненные проекты</a>
				<a href="wordpress/?page_id=14">Фотогалерея</a>
				<a href="wordpress/?page_id=12">Контакты</a>
			</div>

			<div class="col-md-1 footer-block  footer-block--1">
				<a href="wordpress/?page_id=18">О компании</a>
				<a href="wordpress/?page_id=10">Наши услуги</a>
			</div>
			<div class="col-md-2 footer-block  footer-block--2">
				<a href="wordpress/?page_id=18">Выполненные проекты</a>
				<a href="wordpress/?page_id=14">Фотогалерея</a>
			</div>
			<div class="col-md-2 footer-block  footer-block--3">
				<a href="wordpress/?page_id=12">Контакты</a>
			</div>
			<div class="col-md-2 footer-logo">
				<a href="wordpress/?page_id=8"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="logo"></a>
			</div>
			<div class="col-md-3 col-md-offset-2 between-wrap-2">
				<p><span>Киев, ул. Щорся, 32в, 2 этаж</span></p> 
				<p><span>info@zodchie.com.ua</span></p>
				<p><span>+38 (044) 240 37 35</span></p>
				<p><span>+38 (044) 569 60 90</span></p>
			</div>
			<div class="col-md-2 col-md-offset-1 footer-block  footer-block--5">
				<p><span>Киев, ул. Щорся, 32в, 2 этаж</span></p> 
				<p><span>info@zodchie.com.ua</span></p>
			</div>
			<div class="col-md-2 footer-block  footer-block--6">
				<p><span>+38 (044) 240 37 35</span></p>
				<p><span>+38 (044) 569 60 90</span></p>
			</div>			
		</div>
		<div class="row footer-mobile-wrap">
			<div class="col-xs-10 col-xs-offset-1 footer-menu-mobile">
				<a href="wordpress/?page_id=18">О компании</a>
				<a href="wordpress/?page_id=10">Наши услуги</a>
				<a href="wordpress/?page_id=18">Выполненные проекты</a>
				<a href="wordpress/?page_id=14">Фотогалерея</a>
				<a href="wordpress/?page_id=12">Контакты</a>
			</div>
			<div class="hidden-xs col-sm-3 footer-logo-mobile" id="footer-logo-mobile">
				<a href="wordpress/?page_id=8"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="logo"></a>
			</div>
			<div class="col-xs-10 col-xs-offset-1 col-sm-4 footer-mobile-address">
				<p><span>Киев, ул. Щорся, 32в, 2 этаж</span></p> 
				<p><span>info@zodchie.com.ua</span></p>
				<p class="hidden-sm"><span>+38 (044) 240 37 35</span></p>
				<p class="hidden-sm"><span>+38 (044) 569 60 90</span></p>
			</div>
			<div class="hidden-xs col-sm-3 footer-mobile-phone" id="footer-mobile-phone">
				<p>
					<span>+38 (044) 240 37 35</span>
				</p>
				<p>
					<span>+38 (044) 569 60 90</span>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="row">
			<div class="col-md-5 col-lg-5 col-md-offset-3 col-lg-offset-4 developed-by">
				<span>© 2015 Зодчие. Все права защищены</span> <span>Разработано в <a href="http://geniusstudio.me/">Geniusstudio</a></span>
			</div>
		</div>
		
	</div>	
</footer>
<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.2.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl-carousel/owl.carousel.min.js"></script>	
	<script src="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/js/bootstrap.min.js"></script>	
	
		

    <script src="<?php echo get_template_directory_uri(); ?>/js/myscripts.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/messages_ru.min.js"></script>
    <script>
        $(".main-footer-form").validate();
        $(".modal-form-1").validate(); 

        $.validator.addClassRules({
	        	name: {
					    required: true,
					    minlength: 2					    
				  },
				  	phone: {
					    required: true,
					    digits: true,
					    minlength: 12,
					    maxlength: 12
				  }
        });  
         
    </script>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>