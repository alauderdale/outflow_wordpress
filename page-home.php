<?php
/*
Template Name: Home
 */
?>


<?php get_header(); ?>

<script>
  $(document).ready(function(){
  	
  	$('body').pageScroller({
  		navigation: '#nav',
  		animationSpeed: 1900
  	});
  
  	$('a').click(function(){
  	$('html, body').animate({
  	scrollTop: $( $.attr(this, 'href') ).offset().top
  	}, 1900);
  	return false;
  	});

  	//animate awesomeness
          	var controller = $.superscrollorama({
          	triggerAtCenter: true,
          	playoutAnimations: true,
          	reverse: false
          	});
          
          	controller.addTween('.circle-container', TweenMax.from( $('.circle-1'), .8, {scale:0.35, opacity: 0, ease:Expo.easeOut}), 0, -100);
          
          	controller.addTween('.circle-container', TweenMax.from( $('.circle-2'), .8, {scale:0.35, opacity: 0,  ease:Expo.easeOut}), 0, -100);
          
          	controller.addTween('.circle-container', TweenMax.from( $('.circle-3'), .8, {scale:0.35, opacity: 0,  ease:Expo.easeOut}), 0, -100);
          
          	controller.addTween('.circle-container', TweenMax.from( $('.circle-4'), .8, {scale:0.35, opacity: 0, ease:Expo.easeOut}), 0, -100);
  
  
  });
</script>
<!-- home -->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<section class='section hero' data-speed='3' data-type='background' style="background-image:url('<?php
                        $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                        echo $imgsrc2[0];
                        ?>');">
		  <div class='container'>
		    <div class='row'>
		      <div class='col-lg-12'>
		        <div class='double-margin-top'>
		          <div class='text-center'>
		              <h1 class='jumbo-text'>
		                <?php the_title(); ?> 
		              </h1>
		              <h4 class='primary-text-color bold-font-name'>
			              <?php echo get_post_meta($post->ID, 'hero_sub', true); ?>
		            	</h4>
		            <a class='down-arrow' href='#stats'>
		              <i class='icon-circle-arrow-down'></i>
		            </a>
		          </div><!-- end text center -->
		        </div>
		      </div>
		    </div>
		  </div>
		</section>
<!--end the loop-->
	<?php endwhile; ?>
<?php endif; ?>
	<!-- we are -->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
  <section class='stats' id='stats'>
	  <div class='container'>
	    <div class='row'>
	      <div class='col-lg-12'>
	        <div class='row'>
	          <div class='col-lg-1'></div>
	          <div class='col-lg-10'>
	            <div class='text-center'>
	              <h1 class='jumbo-text'>
	                <?php echo get_post_meta($post->ID, 'we_are_title', true); ?>
	              </h1>
	              <p class='lead'>
	                <?php echo get_post_meta($post->ID, 'we_are_text', true); ?>
	              </p>
	            </div>
	          </div>
	          <div class='col-1'></div>
	        </div>
	      </div>
	    </div>
	  </div>
</section>
<!--end the loop-->
	<?php endwhile; ?>
<?php endif; ?>
<!-- mission -->
<?php
 $missionLoop = new WP_Query( array( 
   	'post_type' => 'mission', 
   	'posts_per_page' => '1'
 	));
?>
<?php while ( $missionLoop->have_posts() ) : $missionLoop->the_post(); ?>
	<section class='section mission' data-speed='3' data-type='background' id='mission' style="background-image:url(<?php echo get_post_meta($post->ID, 'upload_image', true); ?>);">
		<div class='container'>
		  <div class='row'>
		    <div class='col-lg-12'>
		      <div class='row'>
		        <div class='col-lg-1'></div>
		        <div class='col-lg-10'>
		          <div class='text-center'>
		          	<div class='circle-container text-center'>
			            <div class='circle-1 circle'></div>
			            <div class='circle-2 circle'></div>
			            <div class='circle-3 circle'></div>
			            <div class='circle-4 circle'></div>
			          </div>
		            <h1 class='jumbo-text'>
		              <?php the_title(); ?>
		            </h1>
<!-- 		            <a class='btn btn-primary btn-lg margin-bottom' href='<?php echo get_post_meta($post->ID, 'button_link', true); ?>'>
		              <?php echo get_post_meta($post->ID, 'button_text', true); ?>
		            </a> -->
		            <p class='extra-bold-font-name lead'>
		              <?php echo get_post_meta($post->ID, 'sub_text', true); ?>
		            </p>
		            <?php the_content(); ?>
		            <a class='down-arrow' href='#about'>
		              <i class='icon-circle-arrow-down'></i>
		            </a>
		          </div>
		        </div>
		        <div class='col-lg-1'></div>
		      </div>
		    </div>
		  </div>
		</div>
	</section>
<?php endwhile; ?>
<!-- icons -->
<section class='icons no-padding-bottom' id='about'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
      	<div class='contact-text text-center double-margin-bottom padding-bottom'>
          <h1 class='jumbo-text'>
          	<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
            		<?php echo get_post_meta($post->ID, 'strategy_heading', true); ?>
            <!--end the loop-->
							<?php endwhile; ?>
						<?php endif; ?>
          </h1>
        </div>
        <div class='row'>
        	<?php
           $homeIconLoop = new WP_Query( array( 
	           	'post_type' => 'home_icon', 
	           	'posts_per_page' => '3'
           	));
          ?>
          <?php while ( $homeIconLoop->have_posts() ) : $homeIconLoop->the_post(); ?>
	          <div class='col-lg-4 col-sm-4 col-md-4 col-xs-4'>
	            <div class='text-center' style="padding:20px;">
	            	<div class="margin-bottom thumb-icon">
	            		<?php the_post_thumbnail(); ?>
	            	</div>
	              <h3>
	                <?php the_title(); ?>
	              </h3>
	              <p class='no-margin-bottom'>
	                <?php the_content(); ?>
	              </p>
	            </div>
          	</div><!-- end col lg 4 -->
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact -->
<?php
 $contactLoop = new WP_Query( array( 
   	'post_type' => 'contact', 
   	'posts_per_page' => '1'
 	));
?>
<?php while ( $contactLoop->have_posts() ) : $contactLoop->the_post(); ?>
<section class='section contact' id='contact'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='contact-text text-center double-margin-bottom padding-bottom'>
          <h1 class='jumbo-text'>
            <?php echo get_post_meta($post->ID, 'heading', true); ?>
          </h1>
          <p class='extra-bold-font-name lead margin-bottom'>
            <?php echo get_post_meta($post->ID, 'sub_heading', true); ?>
          </p>
        </div>
        <div class='row'>
          <div class='col-lg-5'>
          	<?php $var = get_post_meta($post->ID, 'contact_code', true);
							if ($var == '')
							{ }
							else { echo do_shortcode( $var); } ?>
          </div>
          <div class='col-lg-5 col-lg-offset-2'>
            <h2>
              <?php the_title(); ?>
            </h2>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>