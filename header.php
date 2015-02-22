<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html class="ie9" xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>><![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
      <?php if (function_exists('is_tag') && is_tag()) {
            single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
        } elseif (is_archive()) {
            wp_title(''); echo ' Archive - ';
        } elseif (is_search()) {
            echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
        } elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title(''); echo ' - ';
        } elseif (is_404()) {
            echo 'Not Found - ';
        }
        if (is_home()) {
            bloginfo('name'); echo ' - '; bloginfo('description');
        } else {
            bloginfo('name');
        }
        if ($paged > 1) {
            echo ' - page '. $paged;
        } ?>
    </title>

    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    
    <!-- <link href="<?php //bloginfo('template_url'); ?>/css/font-awesome.css" rel="stylesheet" /> -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/flexslider.css" type="text/css" media="screen" rel="stylesheet"/>
    <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" rel="stylesheet"/>
  
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.infinitescroll.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

    <script type="text/javascript" charset="utf-8">
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide", //making this true removes the small dots
          directionNav: true,
          //controlNav: true
          pauseOnHover: false,
          pauseOnAction: true,
          controlsContainer: ".flex-container"  
        });
      });
    </script>
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
    <?php wp_head(); ?>  
    <meta name="google-site-verification" content="m49vDQDhF_UvfN8cbExx-WiGBHfeFvurbGghhCfZ0cw" />
  </head>

  <body>
  
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    <div id="main-nav" class="navbar navbar-fixed-top">
      <div id="nav" class="navbar-inner ribbonHeader">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="pull-left">
          <a class="brand" href="<?php echo get_option('home'); ?>">FARMcurious</a>
          </div>
          <div class="nav-collapse collapse">
            <?php 
              wp_nav_menu( array(
                'menu'       => 'main-nav.v4',
                'depth'      => 2,
                'container'  => false,
                'menu_class' => 'nav nav-pills',
                'fallback_cb' => 'wp_page_menu',
                //Process nav menu using our custom nav walker
                'walker' => new twitter_bootstrap_nav_walker())
              );
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div id="content" class="row">
        <div class="span9">

	  <!--
	  <div class="row-fluid" style="margin-top:60px;">
            <div class="span12">  
              <div class="alert alert-info">Alert</div>
            </div>
          </div>
          -->

          <header class="margin-fix ">
            <h2><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h2>
            <div id="search" class="pull-right">        
              <form role="search" method="get" id="searchform" class="navbar-search pull-left" action="<?php bloginfo('url'); ?>">
                <div>
                  <input type="text" id="searchfield" value="" name="s" class="search-query" placeholder="Search">
                </div>
              </form>

            </div>
            <p><em class="description pull-left"><?php bloginfo('description'); ?></em></p>
          </header>