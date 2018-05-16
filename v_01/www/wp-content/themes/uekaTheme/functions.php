<?php

register_nav_menus(array(
  'hauptnavigation'=>'Haupt-Navigation',
  'servicenavigation'=>'Service-Navigation'
));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(1170, 300, true);



register_sidebar (
  array(
    'name' => 'Seitenleiste',
    'id' => 'seitenleiste'
  )
);



 ?>
