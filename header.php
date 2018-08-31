<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport"content="width=device-width, initial-scale=1.0 ">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="headerInner">
    <div class="siteTitle">
      <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="<?php bloginfo( 'name' ); ?>"/></a></h1>
    </div>
    <?php wp_nav_menu( array(
      'theme_location' => 'headerNav',
      'container' => 'nav',
      'container_class' => 'headerNav',
      'container_id' => 'headerNav',
      'fallback_cb' => ''
    ) ); ?>
  </div>

</header>
