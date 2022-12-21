<?php 
get_header();


// start of map background
echo '<div class="position-relative" style="">';


// start of intro
if(have_rows('intro_content')): while(have_rows('intro_content')): the_row();
$bgImg = get_sub_field('background_image');
$icons = get_sub_field('icons');
// $pretitle = get_sub_field('pretitle');
// $title = get_sub_field('title');
// $subtitle = get_sub_field('subtitle');
// $content = get_sub_field('content');
// $button = get_sub_field('button');
// $button_url = $button['url'];
// $button_title = $button['title'];
// $button_target = $button['target'] ? $button['target'] : '_self';


echo '<section class="position-relative z-3 pb-5 bg-light" style="">';

// echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'w-100 h-100 position-absolute','style'=>'top:0;left:0;object-fit:cover;']);

if( have_rows('icons')):
    $iconsCounterImages = 0;
    while(have_rows('icons')): the_row();
    $iconsCounterImages++;
    $bgImgIcons = get_sub_field('background_image');

    // if($iconsCounterImages == 1){
    //     echo wp_get_attachment_image($bgImgIcons['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img-icons tab-bg-img-active','style'=>'top:0;left:0;object-fit:cover;','id'=>'tab-bg-img-' . $iconsCounterImages . '']);
    // } else {
    //     echo wp_get_attachment_image($bgImgIcons['id'],'full','',['class'=>'w-100 h-100 position-absolute bg-img-icons','style'=>'top:0;left:0;object-fit:cover;','id'=>'tab-bg-img-' . $iconsCounterImages . '']);
    // }

    endwhile;
endif;

// echo '<div class="position-absolute w-100 h-100 bg-black" style="opacity:.5;top:0;left:0;"></div>';

echo '<div class="container">';

if( have_rows('icons')):
echo '<div class="row justify-content-center row-intro-icon">';
$iconsCounter = 0;
while(have_rows('icons')): the_row();
$icon = get_sub_field('icon');
$iconsCounter++;

if($iconsCounter == 1) {
echo '<div class="col-lg col-md-4 col-6 text-center col-intro-icon" style="margin-top:-50px;">';
echo '<div class="position-relative d-inline-block p-2 tab-icon tab-icon-active" style="border-radius:50%;border:1px solid #eaeaea;" id="tab-icon-' . $iconsCounter . '">';
echo '<div class="position-relative bg-accent d-inline-block p-2" style="border-radius:50%;">';
echo wp_get_attachment_image($icon['id'], 'full','',['class'=>'w-auto img-portfolio p-2','style'=>'height:75px;width:75px;object-fit:contain;'] );
echo '</div>';
echo '</div>';
echo '<span class="p-2 d-block aspira-bold" style="">' . $icon['title'] . '</span>';
echo '</div>';
} else {
echo '<div class="col-lg col-md-4 col-6 text-center col-intro-icon" style="margin-top:-50px;">';
echo '<div class="position-relative d-inline-block p-2 tab-icon" style="border-radius:50%;border:1px solid #eaeaea;" id="tab-icon-' . $iconsCounter . '">';
echo '<div class="position-relative bg-accent d-inline-block p-2" style="border-radius:50%;">';
echo wp_get_attachment_image($icon['id'], 'full','',['class'=>'w-auto img-portfolio p-2','style'=>'height:75px;width:75px;object-fit:contain;'] );
echo '</div>';
echo '</div>';
echo '<span class="p-2 d-block aspira-bold" style="">' . $icon['title'] . '</span>';
echo '</div>';
}



endwhile; 
echo '</div>';
endif;

if( have_rows('icons')):
// echo '<div class="row justify-content-center pt-5">';
// echo '<div class="col-lg-6 text-center col-tab-content text-white">';
$iconsCounter = 0;
while(have_rows('icons')): the_row();
$pretitle = get_sub_field('pretitle');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$content = get_sub_field('content');
$bgImg = get_sub_field('background_image');

$iconsCounter++;

