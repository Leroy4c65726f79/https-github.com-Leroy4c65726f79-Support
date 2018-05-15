<?php

get_header();



    ?>


    <section>
      <div style="position: relative;">

        <?php the_post_thumbnail('post-thumbnail'); ?>
        <!-- <img src="http://placehold.it/1170x300&txt=Titel" class="img-responsive" /> -->
        <!-- <div class="titel-absolute">Titel</div> -->
      </div>
    </section>


    <main>
    		<div class="row">
    			<div class="col-sm-3">
            <ul id="seitenleiste">
              <?php dynamic_sidebar('seitenleiste'); ?>
            </ul>
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
if (have_posts()) {

while ( have_posts() ) : the_post(); ?>
 <div <?php post_class(); ?>> <h1>
   <?php the_title(); ?></h1>
   <div class="content">
     <?php the_content(); ?></div> </div>

   <?php endwhile;
} else {
  echo "Sorry ich habe leider keine Suchresultate gefunden. ";
};
 ?>
    			  </div>
    			</div>
    		</div>
    	  </main>

<?php get_footer(); ?>
