<footer>
  <div class="fo_subtext">
    <span class="fo_subtext_title">Minimal -­ Villa</span>
    <br><br>Minimal -­ Villa  is a Project from mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita k <br><br>
    <span class="fo_subtext_cop">Copyright by Janis Wanger 2018</span>

  </div>

  <?php
    wp_nav_menu(array(
       'theme_location'=>'Fnav',
       'container'=>'div',
       'menu_class' => 'footer-navi',
       'depth' => 1
     ));
   ?>

   <p class="follow">
     <span class="follow_text">
       Follow us: <br>
     </span>
             <a href="https://dribbble.com/"><img width="24" src="https://cdn.dribbble.com/assets/icon-team-dribbble-8706862cdb0afa7f43f9e0218b073515f0a2bef19780961d324ae4620ebe249b.png" alt="Icon team dribbble"></a>
             <a href="http://twitter.com/"><img width="24" src="https://cdn.dribbble.com/assets/icon-team-twitter-1fa6921d96b16e47f00ad0381ebbab59ba089c22b21f9bce783c9a4a077f40e9.png" alt="Icon team twitter"></a>
             <a href="http://facebook.com/"><img width="24" src="https://cdn.dribbble.com/assets/icon-team-facebook-4d63851997b88eb903858057327d93df9f950a55c5104a3a19206f2005682ea3.png" alt="Icon team facebook"></a>
             <a href="https://www.instagram.com/zuckerpapi69/"><img width="24" src="https://cdn.dribbble.com/assets/icon-team-instagram-5dfdcd1478ea4a1c1e109b32adbd3878062aa1eb571da63ac379e0da1d2d5762.png" alt="Icon team instagram"></a>
             <a href="/stories">
               <img width="24" src="https://cdn.dribbble.com/assets/icon-team-blog-2705adcb7ee6522051e175d10683208f0fa0ad17daa15fdf3f36aca99c540312.png" alt="Icon team blog">
   </a>        </p>

</footer>

<?php

wp_enqueue_script('jquery');
wp_enqueue_script('mainjs', get_template_directory_uri().'/js/main.js');


 wp_footer(); ?>



</body>
</html>
