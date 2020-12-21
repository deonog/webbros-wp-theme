<?php /* Template Name: Privacy */ ?>

<?php
get_header();
?>


    <div class="wrapper contact page">
    <!-- HEADER -->
    <header>
      <div class="container h-100">
        <div class="row h-100 d-flex align-items-end align-items-lg-center">
          <div
            class="col-sm-12 col-lg-6 text-left d-lg-flex flex-column align-items-start justify-content-center"
          >
            <div>
              <h1><?php the_title(); ?></h1>
              <div class="header-breadcrumb">
                <a href="<?php echo home_url(); ?>">Start</a><span>–</span
                ><a href="<?php the_permalink(); ?>" class="breadcrumb-active"><?php the_title(); ?></a>
              </div>
            </div>
          </div>
          <div
            class="col-sm-12 col-lg-5 offset-lg-1 d-none d-sm-none d-lg-block"
          >
            <div>
              <span class="contact_header_img">
                <img
                  class="img-fluid"
                  src="<?php echo get_theme_mod('contact_header_img', get_bloginfo('template_url').'/img/illustration-1.svg'); ?>"
                  alt="illustration"
                />
              </span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER END -->

    <section class="padding content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    </section>
    </div>





<?php get_footer(); ?>