if($iconsCounter == 1){
echo '<div class="w-100 tab-content tab-content-active pt-5" id="tab-content-' . $iconsCounter . '">';
echo '<div class="col-tab-content row justify-content-center">';

echo '<div class="col-lg-6 text-center">';
echo '<h2 class="proxima-bold">' . $title . '</h2>';

echo '<div class="pt-4 pb-5" style="font-size:125%;">';
echo $content;
echo '</div>';

if(have_rows('buttons')): while(have_rows('buttons')): the_row();
$button = get_sub_field('button');
$button_url = $button['url'];
$button_title = $button['title'];
$button_target = $button['target'] ? $button['target'] : '_self';
echo '<a class="btn-main" style="" href="' . esc_url( $button_url ) . '" target="' . esc_attr( $button_target ) . '">' . esc_html( $button_title ) . '</a>';
endwhile; endif;
echo '</div>';

echo '<div class="col-lg-6 text-center">';
echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'w-100 h-100']);
echo '</div>';

echo '</div>';
echo '</div>';

} else {
echo '<div class="w-100 tab-content" style="" id="tab-content-' . $iconsCounter . '">';
echo '<div class="col-tab-content row justify-content-center">';
echo '<div class="col-lg-6 text-center">';

echo '<h2 class="proxima-bold">' . $title . '</h2>';

echo '<div class="pt-4 pb-5" style="font-size:125%;">';
echo $content;
echo '</div>';

if(have_rows('buttons')): while(have_rows('buttons')): the_row();
$button = get_sub_field('button');
$button_url = $button['url'];
$button_title = $button['title'];
$button_target = $button['target'] ? $button['target'] : '_self';
echo '<a class="btn-main" style="" href="' . esc_url( $button_url ) . '" target="' . esc_attr( $button_target ) . '">' . esc_html( $button_title ) . '</a>';
endwhile; endif;
echo '</div>';

echo '<div class="col-lg-6 text-center">';
echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'w-100 h-100']);
echo '</div>';

echo '</div>';
echo '</div>';
}


endwhile;
// echo '</div>';
// echo '</div>';
endif;


echo '</div>';
echo '</section>';
endwhile; endif;
// end of intro


// start of projects
if(have_rows('past_projects')): while(have_rows('past_projects')): the_row();
$bgImg = get_sub_field('background_image');
$content = get_sub_field('content');
$gallery = get_sub_field('gallery');
echo '<section class="position-relative bg-attachment" style="z-index:10;">';


if($bgImg):
echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'w-100 h-100 position-absolute','style'=>'top:0px;left:0;object-fit:cover;']);
endif;

echo '<div class="container">';
echo '<div class="row pl-lg-5 pr-lg-5 pl-md-3 pr-md-3" style="padding:100px 0;">';
echo '<div class="col-12 text-center">';

echo '<div class="pb-4">';
echo $content;
echo '</div>';

if( $gallery ): 
echo '<div class="row">';
$galleryCounter = 0;
foreach( $gallery as $image ):
$galleryCounter++;
if($galleryCounter == 1){
echo '<div class="col-md-8 mb-md-0 mb-4">';
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" class="d-block position-relative overflow-h">';

// echo '<div class="position-absolute d-inline-block h-100 z-1" style="transform:translate(-50%, 0px);">';
// echo '<span class="h4 text-white bg-accent-secondary pl-4 pr-4 pt-2 pb-2 d-inline-block" style="white-space:nowrap;">' . $image['title'] . '</span>';
// echo '</div>';


echo '<div class="position-relative img-hover w-100">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100','style'=>'object-fit:cover;    height:450px;'] );
echo '</div>';

echo '</a>';
echo '</div>';
}
endforeach;

endif;

if( $gallery ): 
echo '<div class="col-md-4 col-second-gallery">';
$galleryCounter2 = 0;
foreach( $gallery as $image ):
$galleryCounter2++;
if($galleryCounter2 > 1 && $galleryCounter2 < 4){
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" class="d-block position-relative overflow-h">';

// echo '<div class="position-absolute d-inline-block h-100 z-1" style="transform:translate(-50%, 0px);">';
// echo '<span class="h4 text-white bg-accent-secondary pl-4 pr-4 pt-2 pb-2 d-inline-block" style="white-space:nowrap;">' . $image['title'] . '</span>';
// echo '</div>';

echo '<div class="position-relative img-hover w-100">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 h-50 col-second-gallery','style'=>'height:400px;object-fit:cover;'] );
echo '</div>';

echo '</a>';
}

endforeach;
echo '</div>';
endif;

