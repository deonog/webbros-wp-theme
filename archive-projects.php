<?php /* Template Name: Projects */ ?>

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


            <!-- PORTFOLIO-->
            <section id="portfolio" class="padding bg-right">
        <div class="container projects-container">
          <div class="row d-flex align-items-start">
            <div class="col-sm-12 col-lg-912 heading text-left text-lg-center">
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
          </div>
          <div class="row mb-5">
            <?php 
            $args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
            $the_query = new WP_Query( $args ); 
            $taxonomy = 'categories';
            $terms = get_terms($taxonomy); // Get all terms of a taxonomy
            $url = get_post_meta($post->ID, 'url', true); 
            ?>
            <div class="col-sm-12 text-center">
              <div
                class="tabs-list d-flex flex-column flex-lg-row justify-content-center"
              >
                <a class="tabs-all tab-active transition" data-filter="cat-all"
                  >Alle</a
                >
                <?php if ( $terms && !is_wp_error( $terms ) ) :
                  ?>
                          <?php foreach ( $terms as $term ) { ?>
                            <a class="transition" data-filter="cat-<?php echo $term->name; ?>"
                              ><?php echo $term->name; ?></a
                            >
                          <?php } ?>
                  <?php endif;?>
              </div>
            </div>
          </div>
          <div class="row d-flex">
              <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <?php 
              $terms = get_the_terms( $post->ID, 'categories' ); 
              ?>
              <div class="col-sm-12 col-lg-6 cat-all cat-<?php foreach ( $terms as $term ) { echo $term->name;} ?>">
    <div class="project">
        <div class="content">
        <a href="<?php echo $url; ?>">
            <div class="content-overlay"></div>
            <div class="img-container">
            <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
            <?php endif; ?>
            </div>
            <div
            class="content-details d-flex flex-column justify-content-end align-items-start fadeIn-bottom"
            >
            <div
                class="project-icon d-flex justify-content-center align-items-center"
            >
                <i class="fas fa-arrow-right"></i>
            </div>
            <h4><?php the_title(); ?></h4>
            <p>
                <?php the_excerpt(); ?> 
            </p>
            </div>
        </a>
        </div>
    </div>
</div>

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php else:  ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </section>
      <!-- PORTFOLIO END -->



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




<?php get_footer(); ?>