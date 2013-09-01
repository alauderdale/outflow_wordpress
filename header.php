<!doctype html>
<html>
  <head>
    <meta charset='utf-8'>
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <meta content='width=device-width,initial-scale=1, user-scalable=no' name='viewport'>
    <title>
      <?php wp_title(''); ?> <?php bloginfo('name'); ?>
    </title>
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/font-awesome.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/style.css" media="screen" rel="stylesheet" type="text/css" />
    <script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/bootstrap.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.pagescroller.lite.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/scripts.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.superscrollorama.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/TweenMax.min.js" type="text/javascript"></script>
    <?php wp_head(); ?>
  </head>
  <body class='index'>
    <div class='navbar navbar-fixed-top navbar-inverse' role='navigation'>
      <div class='container'>
        <div class='navbar-header'>
          <button class='navbar-toggle' data-target='.navbar-ex1-collapse' data-toggle='collapse' type='button'>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand logo' href='<?php echo get_option('home'); ?>'>
            <p></p>
          </a>
        </div>
        <div class='nav-collapse collapse navbar-ex1-collapse no-padding-bottom'>
          <ul class='nav navbar-nav text-center pull-right'>
            <li>
              <a class='btn btn-primary btn-xs' href='index.php?pagename=donate'>
                Donate
              </a>
            </li>
          </ul>
          <ul class='nav navbar-nav text-center pull-right' id='nav'>
            <li>
              <a href='<?php echo get_option('home'); ?>'>
                Home
              </a>
            </li>
            <li>
              <a href='index.php?pagename=home#mission'>
                About
              </a>
            </li>
            <li>
              <a href='index.php?pagename=home#contact'>
                Contact
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id='wrapper'>