<?php /* Template Name: About Us */ ?>

<?php
get_header();
?>

<div class="wrapper about-us page">
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

      <!-- ABOUT US SECTION -->
      <section id="about-us" class="padding bg-left">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-lg-5">
              <span class="about_about_img_1">
                      <img
                        class="img-fluid"
                        src="<?php echo get_theme_mod('about_about_img_1', get_bloginfo('template_url').'/img/about-illustration.svg'); ?>"
                        alt="illustration"
                      />
              </span>
            </div>
            <div class="col-sm-12 offset-lg-1 col-lg-6 text-left">
              <div class="heading">
                <span class="about_about_span_1">
                  <span class="span">
                    <?php echo get_theme_mod('about_about_span_1', 'Über Uns'); ?>
                    </span>  
                </span>
                <span class="about_about_heading_1">
                    <h2>
                        <?php echo get_theme_mod('about_about_heading_1', 'Wir sind spezialisiert auf kleine und mittlere Unternehmen und
                        Einzelunternehmer.'); ?>
                    </h2>
                </span>
              </div>
              <span class="about_about_paragraph_1">
                  <p>
                    <?php echo get_theme_mod('about_about_paragraph_1', 'Für (Arzt-)Praxen, Steuerbüros, Bürogemeinschaften und Berater
                        sind wir der richtige Partner mit einem pragmatischen Ansatz,
                        der Ihnen die Arbeit abnimmt und einfach zum Ziel führt.');
                    ?> 
                  </p>
              </span>
            </div>
          </div>
        </div>
      </section>
      <!-- ABOUT US SECTION END -->

      <!-- ABOUT US SECTION 2 -->
      <section id="about-us" class="padding bg-right">
        <div class="container">
          <div
            class="row d-flex flex-column-reverse flex-lg-row align-items-center"
          >
            <div class="col-sm-12 col-lg-6 text-left">
              <div class="heading">
              <span class="about_about_span_2">
                <span class="span">
                  <?php echo get_theme_mod('about_about_span_2', 'Woher wir kommen'); ?>
                </span>
              </span>
              <span class="about_about_heading_2">
                    <h2>
                        <?php echo get_theme_mod('about_about_heading_2', 'Web Design Made Im Pott'); ?>
                    </h2>
                </span>
              </div>
              <span class="about_about_paragraph_2">
                  <p>
                    <?php echo get_theme_mod('about_about_paragraph_2', 'Für (Arzt-)Praxen, Steuerbüros, Bürogemeinschaften und Berater
                        sind wir der richtige Partner mit einem pragmatischen Ansatz,
                        der Ihnen die Arbeit abnimmt und einfach zum Ziel führt.');
                    ?> 
                  </p>
              </span>
            </div>
            <div class="col-sm-12 col-lg-5 offset-lg-1">
              <span class="about_about_img_2">
                      <img
                        class="img-fluid"
                        src="<?php echo get_theme_mod('about_about_img_2', get_bloginfo('template_url').'/img/about-illustration.svg'); ?>"
                        alt="illustration"
                      />
              </span>
            </div>
          </div>
        </div>
      </section>
      <!-- ABOUT US SECTION 2 END -->

    <!-- BANNER -->
    <section id="banner" class="padding">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
              <span class="about_banner_heading">
                <h3>
                 <?php echo get_theme_mod('about_banner_heading', 'Lass uns zusammenarbeiten'); ?> 
                </h3>
              </span>
              <span class="about_banner_paragraph">
                <p>
                  <?php echo get_theme_mod('about_banner_paragraph', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi,
                tenetur.'); ?> 
                </p>
              </span>
              <div class="btn-container d-flex justify-content-center">
                <a href="<?php echo get_page_link( get_page_by_title( 'Kontakt' )->ID ); ?>" class="btn btn-primary"
                  >Jetzt anfragen</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- BANNER END -->

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