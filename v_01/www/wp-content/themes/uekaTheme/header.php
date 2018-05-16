<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <?php wp_enqueue_style('style', get_template_directory_uri().'/style.css');
          wp_enqueue_style('style.SASS', get_template_directory_uri().'/css/style.min.css');
          wp_head();
           ?>
  </head>
  <body>
	  <header>

        <?php
          wp_nav_menu(array(
             'theme_location'=>'Hnav',
             'container'=>'div',
             'menu_class' => 'main-navi',
             'depth' => 1
           ));
         ?>

	  </header>
    <div class="seartchc"><form action="<?php echo esc_url(home_url('/')); ?>" class="searchform form-inline form-search"><div class="form-group"><input id="inputindefier1" autocomplete="off" placeholder="Uns Durchsuchen" autofocus value="<?php echo get_search_query(); ?>" name="s" /></div></form></div>
