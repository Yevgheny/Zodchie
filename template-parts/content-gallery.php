<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zodchie
 */

?>

<section class="projects-complited gallery">	
	
		<div class="container">
			<div id="sync1" class="owl-carousel gallery-slider">

			  <?php
           if( have_rows('слайдер_фотогалерея') ):
               while ( have_rows('слайдер_фотогалерея') ) : the_row();
           ?>		

				<div class="item sync1-item">
					<img src="<?php the_sub_field('фото_слайда_фотогалерея') ?>">			
				</div>

			 <!--   <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-big-pic-1.jpg" alt="">
			  </div>

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-big-pic-1.jpg" alt="">
			  </div>

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-big-pic-1.jpg" alt="">
			  </div>

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-big-pic-1.jpg" alt="">
			  </div>

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-big-pic-1.jpg" alt="">
			  </div> 

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-big-pic-1.jpg" alt="">
			  </div> 

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-big-pic-1.jpg" alt="">
			  </div> -->
        <?php endwhile; endif; ?>
			</div>
			
			<div id="sync3" class="owl-carousel">
        
				<?php
					if( have_rows('слайдер_фотогалерея') ):
						while ( have_rows('слайдер_фотогалерея') ) : the_row();
				?>

			  <div class="item">
			  	<img class="responsive-img" src="<?php the_sub_field('фото_слайда_фотогалерея') ?>">
			  </div>

			 <!--  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-small-pic-2.jpg" alt="">
			  </div>

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-small-pic-3.jpg" alt="">
			  </div>

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-small-pic-4.jpg" alt="">
			  </div>

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-small-pic-5.jpg" alt="">
			  </div>

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-small-pic-6.jpg" alt="">
			  </div>

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-small-pic-7.jpg" alt="">
			  </div>

			  <div class="item">
			  	<img src="<?php echo get_stylesheet_directory_uri() ?>/images/gallery-slider-small-pic-7.jpg" alt="">
			  </div> -->
			  <?php endwhile; endif; ?>
			</div>
		</div>
	
</section>
