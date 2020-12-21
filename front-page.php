<?php
get_header();
?>


<div class="wrapper home">
          <!-- HEADER -->
          <header>
        <div
          class="container h-100 align-items-center justify-content-center"
        >
          <div class="row d-flex align-items-center justify-content-center">
            <div
              class="col-sm-12 col-lg-6 text-left d-lg-flex flex-column align-items-start justify-content-center"
            >
              <div>
              <span class="home_h1">
                <h1>
                    <?php echo get_theme_mod('home_h1', 'Professionelles Webdesign –
                      <span>Einfach, schnell, kostengünstig</span>'); 
                    ?>
                </h1>
              </span>
                <span class="home_p">
                  <p>
                      <?php echo get_theme_mod('home_p', 'Wir erstellen Ihren professionellen Auftritt im Internet mit
                        einer bewährten Vorgehensweise innerhalb kürzester Zeit zu
                        besten Konditionen und sind auch danach für Sie da!'); 
                      ?>
                  </p>
                </span>
                <div class="btn-container d-flex">
                  <a href="<?php echo get_page_link( get_page_by_title( 'Kontakt' )->ID ); ?>" class="btn btn-primary"
                    >Jetzt anfragen</a
                  >
                  <a href="<?php echo get_page_link( get_page_by_title( 'Projekte' )->ID ); ?>" class="btn btn-secondary"
                    >Projekte ansehen</a
                  >
                </div>
              </div>
            </div>
            <div
              class="col-sm-12 col-lg-5 offset-lg-1 d-none d-sm-none d-lg-block"
            >
              <div>
                <span class="home_header_img">
                    <img
                      class="img-fluid"
                      src="<?php echo get_theme_mod('home_header_img', get_bloginfo('template_url').'/img/header-illustration.svg'); ?>"
                      alt="illustration"
                    />
                </span>
              </div>
            </div>
          </div>
          <div
            class="header-social"
          >
            <ul
              class="social-lists d-flex flex-column align-items-center justify-content-center m-0 p-0"
            >
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
          <a href="#services" class="scroll-down-btn scroll-link">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="21.204"
              height="47.425"
              viewBox="0 0 41.204 67.425"
            >
              <defs>
                <linearGradient
                  id="linear-gradient"
                  x1="0.5"
                  x2="0.5"
                  y2="1"
                  gradientUnits="objectBoundingBox"
                >
                  <stop offset="0" stop-color="#1668a0" stop-opacity="0.204" />
                  <stop offset="1" stop-color="#1668a0" />
                </linearGradient>
              </defs>
              <g
                id="Group_89"
                data-name="Group 89"
                transform="translate(-935 -931)"
              >
                <g
                  id="Scroll_down"
                  data-name="Scroll down"
                  transform="translate(935 931)"
                >
                  <g
                    id="Rectangle_126"
                    data-name="Rectangle 126"
                    transform="translate(0)"
                    fill="none"
                    stroke="#1668a0"
                    stroke-width="2"
                  >
                    <rect
                      width="41.204"
                      height="67.425"
                      rx="20.602"
                      stroke="none"
                    />
                    <rect
                      x="1"
                      y="1"
                      width="39.204"
                      height="65.425"
                      rx="19.602"
                      fill="none"
                    />
                  </g>
                  <circle
                    id="Ellipse_13"
                    data-name="Ellipse 13"
                    cx="5.619"
                    cy="5.619"
                    r="5.619"
                    transform="translate(14.983 43.077)"
                    fill="#1668a0"
                  />
                  <rect
                    id="Rectangle_127"
                    data-name="Rectangle 127"
                    width="11.238"
                    height="41.204"
                    rx="4"
                    transform="translate(14.983 13.11)"
                    opacity="0.618"
                    fill="url(#linear-gradient)"
                  />
                </g>
              </g>
            </svg>
          </a>
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
                <a href="<?php echo get_page_link( get_page_by_title( 'Leistungen' )->ID ); ?>" class="read-more-btn"
                  >Mehr erfahren</a
                >
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
                <a href="<?php echo get_page_link( get_page_by_title( 'Leistungen' )->ID ); ?>" class="read-more-btn"
                  >Mehr erfahren</a
                >
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
                <a href="<?php echo get_page_link( get_page_by_title( 'Leistungen' )->ID ); ?>" class="read-more-btn"
                  >Mehr erfahren</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SERVICES END -->

      <!-- ABOUT US SECTION -->
      <section id="about-us" class="padding bg-left">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-lg-5">
              <div class="home_about_img">
                      <img
                        class="img-fluid"
                        src="<?php echo get_theme_mod('home_about_img', get_bloginfo('template_url').'/img/about-illustration.svg'); ?>"
                        alt="illustration"
                      />
              </div>
            </div>
            <div class="col-sm-12 offset-lg-1 col-lg-6 text-left">
              <div class="heading">
                <span class="home_about_span">
                  <span class="span">
                    <?php echo get_theme_mod('home_about_span', 'Über Uns'); ?>
                    </span>  
                </span>
                <span class="home_about_heading">
                    <h2>
                        <?php echo get_theme_mod('home_about_heading', 'Wir sind spezialisiert auf kleine und mittlere Unternehmen und
                        Einzelunternehmer.'); ?>
                    </h2>
                </span>
              </div>
              <span class="home_about_paragraph">
                  <p>
                    <?php echo get_theme_mod('home_about_paragraph', 'Für (Arzt-)Praxen, Steuerbüros, Bürogemeinschaften und Berater
                        sind wir der richtige Partner mit einem pragmatischen Ansatz,
                        der Ihnen die Arbeit abnimmt und einfach zum Ziel führt.');
                    ?> 
                  </p>
              </span>
              <div class="btn-container d-flex">
                <a href="<?php echo get_page_link( get_page_by_title( 'Kontakt' )->ID ); ?>" class="btn btn-primary">Jetzt anfragen</a>
                <a href="<?php echo get_page_link( get_page_by_title( 'Über Uns' )->ID ); ?>" class="btn btn-secondary">Über Uns</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ABOUT US SECTION END -->

            <!-- PORTFOLIO-->
            <section id="portfolio" class="padding bg-right">
        <div class="container projects-container">
          <div class="row d-flex align-items-start">
            <div class="col-sm-12 col-lg-9 heading text-left">
                <span class="home_projects_span">
                    <span class="span">
                        <?php echo get_theme_mod('home_projects_span', 'Unsere Projekte'); ?>
                    </span>
                </span>
                <span class="home_projects_heading">
                    <h2>
                        <?php echo get_theme_mod('home_projects_heading', 'Ein kleiner Einblick in unsere Arbeit und die Ergebnisse für
                        unsere Kunden.'); ?>
                    </h2>
                </span>
            </div>
            <div
              class="col-sm-12 col-lg-2 text-center text-lg-right offset-lg-1"
            >
              <a class="read-more-btn" href="<?php echo get_page_link( get_page_by_title( 'Projekte' )->ID ); ?>"
                >Alle Projekte ansehen</a
              >
            </div>
          </div>
          <div class="row">
            <?php 
              $args = array( 'post_type' => 'projects', 'posts_per_page' => 3 );
              $the_query = new WP_Query( $args ); 
              ?>
              <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php get_template_part('content', get_post_format()); ?>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php else:  ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </section>
      <!-- PORTFOLIO END -->

    <!-- TESTIMONIALS -->
    <section id="testimonials" class="padding bg-left">
        <div class="container">
          <div class="row">
            <div class="col-12 text-left text-lg-center">
              <div class="heading">
                <span class="home_testimonials_span">
                    <span class="span">
                        <?php echo get_theme_mod('home_testimonials_span', 'Erfahrungen'); ?>
                    </span>
                </span>
                <span class="home_testimonials_heading">
                    <h2>
                        <?php echo get_theme_mod('home_testimonials_heading', 'Ein kleiner Einblick in unsere Arbeit und die Ergebnisse für
                        unsere Kunden.'); ?> 
                    </h2>
                </span>
                <span class="home_testimonials_paragraph">
                    <p>
                        <?php echo get_theme_mod('home_testimonials_paragraph', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Tempora laudantium dolore, expedita quo provident');
                        ?>
                    </p>
                </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-12">
              <div class="testimonials-container">
                <div
                  id="client-testimonial-carousel"
                  class="carousel slide"
                  data-ride="carousel"
                >
                  <div class="carousel-inner" role="listbox">
                  <?php 
                    $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 10 );
                    $the_query = new WP_Query( $args ); 
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <?php get_template_part('testimonial', get_post_format()); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                  <?php endif; ?>
                  </div>
                  <div class="carousel-control">
                    <ol class="carousel-indicators"></ol>
                    <div
                      class="carousel-control-prev"
                      href="#client-testimonial-carousel"
                      role="button"
                      data-slide="prev"
                    >
                      <i class="fas fa-chevron-left"></i>
                      <span class="sr-only">Previous</span>
                    </div>
                    <div
                      class="carousel-control-next"
                      href="#client-testimonial-carousel"
                      role="button"
                      data-slide="next"
                    >
                      <i class="fas fa-chevron-right"></i>
                      <span class="sr-only">Next</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- TESTIMONIALS END -->

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

            <!-- WHY CHOOSE -->
            <section id="why-choose" class="why-choose-section padding bg-left">
        <div class="container">
          <div class="row d-flex flex-column-reverse flex-lg-row align-items-center justify-content-between">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="row">
                <div class="col-6">
                  <div
                    class="single-why text-center d-flex flex-column align-items-center mb-3 mb-lg-4"
                  >
                    <div
                      class="service-icon icon-blue d-flex align-items-center justify-content-center"
                    >
                        <span class="whychoose_1_img">
                            <img
                                class="img-fluid"
                                src="<?php echo get_theme_mod('whychoose_1_img', get_bloginfo('template_url').'/img/responsive.svg'); ?>"
                                alt="illustration"
                                />
                        </span>
                    </div>
                    <span class="whychoose_1_title">
                        <h4>
                            <?php echo get_theme_mod('whychoose_1_title', 'Responsive Design'); ?> 
                        </h4>
                    </span>
                  </div>
                  <div
                    class="single-why text-center d-flex flex-column align-items-center mb-3 mb-lg-0"
                  >
                    <div
                      class="service-icon icon-blue d-flex align-items-center justify-content-center"
                    >
                      <span class="whychoose_2_img">
                            <img
                              class="img-fluid"
                              src="<?php echo get_theme_mod('whychoose_2_img', get_bloginfo('template_url').'/img/help.svg'); ?>"
                              alt="illustration"
                            />
                    </span>
                    </div>
                    <span class="whychoose_2_title">
                        <h4>
                            <?php echo get_theme_mod('whychoose_2_title', '24/7 Support'); ?>
                        </h4>
                    </span>
                  </div>
                </div>
                <div class="col-6">
                  <div
                    class="single-why text-center d-flex flex-column align-items-center mb-3 mt-0 mb-lg-4 mt-lg-5"
                  >
                    <div
                      class="service-icon icon-blue d-flex align-items-center justify-content-center"
                    >
                      <span class="whychoose_3_img">
                            <img
                              class="img-fluid"
                              src="<?php echo get_theme_mod('whychoose_3_img', get_bloginfo('template_url').'/img/checklist.svg'); ?>"
                              alt="illustration"
                            />
                    </span>
                    </div>
                    <span class="whychoose_3_title">
                        <h4>
                            <?php echo get_theme_mod('whychoose_3_title', 'Robuster Plan'); ?>
                        </h4>
                    </span>
                  </div>

                  <div
                    class="single-why text-center d-flex flex-column align-items-center mb-3 mb-lg-0"
                  >
                    <div
                      class="service-icon icon-blue d-flex align-items-center justify-content-center"
                    >
                      <span class="whychoose_4_img">
                            <img
                              class="img-fluid"
                              src="<?php echo get_theme_mod('whychoose_4_img', get_bloginfo('template_url').'/img/ruhrpott.svg'); ?>"
                              alt="illustration"
                            />
                    </span>
                    </div>
                    <span class="whychoose_4_title">
                        <h4>
                            <?php echo get_theme_mod('whychoose_4_title', 'Made im Pott'); ?>
                        </h4>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="why-left-wrap text-left">
                <div class="heading">
                    <span class="whychoose_span">
                        <span class="span">
                            <?php echo get_theme_mod('whychoose_span', 'Warum Webbros?'); ?>
                        </span>
                    </span>
                    <span class="whychoose_heading">
                        <h2>
                            <?php echo get_theme_mod('whychoose_heading', 'Wir beraten, unterstützen und erstellen'); ?> 
                        </h2>
                    </span>
                </div>
                <span class="whychoose_paragraph">
                    <p>
                        <?php echo get_theme_mod('whychoose_paragraph', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Nesciunt architecto eos ut dolore eaque assumenda harum aut
                        expedita voluptates rerum iusto accusamus doloribus eveniet
                        blanditiis repudiandae ex, pariatur nemo tenetur!');
                        ?>
                    </p>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- WHY CHOOSE END -->
</div>

<script>

const carousel = document.querySelector(".carousel-inner");

document.addEventListener("DOMContentLoaded", addActive);

function addActive() {
  if (carousel) {
    const carouselItems = carousel.children;
    carouselItems[0].classList.add("active");
  } else {
    return;
  }
}

</script>


<?php get_footer(); ?>
