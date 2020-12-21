<?php 
$url = get_post_meta($post->ID, 'url', true); 
?>

<div class="col-sm-12 col-lg-4">
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