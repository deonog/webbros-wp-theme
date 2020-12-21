<?php /* Template Name: Services */ ?>

<?php
get_header();
?>



<div class="wrapper services page">
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
                <span class="about_header_img">
                  <img
                    class="img-fluid"
                    src="<?php echo get_theme_mod('about_header_img', get_bloginfo('template_url').'/img/illustration-1.svg'); ?>"
                    alt="illustration"
                  />
                </span>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER END -->

      <!-- SERVICES -->
      <section id="services" class="padding bg-right">
        <div class="container services">
          <div class="row">
            <div class="col-12">
                <div class="heading text-left text-lg-center">
                    <span class="home_services_span">
                    <span class="span">
                        <?php echo get_theme_mod('home_services_span', 'Unsere Leistungen'); ?>
                    </span>  
                    </span>
                    <span class="home_services_h2">
                        <h2>
                            <?php echo get_theme_mod('home_services_h2', 'Alles, was es braucht. Nicht mehr und nicht weniger.'); ?>
                        </h2>
                    </span>
                </div>
            </div>
          </div>
          <div class="row text-left services-container">
            <div class="col-sm-12 col-lg-4">
              <div
                class="service h-100 d-flex flex-column align-items-start justify-content-start"
              >
                <div
                  class="service-icon icon-blue d-flex align-items-center justify-content-center"
                >
                  <span class="home_service_1_img">
                      <img
                        class="img-fluid"
                        src="<?php echo get_theme_mod('home_service_1_img', get_bloginfo('template_url').'/img/design-icon.svg'); ?>"
                        alt="illustration"
                      />
                </span>
                </div>
                <span lass="home_service_1_title">
                    <h4>
                        <?php echo get_theme_mod('home_service_1_title', 'Web Design'); ?>  
                    </h4>
                </span>
                <span class="home_service_1_paragraph">
                    <p>
                        <?php echo get_theme_mod('home_service_1_paragraph', 'Design, Layout und Seitenstruktur sowie Farben, Schriften und
                        Icons. Auf Wunsch auch Bilder und Texte.');
                        ?>
                    </p>
                </span>
              </div>
            </div>
            <div class="col-sm-12 col-lg-4">
              <div
                class="service h-100 d-flex flex-column align-items-start justify-content-start"
              >
                <div
                  class="service-icon icon-blue d-flex align-items-center justify-content-center"
                >
                  <div class="home_service_2_img">
                        <img
                          class="img-fluid"
                          src="<?php echo get_theme_mod('home_service_2_img', get_bloginfo('template_url').'/img/dev-icon.svg'); ?>"
                          alt="illustration"
                        />
                  </div>
                </div>
                <span class="home_service_2_title">
                    <h4>
                        <?php echo get_theme_mod('home_service_2_title', 'Web Entwickung'); ?>
                    </h4>
                </span>
                <span class="home_service_2_paragraph">
                    <p>
                        <?php echo get_theme_mod('home_service_2_paragraph', 'Wenn Ihre Website Funktionalitäten braucht, die über den
                        Standard hinausgehen. Wir finden Lösungen für Sie!');
                        ?> 
                    </p>
                </span>
              </div>
            </div>
            <div class="col-sm-12 col-lg-4">
              <div
                class="service h-100 d-flex flex-column align-items-start justify-content-start"
              >
                <div
                  class="service-icon icon-blue d-flex align-items-center justify-content-center"
                >
                <div class="home_service_3_img">
                        <img
                          class="img-fluid"
                          src="<?php echo get_theme_mod('home_service_3_img', get_bloginfo('template_url').'/img/hosting-icon.svg'); ?>"
                          alt="illustration"
                        />
                </div>
                </div>
                <span class="home_service_3_title">
                    <h4>
                        <?php echo get_theme_mod('home_service_3_title', 'Hosting'); ?> 
                    </h4>
                </span>
                <span class="home_service_3_paragraph">
                    <p>
                        <?php echo get_theme_mod('home_service_3_paragraph', 'Nach hohen Standards mit Domains, Webspace, CMS, SSL und Mail.
                            Ausgelegt für Performance und Sicherheit.');
                        ?>
                    </p>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SERVICES END -->

      <!-- ROADMAP -->
      <section id="roadmap" class="padding">
        <div class="container roadmap">
          <div class="row">
            <div class="col-12 text-left text-lg-center">
              <div class="heading">
                  <span class="services_roadmap_span">
                      <span class="span">
                        <?php echo get_theme_mod('services_roadmap_span', 'Unsere Leistungen'); ?>
                      </span>
                  </span>
                  <span class="services_roadmap_heading">
                      <h2>
                        <?php echo get_theme_mod('services_roadmap_heading', 'Die Webbros Roadmap'); ?>
                      </h2>
                  </span>
                  <span class="services_roadmap_paragraph">
                      <p>
                        <?php echo get_theme_mod('services_roadmap_paragraph', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Tempora laudantium dolore, expedita quo provident'); ?>
                      </p>
                  </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid">
              <div class="d-flex justify-content-center roadmap-line">
                <div class="line">
                  <span class="dot"></span>
                </div>
              </div>
              <div class="roadmap-content">
                <div class="d-flex align-items-center">
                  <h2>01</h2>
                  <span class="roadmap_first_heading">
                      <h3>
                        <?php echo get_theme_mod('roadmap_first_heading', 'Strategie'); ?>
                      </h3>
                  </span>
                </div>
                <span class="roadmap_first_paragraph">
                    <p>
                        <?php echo get_theme_mod('roadmap_first_paragraph', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                            possimus laboriosam obcaecati, voluptatibus odio ullam
                            mollitia iure est porro explicabo quod velit eligendi natus.'); ?>
                    </p>
                </span>
              </div>
              <div class="roadmap-img">
                  <span class="roadmap_first_img">
                    <img
                    src="<?php echo get_theme_mod('roadmap_first_img', get_bloginfo('template_url').'/img/illustration-3.svg'); ?>"
                    alt="illustration"
                    class="img-fluid"
                    />
                  </span>
              </div>
            </div>
            <div class="col-12 grid">
              <div class="d-flex justify-content-center roadmap-line">
                <div class="line">
                  <span class="dot"></span>
                </div>
              </div>
              <div class="roadmap-content">
                <div class="d-flex align-items-center">
                  <h2>02</h2>
                  <span class="roadmap_second_heading">
                      <h3>
                        <?php echo get_theme_mod('roadmap_second_heading', 'Design'); ?>
                      </h3>
                  </span>
                </div>
                <span class="roadmap_second_paragraph">
                    <p>
                        <?php echo get_theme_mod('roadmap_second_paragraph', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                            possimus laboriosam obcaecati, voluptatibus odio ullam
                            mollitia iure est porro explicabo quod velit eligendi natus.'); ?>
                    </p>
                </span>
              </div>
              <div class="roadmap-img">
                <span class="roadmap_second_img">
                    <img
                    src="<?php echo get_theme_mod('roadmap_second_img', get_bloginfo('template_url').'/img/illustration-4.svg'); ?>"
                    alt="illustration"
                    class="img-fluid"
                    />
                </span>
              </div>
            </div>
            <div class="col-12 grid">
              <div class="d-flex justify-content-center roadmap-line">
                <div class="line">
                  <span class="dot"></span>
                </div>
              </div>
              <div class="roadmap-content">
                <div class="d-flex align-items-center">
                  <h2>03</h2>
                  <span class="roadmap_third_heading">
                      <h3>
                        <?php echo get_theme_mod('roadmap_third_heading', 'Entwicklung'); ?>
                      </h3>
                  </span>
                </div>
                <span class="roadmap_third_paragraph">
                    <p>
                        <?php echo get_theme_mod('roadmap_third_paragraph', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                            possimus laboriosam obcaecati, voluptatibus odio ullam
                            mollitia iure est porro explicabo quod velit eligendi natus.'); ?>
                    </p>
                </span>
              </div>
              <div class="roadmap-img">
                  <span class="roadmap_third_img">
                    <img
                    src="<?php echo get_theme_mod('roadmap_third_img', get_bloginfo('template_url').'/img/illustration-5.svg'); ?>"
                    alt="illustration"
                    class="img-fluid"
                    />
                  </span>
              </div>
            </div>
            <div class="col-12 grid">
              <div class="d-flex justify-content-center roadmap-line">
                <div class="line">
                  <span class="dot"></span>
                </div>
              </div>
              <div class="roadmap-content">
                <div class="d-flex align-items-center">
                  <h2>04</h2>
                  <span class="roadmap_fourth_heading">
                      <h3>
                        <?php echo get_theme_mod('roadmap_fourth_heading', 'Support'); ?>
                      </h3>
                  </span>
                </div>
                <span class="roadmap_fourth_paragraph">
                    <p>
                        <?php echo get_theme_mod('roadmap_fourth_paragraph', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                            possimus laboriosam obcaecati, voluptatibus odio ullam
                            mollitia iure est porro explicabo quod velit eligendi natus.'); ?>
                    </p>
                </span>
              </div>
              <div class="roadmap-img">
                  <span class="roadmap_fourth_img">
                    <img
                    src="<?php echo get_theme_mod('roadmap_fourth_img', get_bloginfo('template_url').'/img/illustration-6.svg'); ?>"
                    alt="illustration"
                    class="img-fluid"
                    />
                  </span>
              </div>
            </div>
            <div class="col-12 grid">
              <div class="d-flex justify-content-center roadmap-line">
                <div class="line"></div>
              </div>
              <div class="roadmap-content invisible"></div>
              <div class="roadmap-img invisible"></div>
            </div>

            <div
              class="col-sm-12 d-flex justify-content-left justify-content-lg-center"
            >
              <a href="<?php echo get_page_link( get_page_by_title( 'Kontakt' )->ID ); ?>" class="btn btn-primary mt-0">Jetzt anfragen</a>
            </div>
          </div>
        </div>
      </section>
      <!-- ROADMAP END -->

      <!-- PRICING -->
      <section id="pricing" class="padding bg-right">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="heading">
                <span class="services_prices_span">
                  <span class="span">
                    <?php echo get_theme_mod('services_prices_span', 'Preise'); ?>
                  </span>
                </span> 
                <span class="services_prices_heading">
                  <h2>
                    <?php echo get_theme_mod('services_prices_heading', 'Unsere Webseiten Preise'); ?>
                  </h2>
                </span>
                <span class="services_prices_paragraph">
                  <p>
                    <?php echo get_theme_mod('services_prices_paragraph', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Tempora laudantium dolore, expedita quo provident'); ?>
                  </p>
                </span>
              </div>
            </div>
          </div>
          <div class="row">
          <?php 
              $args = array( 'post_type' => 'pricing', 'posts_per_page' => 10 );
              $the_query = new WP_Query( $args ); 
              ?>
              <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php get_template_part('price', get_post_format()); ?>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php else:  ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </section>
      <!-- PRICING END -->

     <!-- TECHNOLOGIES -->
     <section class="technologies padding-2" id="technologies">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center text-uppercase"><h4>Unsere Technologien</h4></div>
            <div class="col-sm-12 col-md-3 text-center">
              <div class="icon">
                <div class="technology_1">
                        <img
                          class="img-fluid"
                          src="<?php echo get_theme_mod('technology_1', get_bloginfo('template_url').'/img/wordpress-logo.png'); ?>"
                          alt="illustration"
                        />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 text-center">
              <div class="icon">
                <div class="technology_2">
                          <img
                            class="img-fluid"
                            src="<?php echo get_theme_mod('technology_2', get_bloginfo('template_url').'/img/woocommerce-logo.png'); ?>"
                            alt="illustration"
                          />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 text-center">
              <div class="icon">
                <div class="technology_3">
                          <img
                            class="img-fluid"
                            src="<?php echo get_theme_mod('technology_3', get_bloginfo('template_url').'/img/webflow-logo.png'); ?>"
                            alt="illustration"
                          />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 text-center">
              <div class="icon">
              <div class="icon">
                <div class="technology_4">
                          <img
                            class="img-fluid"
                            src="<?php echo get_theme_mod('technology_4', get_bloginfo('template_url').'/img/aws-logo.png'); ?>"
                            alt="illustration"
                          />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- TECHNOLOGIES END -->

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
                <?php $contact='[contact-form-7 id="75" title="Contact Form"]'?>
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





    <script>
    const pricingItemIcon = document.querySelectorAll('.fa-li i');

    function checkMuted() {

      pricingItemIcon.forEach(function(icon){
        if (icon.classList.contains('fa-times')) {
          icon.parentElement.parentElement.classList.add('text-muted') 
        } else {
          icon.parentElement.parentElement.classList.remove('text-muted') 
        }
      })
    }

    checkMuted();
</script>






<?php get_footer(); ?>