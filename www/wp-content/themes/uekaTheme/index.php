<?php

get_header();



    ?>


    <main>
      <div class="pg_back_container">
        <div class="pg_back_linie" id="pg_back_linie1"></div>
        <div class="pg_back_linie" id="pg_back_linie2"></div>
        <div class="pg_back_linie" id="pg_back_linie3"></div>
        <div class="pg_back_linie" id="pg_back_linie4"></div>
        <div class="pg_back_linie" id="pg_back_linie5"></div>
        <div class="pg_back_linie" id="pg_back_linie6"></div>
      </div>
      <div class="ph_main_cont">
        <div class="pg_title">
          <?php the_title(); ?>:
        </div>



        <?php
        while ( have_posts() ) : the_post(); ?>
        <div <?php post_class(); ?>>
          <div class="content">
            <?php the_content(); ?></div> </div>

          <?php endwhile;

          ?>

</div>
    	  </main>

<?php get_footer(); ?>
