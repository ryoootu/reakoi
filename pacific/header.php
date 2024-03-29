<!DOCTYPE HTML>
<html dir="ltr" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php
 global $page, $paged;
 if (is_search()) :
  wp_title('', true, 'left');
  echo ' | ';
else :
  wp_title('', true, 'right');
endif;
bloginfo('name');
 if(is_front_page()) :
  echo ' | ';
  bloginfo('description');
 endif;
 if ($paged >= 2 || $page >= 2) :
  echo ' | ' . sprintf('%sページ',
  max($paged, $page));
 endif;
?></title>
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/touch-icon.png" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<!--[if lt IE 9]>
  <meta http-equiv="Imagetoolbar" content="no" />
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body class="home">

  <section id="description">
    <h1><?php bloginfo('description'); ?></h1>
  </section><!-- #description end -->
  
  <div id="container">
    <header id="header">
      <h1 id="site-id">
        <!-- <a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/header/site_id.png" alt="<?php bloginfo('name'); ?>" /></a> -->
      </h1><!-- #site-id end -->
    <div id="utility-group">
<?php
   wp_nav_menu(array(
     'container' => 'nav',
     'container_id' => 'utility-nav',
     'theme_location' => 'place_utility',
   ));
?>
    </div><!-- #utility-group end -->
    </header><!-- #header end -->

    <section id="branding">
      <img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
    </section><!-- #branding end -->

  <?php wp_nav_menu(array(
      'container' => 'nav',
      'container_id' => 'global-nav',
      'theme_location' => 'place_grobal',
  ));
?>

    <section id="contents-body">
<?php
 if (!is_front_page() && function_exists('bread_crumb')) :
  bread_crumb('navi_element=nav&elm_id=bread-crumb');
 endif;
 ?>