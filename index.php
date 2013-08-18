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
                    <?php the_content(); ?> 
                <!--end the loop-->
                <?php endwhile; ?>
            <?php endif; ?>
            <a class='down-arrow' href='#about'>
              <i class='icon-circle-arrow-down'></i>
            </a>
          </div><!-- end text center -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>