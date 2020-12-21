<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php is_front_page() ? bloginfo('description') : wp_title(); ?> | <?php bloginfo('name'); ?></title>
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
      rel="stylesheet"
    />
    <?php wp_head(); ?>
  </head>
  <body id="home">

  <style>
      header {
        background: url("<?php echo get_theme_mod('bg_img', get_bloginfo('template_url').'/img/bg-illustration-2.svg'); ?>");
        background-repeat: repeat-y;
        background-position: bottom;
        background-size: 100% !important;
      }

      .bg-right, .bg-left {
          background: url("<?php echo get_theme_mod('bg_img_2', get_bloginfo('template_url').'/img/bg-illustration.svg'); ?>");
          background-repeat: repeat-y;
          background-position: center;
          background-size: contain;
      }


      @media screen and (min-width: 992px) {
        .bg-left {
          background-repeat: no-repeat;
          background-position: left;
          background-size: 50%;
      }
      .bg-right {
        background-repeat: no-repeat;
          background-position: right;
          background-size: 50%;
      }

      }
    </style>

    <!-- PRE-LOADER -->
    <div class="pre-loader-wrap">
      <div class="pre-loader triangle">
        <svg viewBox="0 0 86 80">
          <polygon points="43 8 79 72 7 72"></polygon>
        </svg>
        <span>
          <?php echo get_theme_mod('pre_text', 'Lädt...'); ?>
        </span>
      </div>
    </div>
    <!-- PRE-LOADER END -->

    <!-- NAVBAR -->
    <nav id="nav" class="d-flex align-items-center justify-content-between">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex align-items-center justify-content-between">
            <!-- NAV HEADER -->
            <div
              class="nav-header d-flex align-items-center justify-content-between"
            >
              <a class="logo" href="<?php echo home_url(); ?>"
                >
                <span class="logo_img">
                  <img src="<?php echo get_theme_mod('logo_img', get_bloginfo('template_url').'/img/logo.svg'); ?>" alt="logo">
                </span>
              </a>
              <div id="menu-btn">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <!-- LINKS -->
            <div class="links-container d-flex align-items-center" id="menu">
                <?php wp_nav_menu( array(
                            'theme_location' => 'top_menu'
                        ) ); 
                ?>
              <a class="btn btn-primary a-light" href="<?php echo get_page_link( get_page_by_title( 'Kontakt' )->ID ); ?>"
                >Jetzt anfragen</a
              >
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- NAVBAR END -->