<!DOCTYPE html>
<html lang="en">
<head>


  <?php wp_head();?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title() ?></title>
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <?php if(qtranxf_getLanguage()=='ar'): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap-rtl.min.css">
      <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
  <?php endif; ?>
  <?php if(qtranxf_getLanguage()=='en'): ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/en-menu.css">
  <?php endif; ?>
  <!-- <link href="css/bootstrap-rtl.min.css" rel="stylesheet"> -->
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/lightbox.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/main.css" rel="stylesheet">
  <link id="css-preset" href="<?php echo get_template_directory_uri() ?>/assets/css/presets/preset1.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/responsive.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri() ?>/assets/css/news-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/owl.carousel.css" >
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/owl.theme.css" >
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/owl.transitions.css" >
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/nilogy.css" >
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
 
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head><!--/head-->

<body >

<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jssor.slider-22.2.3.mini.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/slider.js"></script>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->
  <div class="navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="localhost/p4b">
            <h1><img class="img-responsive header-logo" src="<?php echo get_template_directory_uri() ?>/assets/images/logo2.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          <?php
            wp_nav_menu( array(
                'menu'              => 'main',
                'theme_location'    => 'main',
                'depth'             => 2,
                'container'         => 'div',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
			
        ?> 
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel" style="<?php if(!is_home()){echo 'display: none';}?>">
      <div class="carousel-inner">
      <?php
                    // PHP Query to list all posts inside category "what we do"
                    $i=0;
                    $query = new WP_Query(array(
                    'category_name' => 'slides',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'));
                    while ($query->have_posts()) :
                    $query->the_post();
                    
                    if ($i=="0")
                    {
                        $x="active";
                        $i++;
                    }
                    else
                      $x="";
                        ?>
        <div class="item <?php echo $x ?>" style="background-image: url(<?php echo the_post_thumbnail_url('full');?>)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><?php the_title()?></h1>
            <p class="animated fadeInRightBig"><?php the_content()?></p>
            <?php if(qtranxf_getLanguage()=='ar'): ?>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">ابدأ الآن</a>
            <?php elseif(qtranxf_getLanguage()=='en'): ?>
              <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Strat now</a>
              <?php endif; ?>
          </div>
        </div>
        <?php
        endwhile; // End work while
        wp_reset_query();
        ?>
      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
        
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>


    </div><!--/#home-slider-->
    
  </header><!--/#home-->
  <script>
  $(function()
  {
      $("li > a").each(function(index)
      {	
        if($(this).attr('href').match('#')) 
        {
          $(this).parent().removeClass('active');
        }
      });
    });
  }
  </script>