if( $gallery ):
$galleryCounter3 = 0;
foreach( $gallery as $image ):
$galleryCounter3++;
if($galleryCounter3 > 3){
echo '<div class="col-md-4 mt-4">';
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" class="d-block position-relative overflow-h">';

// echo '<div class="position-absolute d-inline-block h-100 z-1" style="transform:translate(-50%, 0px);">';
// echo '<span class="h4 text-white bg-accent-secondary pl-4 pr-4 pt-2 pb-2 d-inline-block" style="white-space:nowrap;">' . $image['title'] . '</span>';
// echo '</div>';

echo '<div class="position-relative img-hover w-100">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100','style'=>'height:200px;object-fit:cover;']);
echo '</div>';

echo '</a>';
echo '</div>';
}

endforeach;
endif;


if( $gallery ):
echo '</div>';
endif;




echo '</div>';
echo '</div>';
echo '</div>';


echo '</section>';
endwhile; endif;
// end of projects

// echo wp_get_attachment_image(483,'full','',['class'=>'position-absolute w-100 h-100','style'=>'bottom:0;left:0;z-index: 3;mix-blend-mode: multiply;opacity: .15;object-fit: contain;object-position: bottom;pointer-events:none;']);
echo '</div>';
// end of map background

// start of bars

if(have_rows('bars_section')): while(have_rows('bars_section')): the_row();
echo '<section class="pt-5 pb-5 position-relative d-lg-none" style="">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';


echo '<div class="col-md-9 text-center">';
$mainContent = get_sub_field('content');
echo get_sub_field('content');
echo '</div>';


echo '</div>';
echo '</div>';

echo '<div class="d-flex align-items-center w-100">';

echo '<div class="bg-accent-secondary w-100" style="height:4px;"></div>';
echo wp_get_attachment_image(554,'full','',['class'=>'w-auto mr-4 ml-4','style'=>'']);
echo '<div class="bg-accent-secondary w-100" style="height:4px;"></div>';

echo '</div>';

echo '</section>';

if(have_rows('individual_bars')):
$barsCounter = 0;
echo '<section class="position-relative overflow-h section-bars" style="">';

echo '<div class="position-absolute text-center text-white w-100 z-3 d-lg-block d-none" style="top:25%;left:0;">';
echo $mainContent;
echo '<div class="d-flex align-items-center w-100">';

echo '<div class="bg-accent-secondary w-100" style="height:4px;"></div>';
echo wp_get_attachment_image(554,'full','',['class'=>'w-auto mr-4 ml-4','style'=>'']);
echo '<div class="bg-accent-secondary w-100" style="height:4px;"></div>';

echo '</div>';
echo '</div>';

echo '<div class="row" style="">';

while(have_rows('individual_bars')): the_row();

$barsCounter++;

$title = get_sub_field('title');
$ID = sanitize_title_with_dashes($title);
$image = get_sub_field('image');
$imageMobile = get_sub_field('image_mobile');
$icon = get_sub_field('icon');
$innerContent = get_sub_field('inner_content');
$link = get_sub_field('link');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';


echo '<div class="col-lg col-md-6 text-center w-100 overflow-h position-relative z-2 col-full-background d-flex align-items-end justify-content-center" style="padding-top:400px;padding-bottom:0px;min-height:94vh;" id="col-' . $ID . '">';

if($barsCounter == 1){

    // start of image mobile for first column
    if($imageMobile){
        echo wp_get_attachment_image($imageMobile['id'],'full','',['class'=>'position-absolute d-lg-none d-block w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute d-lg-block d-none h-100 img-full-background','style'=>'top:0;object-fit:cover;min-width:100vw;']);
    } else {
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute h-100 img-full-background','style'=>'top:0;object-fit:cover;min-width:100vw;']);
    }
    // end of image mobile for first column

} else {

    if($imageMobile){
        echo wp_get_attachment_image($imageMobile['id'],'full','',['class'=>'position-absolute d-lg-none d-block w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute d-lg-block d-none h-100 img-full-background','style'=>'top:0;object-fit:cover;min-width:100vw;']);
    } else {
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute h-100 img-full-background','style'=>'top:0;object-fit:cover;min-width:100vw;']);
    }

}
echo '<div class="position-absolute h-100 col-full-background-overlay bg-black d-lg-block d-none" style="opacity:.4;pointer-events:none;top:0;width:110vw;left:-' . ($barsCounter-1) . '00%;mix-blend-mode:multiply;"></div>';

echo '<div class="position-absolute w-100 h-100 bg-accent-secondary d-lg-none d-block" style="opacity:.5;pointer-events:none;top:0;mix-blend-mode:multiply;"></div>';

