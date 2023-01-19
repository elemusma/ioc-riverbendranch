<?php 
/**
 * Template Name: About
 */
get_header(); 

if(have_rows('slides')): while(have_rows('slides')): the_row();
$bgImg = get_sub_field('background_image');
$title = get_sub_field('title');
$label = get_sub_field('label');
$section = sanitize_title_with_dashes($label);
$content = get_sub_field('content');


if($bgImg){
    echo '<section id="section-' . $section . '" class="full-height pt-5 pb-5 position-relative overflow-h section-full d-flex align-items-center text-white bg-attachment ' . get_sub_field('classes') . '" style="min-height:100vh;background:url(' . wp_get_attachment_image_url($bgImg['id'],'full') . ');background-size:cover;background-attachment:fixed;' . get_sub_field('style') . '">';
    if(get_sub_field('show_overlay') == 'Yes'){
        echo '<div class="position-absolute w-100 h-100" style="background:#827c7c;mix-blend-mode:multiply;top:0;left:0;"></div>';
    }
} else {
    echo '<section id="section-' . $section . '" class="full-height pt-5 pb-5 position-relative overflow-h section-full d-flex align-items-center ' . get_sub_field('classes') . '" style="min-height:100vh;' . get_sub_field('style') . '">';
    // echo '</section>';
}


echo '<div class="container">';
echo '<div class="row align-items-center">';
echo '<div class="col-md-9" data-aos="fade-right">';
echo '<div class="" style="margin-bottom:-1rem;">';
echo '<h2 class="text-accent-secondary h1" style="text-shadow:1px 1px white;font-size:50px;">' . $title . '</h2>';
echo $content;
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';



echo '</section>';


endwhile; 
endif;


if(get_sub_field('show_label') == 'Yes'){

if(have_rows('slides')):
echo '<div class="position-fixed side-navbar" style="top:50%;right:25px;transform:translate(0, -50%);z-index:2;">';

echo '<ul class="list-unstyled text-right mr-md-4 mr-0">';
while(have_rows('slides')): the_row();
$label = get_sub_field('label');
$section = sanitize_title_with_dashes($label);
$rowIndex=get_row_index(); // not sure what this is for

echo '<li id="anchor-section-' . $section . '" class="mt-2 mb-2 position-relative">';
echo '<a href="#section-' . $section . '" class="pl-md-5 pl-2 pr-2 text-white position-relative h5">';
echo $label;
echo '</a>';
echo '</li>';

endwhile;
echo '</ul>';
echo '</div>';
endif;

}


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

get_footer(); 
?>