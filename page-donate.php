<?php
/*
Template Name: Donate
 */
?>

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
<section class='section hero' data-speed='3' data-type='background' style="background-image:url('<?php
                        $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                        echo $imgsrc2[0];
                        ?>');">
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
            <a class='down-arrow' href='#donate'>
              <i class='icon-circle-arrow-down'></i>
            </a>
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
                <?php the_content(); ?> 
            </div>
          </div>
          <div class='col-lg-2'></div>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-lg-2'></div>
      <div class='col-lg-8'>
        <ul class='list-inline donate_infographic_blocks'>
          <?php
           $donatePointLoop = new WP_Query( array( 
              'post_type' => 'donate_point', 
              'posts_per_page' => '4'
            ));
          ?>
          <?php while ( $donatePointLoop->have_posts() ) : $donatePointLoop->the_post(); ?>
            <li class='padded'>
              <h2>
                <?php the_title(); ?>
              </h2>
              <p>
                <?php the_content(); ?>
              </p>
            </li>
          <?php endwhile; ?>
        </ul>
        <div class='donate-logo-background'></div>
      </div>
      <div class='col-lg-2'></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>