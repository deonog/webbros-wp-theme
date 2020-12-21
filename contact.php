<?php /* Template Name: Contact */ ?>

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
    <!-- CONTACT -->
    <section id="contact" class="padding bg-right">
        <div class="container">
          <div class="row">
            <div class="col-12 text-left text-lg-center">
              <div class="heading">
                <span class="home_contact_span">
                    <span class="span">
                        <?php echo get_theme_mod('home_contact_span', 'Kontakt'); ?>
                    </span>  
                </span>
                <span class="home_contact_heading">
                    <h2>
                        <?php echo get_theme_mod('home_contact_heading', 'Nehmen Sie Kontakt mit uns auf'); ?>
                    </h2>
                </span>
                <span class="home_contact_paragraph">
                    <p>
                        <?php echo get_theme_mod('home_contact_paragraph', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Tempora laudantium dolore, expedita quo provident');
                        ?>
                    </p>
                </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-container">
                <?php $contact='[contact-form-7 id="6" title="Contact Form"]'?>
                <?php echo do_shortcode($contact);?>
              </div>
            </div>

            <div class="col-sm-12 col-lg-5 offset-lg-1">
              <div class="d-flex flex-column align-items-center">
                <div>
                  <div class="home_contact_img">
                        <img
                          class="img-fluid"
                          src="<?php echo get_theme_mod('home_contact_img', get_bloginfo('template_url').'/img/illustration-7.svg'); ?>"
                          alt="illustration"
                        />
                  </div>
                </div>
                <div class="contact-info">
                  <a>
                    <img src="<?php echo get_bloginfo('template_url').'/img/location-icon.svg' ?>" />
                    <span>
                      <div class="contact_location">
                        <?php echo get_theme_mod('contact_location', 'Dortmund'); ?>
                      </div> 
                    </span>
                  </a>
                  <a href="mailto:<?php echo get_theme_mod('contact_email', 'email@webbros.de'); ?>"
                    ><img src="<?php echo get_bloginfo('template_url').'/img/mail-icon.svg' ?>" />
                    <span>
                    <div class="contact_email">
                        <?php echo get_theme_mod('contact_email', 'email@webbros.de'); ?>
                    </div>
                    </span
                    ></a
                  >
                  <a href="tel:<?php echo get_theme_mod('contact_phone', '+49 231 12345678'); ?>"
                    ><img src="<?php echo get_bloginfo('template_url').'/img/phone-icon.svg' ?>" />
                    <span>
                    <div class="contact_phone">
                        <?php echo get_theme_mod('contact_phone', '+49 231 12345678'); ?>
                    </div>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CONTACT END -->
    </div>





<?php get_footer(); ?>