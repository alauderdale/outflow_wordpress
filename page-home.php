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
  
  
  });
</script>

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
		            <a class='down-arrow' href='#about'>
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
<!-- icons -->
<section class='icons' id='about'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row'>
        	<?php
           $homeIconLoop = new WP_Query( array( 
	           	'post_type' => 'home_icon', 
	           	'posts_per_page' => '3'
           	));
          ?>
          <?php while ( $homeIconLoop->have_posts() ) : $homeIconLoop->the_post(); ?>
	          <div class='col-lg-4 col-sm-4 col-md-4 col-xs-4'>
	            <div class='text-center padded'>
	            	<div class="thumb-icon margin-bottom">
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
<!-- mission -->
<?php
 $missionLoop = new WP_Query( array( 
   	'post_type' => 'mission', 
   	'posts_per_page' => '1'
 	));
?>
<?php while ( $missionLoop->have_posts() ) : $missionLoop->the_post(); ?>
	<section class='section mission' data-speed='3' data-type='background' id='mission'>
		<div class='container'>
		  <div class='row'>
		    <div class='col-lg-12'>
		      <div class='row'>
		        <div class='col-lg-1'></div>
		        <div class='col-lg-10'>
		          <div class='text-center'>
		          	<div class="margin-bottom mission-img">
		            	<?php the_post_thumbnail(); ?>
		          	</div>
		            <h1 class='jumbo-text'>
		              <?php the_title(); ?>
		            </h1>
		            <a class='btn btn-primary btn-lg margin-bottom' href='<?php echo get_post_meta($post->ID, 'button_link', true); ?>'>
		              <?php echo get_post_meta($post->ID, 'button_text', true); ?>
		            </a>
		            <p class='extra-bold-font-name lead'>
		              <?php echo get_post_meta($post->ID, 'sub_text', true); ?>
		            </p>
		            <?php the_content(); ?>
		            <a class='down-arrow' href='#stats'>
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
	<!-- stats -->
<?php
 $statsLoop = new WP_Query( array( 
   	'post_type' => 'stat', 
   	'posts_per_page' => '4'
 	));
?>
  <section class='stats' id='stats'>
	  <div class='container'>
	    <div class='row'>
	      <div class='col-lg-12'>
	        <div class='row'>
	          <div class='col-lg-1'></div>
	          <div class='col-lg-10'>
	            <div class='text-center triple-padding-bottom'>
	              <h1 class='jumbo-text'>
	                We've Shown Whats Possible
	              </h1>
	              <p class='extra-bold-font-name lead'>
	                But theres still lots more to do
	              </p>
	            </div>
	          </div>
	          <div class='col-1'></div>
	        </div>
	        <div class='row'>
	          <div class='stats-container'>
	            <ul class='list-inline'>
	            	<?php while ( $statsLoop->have_posts() ) : $statsLoop->the_post(); ?>
	              <li>
	                <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
	                  <?php the_post_thumbnail(); ?>
	                  <h1 class='number'>
	                    <?php echo get_post_meta($post->ID, 'stat_number', true); ?>
	                  </h1>
	                </div>
	                <div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
	                  <h3 class='margin-top'>
	                    <?php the_title(); ?>
	                  </h3>
	                  <span class='lead primary-text-color'>
	                    <?php the_content(); ?>
	                  </span>
	                </div>
	              </li>
	              <?php endwhile; ?>
	            </ul>
	          </div>
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
        <div class='text-center margin-bottom'>
          <h1 class='jumbo-text'>
            <?php echo get_post_meta($post->ID, 'heading', true); ?>
          </h1>
          <p class='extra-bold-font-name lead double-margin-bottom'>
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