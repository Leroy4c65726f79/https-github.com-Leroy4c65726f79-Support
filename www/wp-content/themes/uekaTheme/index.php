<?php

get_header();



    ?>


    <main>



    		<div class="row">
    			<div class="col-sm-3">
    				<nav class="nav-sub-navi">
    					<!-- <ul class="sub-navi no-list">
    						<li><a href="#">Red Dot</a></li>
    						<li><a href="#">Swiss Web Award</a></li>
    						<li><a href="#">The FWA</a></li>
    					</ul> -->
            <?php
            if($post->post_parent) {
              $children = wp_list_pages("title_li=&child_of=" . $post->post_parent."&echo=0");
            } elseif($post->ID) {
              $children = wp_list_pages("title_li=&child_of=" .  $post->ID."&echo=0");
            }
            if($children) {
              echo '<ul class="sub-nav no-list">'.$children.'</ul>';
            }

             ?>

           </nav>
    			</div>
    			<div class="col-sm-9 col-content">
    			  <div class="content">
<?php
while ( have_posts() ) : the_post(); ?>
 <div <?php post_class(); ?>> <h1>
   <?php the_title(); ?></h1>
   <div class="content">
     <?php the_content(); ?></div> </div>

   <?php endwhile;

 ?>
    			  </div>
    			</div>
    		</div>
    	  </main>

<?php get_footer(); ?>
