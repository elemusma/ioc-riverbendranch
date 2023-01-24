<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if(get_field('header', 'options')) { the_field('header', 'options'); } ?>
<?php if(get_field('custom_css')) { ?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php } ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
if(get_field('body','options')) { the_field('body','options'); }

echo '<div class="secondary-nav position-relative w-100 bg-accent" style="top:0;z-index:12;">';

if(get_field('website_message','options')):
    echo '<div class="bg-light text-center">';
    echo '<span class="d-inline-block p-2" style="margin-bottom:-1rem;">' . get_field('website_message','options') . '</span>';
    echo '</div>';
endif;


echo '<div class="container z-3 position-relative text-white">';
echo '<div class="row align-items-center justify-content-between pt-2 pb-2">';


$logo = get_field('logo','options');

echo '<div class="col-lg-2 col-md-4 col-6">';
    echo '<a href="' . home_url() . '">';
    echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto pl-md-0 pl-4 pr-md-0 pr-4','style'=>'max-width:100%;']);
    echo '</a>';
    echo '</div>';

    echo '<div class="col-md-4 col-6 desktop-hidden">';
echo '<a id="navToggle" class="nav-toggle">';
echo '<div>';
echo '<div class="line-1 bg-accent-quaternary"></div>';
echo '<div class="line-2 bg-accent-quaternary"></div>';
echo '<div class="line-3 bg-accent-quaternary"></div>';
echo '</div>';
echo '</a>';
echo '</div>';

echo '<div class="col-lg-6 mobile-hidden text-center">';

echo '<div class="d-flex align-items-center justify-content-center">';
wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
));
echo '</div>';

echo '</div>';

echo '<div class="col-lg-3 col-md-4 text-md-right text-center">';
echo '<a href="tel:+1' . get_field('phone','options') . '" class="h2 text-white">' . get_field('phone','options') . '</a>';
echo '</div>';

echo '</div>';
echo '</div>';


echo '</div>';

echo '<div class="blank-space"></div>';


// $globalPlaceholderImg = get_field('global_placeholder_image','options');

// if(is_page()){
    // if(has_post_thumbnail()){
        
        // echo '<div class="position-absolute w-100 h-100 bg-attachment" style="background:url(' . get_the_post_thumbnail_url() . ');background-size:cover;background-attachment:fixed;background-position:center top;top:0;left:0;"></div>';
        
        // } else {
            // echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute','style'=>'object-position:top;']);
            // }
            // } elseif(!is_front_page()) {
                // echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute','style'=>'object-position:top;']);
                // }
                
if(is_front_page()):
    echo '<header class="position-relative w-100" style="top:0;left:0;min-height:80vh;">';

    $globalPlaceholderImg = get_field('global_placeholder_image','options');
    // if(has_post_thumbnail()){

    echo '<div class="position-absolute w-100 h-100 bg-attachment" style="background:url(' . get_the_post_thumbnail_url() . ');background-size:cover;background-attachment:fixed;background-position:center top;top:0;left:0;opacity:0;" id="imgHeader"></div>';
        
    //     } else {
    //     echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute','style'=>'object-position:top;']);
    //     }
    echo '<video playsinline autoplay muted loop class="w-100 h-100 position-absolute" style="object-fit:cover;pointer-events:none;" src="' . home_url() . '/wp-content/themes/insideoutcreative/videos/Web Banner-Final.mp4" id="headerVideo"></video>';

echo '<section class="hero position-relative z-2 sd">';

// if($logo){
//     echo '<div class="text-center pt-5">';
//     echo '<a href="' . home_url() . '">';
//     echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto pl-md-0 pl-4 pr-md-0 pr-4','style'=>'max-width:500px;']);
//     echo '</a>';
//     echo '</div>';
// }

if(!is_page(55)) {
echo '<div class="hero-content-inner text-white" style="padding:100px 0 350px;">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo '<div class="col-lg-9 text-center">';
echo '<h1 class="" style="font-size:40px;line-height:1;text-shadow:1px 1px 3px black;">' . get_the_title() . '</h1>';

echo '</div>';
echo '</div>';
echo '</div>';
}

echo '</section>';
echo '</header>';
endif;






echo '<div id="navMenuOverlay" class="position-fixed" style="z-index:12;"></div>';
echo '<div class="col-9 nav-items bg-accent desktop-hidden" id="navItems" style="z-index:13;">';
echo '<div class="pt-5 pb-5">';
echo '<div class="close-menu">';
echo '<div>';
echo '<span id="navMenuClose" class="close h1 text-white">X</span>';
echo '</div>';
echo '</div>';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:125px;']);
}

echo '</a>';
echo '</div>';

wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu list-unstyled mb-0'
));

echo '<div class="pt-5 text-white">';
the_field('footer_message','options');
echo '</div>';

echo '</div>';

?>