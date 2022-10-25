<?php
/**
 * Template Name: Projects
 */
 get_header();

 if(get_the_content()){

    echo '<section class="pt-5 pb-5">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else:
    echo '<p>Sorry, no posts matched your criteria.</p>';
    endif;
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
    
    }

 if(have_rows('projects')):

    echo '<section class="pt-5 pb-5 position-relative">';
    echo '<div class="container">';
    echo '<div class="row">';
    $projectCounter = 0;
    while(have_rows('projects')): the_row();
    $gallery = get_sub_field('gallery');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $projectCounter++;

    echo '<div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="' . $projectCounter . '50">';
    if( $gallery ): 
        echo '<div class="project-carousel owl-carousel owl-theme">';
        foreach( $gallery as $image ):
            echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set-' . $projectCounter . '">';
            echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 img-portfolio img-hover','style'=>'height:250px;object-fit:cover;'] );
            echo '</a>';
        endforeach; 
        echo '</div>';
        else :
            echo '<div class="w-100 bg-light" style="height:250px;"></div>';
    endif;
    echo '<h2 class="h4 bold mt-4">' . $title . '</h2>';
    echo '<h6 class="text-accent-orange bold">' . $subtitle . '</h6>';
    echo '</div>';
    
    
endwhile;
echo '</div>';
echo '</div>';
    echo '</section>';


 endif;

 get_footer();
?>