    <!-- FOOTER -->
    <footer class="padding-2">
      <div class="container">
        <div
          class="row text-center text-lg-left d-flex flex-column-reverse flex-lg-row align-items-center"
        >
          <div class="col-sm-12 col-lg-4">
            <p class="copyright">
              &copy; <span id="copyright-date"></span> <?php bloginfo('name'); ?> - All Rights
              Reserved
            </p>
          </div>
          <div
            class="col-sm-12 col-lg-4 d-flex d-lg-block justify-content-center text-center"
          >
            <ul class="social-lists">
              <li>
                <a href="<?php echo get_theme_mod('social_icon_1_link', '#'); ?>"><i class="<?php echo get_theme_mod('social_icon_1', 'fab fa-facebook-f'); ?>"></i></a>
              </li>
              <li>
                <a href="<?php echo get_theme_mod('social_icon_2_link', '#'); ?>"><i class="<?php echo get_theme_mod('social_icon_2', 'fab fa-instagram'); ?>"></i></a>
              </li>
              <li>
                <a href="<?php echo get_theme_mod('social_icon_3_link', '#'); ?>"><i class="<?php echo get_theme_mod('social_icon_3', 'fab fa-linkedin'); ?>"></i></a>
              </li>
              <li>
                <a href="<?php echo get_theme_mod('social_icon_4_link', '#'); ?>"><i class="<?php echo get_theme_mod('social_icon_4', 'fab fa-xing'); ?>"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-sm-12 col-lg-4 text-right">
          <?php wp_nav_menu( array(
                            'theme_location' => 'footer_menu'
                        ) ); 
                ?>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER END -->

    <!-- SCROLL UP BTN -->
    <a
      class="scroll-link top-link d-flex align-items-center justify-content-center"
      href="#home"
    >
      <i class="fas fa-caret-up"></i>
    </a>
    <!-- SCROLL UP BTN END -->  
    <?php wp_footer(); ?>
</body>
</html>