echo '<div class="position-absolute w-100 h-100 col-full-background-borders" style="top:0;left:0;border-left:1px solid white;pointer-events:none;"></div>';


echo '<div class="position-relative inner-content-outer" style="transition:all .25s ease-in-out;">';

echo '<a class="" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" style="text-decoration:none;">';

echo '<div class="image-title">';
echo '<div class="d-inline-block" style="">';
echo wp_get_attachment_image($icon['id'],'full','',['class'=>'','style'=>'width:35px;height:35px;object-fit:contain;']);
echo '</div>';

echo '<div class="mt-3 mb-3"><span class="h6 text-white">' . $title . '</span></div>';
echo '</div>';

echo '<div class="pl-3 pr-3 text-white inner-content">';
echo $innerContent;
echo '</div>';

echo '</a>';

echo '</div>';
echo '</div>';

endwhile;

echo '</div>';
// echo '</div>';
echo '</section>';
endif;
// end of bars repeaters

endwhile; endif;

// end of bars

// start of testimonials
echo '<section class="pt-5 pb-5 testimonials position-relative z-1" style="">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 text-center pb-5">';

$testimonialsGroup = get_field('testimonials_content');
$tTitle = $testimonialsGroup['title'];
$tContent = $testimonialsGroup['content'];

echo '<h2 class="text-accent h1">' . $tTitle . '</h2>';

if($tContent) {
echo $tContent;
}

echo '</div>';
echo '</div>';
echo '</div>';




$counterTestimonial = 0;
if(have_rows('testimonials')): 
    echo '<div class="bg-accent text-white pt-5 pb-5" style="border-top:15px solid var(--accent-secondary);border-bottom:15px solid var(--accent-secondary);">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="testimonials-carousel owl-carousel owl-theme">';

    while(have_rows('testimonials')): the_row(); 
$counterTestimonial++;

echo '<div class="col-testimonial mt-2 mb-2 pl-md-0 pr-md-0 pl-5 pr-4" data-aos="fade-up" data-aos-delay="' . $counterTestimonial . '00">';

echo wp_get_attachment_image(516,'full','',['class'=>'bg-img position-absolute img-quotes','style'=>'width:25px;height:auto;']);
echo '<div class="position-relative pl-md-5 pr-md-5">';

echo '<small class="gray-text-1">';
echo get_sub_field('content');
echo '</small>';

echo '<div class="row align-items-center">';
$testimonialsImage = get_sub_field('headshot'); 
if($testimonialsImage){
echo '<div class="col-lg-3 col-5">';
echo wp_get_attachment_image($testimonialsImage['id'],'full','',['class'=>'img-testimonial h-auto w-100']); 
echo '</div>';
}

echo '<div class="col-lg-9 col-7">';
echo '<small>';
echo '<span class="h6"><strong>' . get_sub_field('name') . '</strong></span><br><span class="d-block">' . get_sub_field('job_title') . '</span>';

echo '</small>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
endwhile; 

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

endif;

echo '</section>';
// end of testimonials

// start of contact section
if(have_rows('contact_section')): while(have_rows('contact_section')): the_row();
echo '<section class="pt-5 pb-5 bg-accent-secondary position-relative z-1" style="">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 text-center text-white">';
echo get_sub_field('content_top');
echo '</div>';
echo '</div>';
echo '</div>';

echo '</section>';

echo '<section class="pt-5 pb-5 position-relative z-1" style="">';
echo '<div class="position-absolute w-100 bg-accent-quaternary" style="top:50%;left:0;height:70%;transform:translate(0,-50%);"></div>';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-6 text-center">';
echo '<div class="position-relative pt-5 pr-md-5 pl-md-5 pb-5 pl-3 pr-4 h-100" style="background:#c2c2c2;border:4px solid white;box-shadow:inset 0px 0px 5px rgba(0,0,0,.5);">';
echo get_sub_field('content_bottom');
echo '</div>';
echo '</div>';
echo '<div class="col-md-6 text-center">';
echo '<div class="position-relative pt-5 pr-md-5 pl-md-5 pl-3 pr-4 h-100" style="background:#c2c2c2;border:4px solid white;box-shadow:inset 0px 0px 5px rgba(0,0,0,.5);">';
echo get_sub_field('content_right');
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</section>';
endwhile; endif;
// end of contact section

get_footer(); ?>