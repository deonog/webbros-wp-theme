<?php 
    $price = get_post_meta($post->ID, 'Price', true); 
    $firstIcon = get_post_meta($post->ID, '1. Icon', true); 
    $firstDetail = get_post_meta($post->ID, '1. Detail', true); 
    $secondIcon = get_post_meta($post->ID, '2. Icon', true); 
    $secondDetail = get_post_meta($post->ID, '2. Detail', true); 
    $thirdIcon = get_post_meta($post->ID, '3. Icon', true); 
    $thirdDetail = get_post_meta($post->ID, '3. Detail', true); 
    $fourthIcon = get_post_meta($post->ID, '4. Icon', true); 
    $fourthDetail = get_post_meta($post->ID, '4. Detail', true); 
    $fifthIcon = get_post_meta($post->ID, '5. Icon', true); 
    $fifthDetail = get_post_meta($post->ID, '5. Detail', true); 
    $sixthIcon = get_post_meta($post->ID, '6. Icon', true); 
    $sixthDetail = get_post_meta($post->ID, '6. Detail', true); 
    $seventhIcon = get_post_meta($post->ID, '7. Icon', true); 
    $seventhDetail = get_post_meta($post->ID, '7. Detail', true); 
    $eighthIcon = get_post_meta($post->ID, '8. Icon', true); 
    $eigthDetail = get_post_meta($post->ID, '8. Detail', true); 
?>
  

<div class="col-sm-12 col-lg-4">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-uppercase text-center"><?php the_title(); ?></h4>
            <h6 class="card-price text-center"><?php echo $price; ?>€</h6>
            <hr />
            <ul class="fa-ul">
            <li>
                <span class="fa-li"><i class="fas fa-<?php echo $firstIcon; ?>"></i></span>
                <?php echo $firstDetail; ?>
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-<?php echo $secondIcon; ?>"></i></span>
                <?php echo $secondDetail; ?>
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-<?php echo $thirdIcon; ?>"></i></span>
                <?php echo $thirdDetail; ?>
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-<?php echo $fourthIcon; ?>"></i></span
                >
                <?php echo $fourthDetail; ?>
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-<?php echo $fifthIcon; ?>"></i></span>
                <?php echo $fifthDetail; ?>
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-<?php echo $sixthIcon; ?>"></i></span
                >
                <?php echo $sixthDetail; ?>
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-<?php echo $seventhIcon; ?>"></i></span
                >
                <?php echo $seventhDetail; ?>
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-<?php echo $eighthIcon; ?>"></i></span
                >
                <?php echo $eigthDetail; ?>
            </li>
            </ul>
            <a href="<?php echo get_page_link( get_page_by_title( 'Kontakt' )->ID ); ?>" class="btn btn-block btn-primary text-uppercase"
            >Jetzt anfragen</a
            >
        </div>
    </div>
</div>

