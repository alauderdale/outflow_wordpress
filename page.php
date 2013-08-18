<?php get_header(); ?>

<script>
  $(document).ready(function(){
  	
  
  	$('a').click(function(){
  	$('html, body').animate({
  	scrollTop: $( $.attr(this, 'href') ).offset().top
  	}, 1900);
  	return false;
  	});
  
  
  });
</script>
<section class='section hero' data-speed='3' data-type='background'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='double-margin-top'>
          <div class='text-center'>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <h1 class='jumbo-text'>
                      <?php the_title(); ?> 
                    </h1>
                    <h4 class='primary-text-color bold-font-name'>
                      <?php echo get_post_meta($post->ID, 'hero_sub', true); ?>
                    </h4>
                <!--end the loop-->
                <?php endwhile; ?>
            <?php endif; ?>
          </div><!-- end text center -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class='donate_infographic' id='donate'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>
        <div class='row'>
          <div class='col-lg-2'></div>
          <div class='col-lg-8'>
            <div class='text-center double-margin-bottom'>
              <div class='row'>
                <?php the_content(); ?> 
              </div>
            </div>
          </div>
          <div class='col-lg-2'></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>