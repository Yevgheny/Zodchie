<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zodchie
 */

?>

<?php 

$feedback_headline      = get_field('заголовок_отзывы');

?>

<section class="main-screen">
  <div class="carousel-inner" role="listbox">
			<div class="carousel-caption main-carousel-caption">
				<div class="main-caption-inside">
					<div class="main-caption-centered">
						<p><span>12</span> лет на рынке</p>
						<h1>ДОРОГО <br>КАЧЕСТВЕННО <br>В СРОКИ</h1>
					</div>
				</div>
			</div>
		</div>	
       <div id="main-slider" class="owl-carousel owl-theme main-slider-carousel">           

           <?php
           if( have_rows('слайд_на_главном_экране') ):
               while ( have_rows('слайд_на_главном_экране') ) : the_row();
           ?>		

         <div class="item">	
            <img src="<?php the_sub_field('slider_image') ?>">						
        </div>
         <?php endwhile; endif; ?>    		
    </div>

</section>
<section class="our-clients">
	<div class="container">
		<h2 class="main-headline our-clients-headline">Наши Клиенты</h2>

		<div class="row">
			<div class="col-md-4">
				<div class="col-xs-6  our-clients-item">
					<div class="our-clients-inner">
						<div class="our-clients-cell">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/dragon-capital.png" alt="">
						</div>
					</div>					
				</div>
				<div class="col-xs-6  our-clients-item">
				  <div class="our-clients-inner">
						<div class="our-clients-cell">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/feed-logo.png" alt="">
						</div>
					</div>
				</div>
					
			</div>
			<div class="col-md-4">
				<div class="col-xs-6  our-clients-item">
					<div class="our-clients-inner">
						<div class="our-clients-cell">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo_blue.png" alt="">
						</div>
					</div>
				</div>				
				<div class="col-xs-6 our-clients-item">
					<div class="our-clients-inner">
						<div class="our-clients-cell">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/private-bank.png" alt="">
						</div>
					</div>
				</div>
			</div>	
			<div class="col-md-4">
					<div class="col-xs-6  our-clients-item">
						<div class="our-clients-inner">
							<div class="our-clients-cell">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/priveks-bank.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xs-6  our-clients-item">
						<div class="our-clients-inner">
							<div class="our-clients-cell">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/office-solutions.jpg" alt="">
							</div>
						</div>
					</div>
				</div>		
		</div>

		<div class="row">	
			<div class="col-md-4 col-md-offset-2">
				<div class="col-xs-4  our-clients-item">
				  <div class="our-clients-inner">
						<div class="our-clients-cell">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-gazprom.png" alt="">
						</div>
					</div>					
				</div>
				<div class="col-xs-4  our-clients-item pt-item">
					<div class="our-clients-inner">
						<div class="our-clients-cell">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-ing.png" alt="">
						</div>
					</div>					 
				</div>
				<div class="col-xs-4  our-clients-item pt-item">
				  <div class="our-clients-inner">
						<div class="our-clients-cell">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/ukr-vertaleti.jpg" alt="">
						</div>
					</div>							  
				 </div>
			</div>
			<div class="col-md-4">				
				<div class="col-xs-6  our-clients-item pt-item">
					<div class="our-clients-inner">
						<div class="our-clients-cell">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/ukrechport.jpg" alt="">
						</div>
					</div>				  
				</div>
				<div class="col-xs-6  our-clients-item pt-item">
					<div class="our-clients-inner">
						<div class="our-clients-cell">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/zaporozhstal.jpg" alt="">
						</div>
					</div>				  
				</div>
			</div>		
		</div>					
	</div>
</section>
<section class="our-pride">

	<div class="container">
		<h2 class="main-headline our-pride-headline">Каждый проект - наша гордость</h2>
	</div>

	<div id="our-pride-1" class="owl-carousel owl-theme our-pride-1">			
        
           <?php
           if( have_rows('слайд_для_слайдера_1') ):
               while ( have_rows('слайд_для_слайдера_1') ) : the_row();
           ?>

         <div class="item">
             <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="pic-wrap">
                        <img src="<?php the_sub_field("фото_для_слайдера_1") ?>">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 our-pride-1-info">
                    <div class="carousel-caption">
                       <div class="main-centered">
                          <h3><?php the_sub_field("название_слайда_для_слайдера_1") ?></h3>
                          <h4>Задача:</h4>
                          <p><?php the_sub_field("задача_для_слайдера_1") ?></p>
                          <h4>Решение:</h4>
                          <p><?php the_sub_field("решение_для_слайдера_1") ?></p>
                          <h4>Результат:</h4>
                          <p><?php the_sub_field("результат_для_слайдера_1") ?></p>
                          <a href="<?php the_sub_field("кнопка_подробнее") ?>" class="btn btn-orange our-pride-slider-btn">Подробнее</a>
                      </div>
                    </div>
                </div>
            </div>
         </div>

         <?php endwhile; endif; ?>

    </div>

    <div id="our-pride-2" class="owl-carousel owl-theme our-pride-2">
         <?php
         if( have_rows('слайд_для_слайдера_2') ):
             while ( have_rows('слайд_для_слайдера_2') ) : the_row();
         ?>

       <div class="item"> 

            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <div class="our-pride-2-text-caption">
                        <div class="our-pride-2-text-centered">
                            <h3><?php the_sub_field("заголовок_для_слайдера_2") ?></h3>
                            <p><?php the_sub_field("текст_для_слайдера_2") ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 our-pride-2-info">
                    <div class="our-pride-2-caption">
                        <div class="picture-block">
                            <img src="<?php the_sub_field("фото_для_слайдера_2") ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>        

        <?php endwhile; endif; ?>

    </div>



    <div id="our-pride-3" class="owl-carousel owl-theme our-pride-3">

        <?php
         if( have_rows('слайд_для_слайдера_3') ):
             while ( have_rows('слайд_для_слайдера_3') ) : the_row();
         ?>

        <div class="item">
            <div class="row">
                 <div class="col-xs-12 col-md-6 col-md-push-6 our-pride-3-info">
                     <div class="carousel-caption">
                        <div class="main-centered">
                            <h3><?php the_sub_field("название_слайда_для_слайдера_3") ?></h3>
                            
                            <p><?php the_sub_field("текст_для_слайдера_3") ?></p>
                        </div>
                    </div>
                </div>
                 <div class="col-xs-12 col-md-6 col-md-pull-6">
                    <div class="pic-wrap">
                        <img src="<?php the_sub_field("фото_для_слайдера_3") ?>">
                     </div>
                </div>
                
            </div>
        </div>
           <?php endwhile; endif; ?>    
    </div>
</section>
<section class="main-page-feedback">
    <div class="container">
        <h2 class="main-headline main-page-feedback__headline"><?php echo $feedback_headline; ?></h2>
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">

                <div id="feedback-slider" class="owl-carousel owl-theme"> 
                   <?php
                       if( have_rows('слайдер_отзывы') ):
                         while ( have_rows('слайдер_отзывы') ) : the_row();
                     ?>
                    <div>
                        <div class="author-picture">
                            <img src="<?php the_sub_field("фото_клиента") ?>">
                        </div>
                        <div class="feed-back-slider-text">
                            <span><?php the_sub_field("имя_клиента") ?></span>
                            <p><?php the_sub_field("должность_клиента") ?></p>
                            <p><?php the_sub_field("отзыв_клиента") ?></p>
                        </div>
                    </div> 

                    <?php endwhile; endif; ?> 
                    
                </div>                
            </div>
        </div>
    </div>
</section>
<section class="main-page-footer-form">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="main-headline main-page-footer-headline">Получите бесплатно разрешение на строительство дома и сэкономьте при этом до 50 000 ГРН</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-1 main-page-footer-fitures">
				<h3>Поручите нам эту задачу и Вы получите:</h3>
				<ul>
					<li>100% гарантию на разрешение строительства дома</li>
					<li>экономию до 50 000 ГРН</li>
					<li>полную конфидециальность</li>
					<li>индивидуальный подход</li>
					<li>бесплатную консультацию</li>
				</ul>
			</div>
			<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0">
				<div class="main-footer-form-wrap">
					<h3><span>Оставьте заявку</span>
						<br>и наш специалист свяжется с Вами в течение 30 минут</h3>
						<form action="<?php echo get_stylesheet_directory_uri(); ?>/form-control/mail.php" method="post" class="main-footer-form" name="main-footer-form">	
							<!-- Hidden Required Fields -->
							<input type="hidden" name="project_name" value="Zodchie">
							<input type="hidden" name="admin_email" value="yevgheny78@gmail.com">
							<input type="hidden" name="form_subject" value="Заявка с сайта">
							<!-- END Hidden Required Fields -->
							<div class="input-group">
								<input type="text"  name="name" class="name" placeholder="Ваше имя" required>
							</div>
							
							<div class="input-group">
								<input type="tel"  name="phone" class="phone" id="phone" placeholder="Ваш телефон" required>
							</div>						
							
							<input type="hidden"  name="s_formi" value="Заказ звонка">
							<button type="submit" name="submit" class="btn btn-orange main-footer-form-btn">Оставить заявку</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
		$(".main-footer-form").validate();
		$(".modal-form-1").validate();		

		jQuery(function($){	   
			$("#phone").mask("+38(999) 999-99-99");	
			$("#phone-1").mask("+38(999) 999-99-99");	     
		});		
	</script>