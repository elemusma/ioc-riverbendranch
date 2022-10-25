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

echo '<div class="secondary-nav text-white position-relative w-100 bg-accent" style="top:0;z-index:12;">';


echo '<div class="container z-3 position-relative">';
echo '<div class="row align-items-center justify-content-center">';

echo '<div class="col-6 desktop-hidden">';
echo '<a id="navToggle" class="nav-toggle">';
echo '<div>';
echo '<div class="line-1 bg-white"></div>';
echo '<div class="line-2 bg-white"></div>';
echo '<div class="line-3 bg-white"></div>';
echo '</div>';
echo '</a>';
echo '</div>';


echo '<div class="col-4 text-center d-flex align-items-center justify-content-center">';

echo '<div class="mobile-hidden">';
wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
));
echo '</div>';

echo '</div>';

echo '</div>';
echo '</div>';


echo '</div>';

echo '<div class="blank-space"></div>';

echo '<header class="position-relative w-100" style="top:0;left:0;">';

$globalPlaceholderImg = get_field('global_placeholder_image','options');


if(is_page()){
if(has_post_thumbnail()){

echo '<div class="position-absolute w-100 h-100 bg-attachment" style="background:url(' . get_the_post_thumbnail_url() . ');background-size:cover;background-attachment:fixed;top:0;left:0;"></div>';

} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute','style'=>'object-position:top;']);
}
} elseif(!is_front_page()) {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute','style'=>'object-position:top;']);
}

$logo = get_field('logo','options');

echo '<section class="hero position-relative z-2">';

if($logo){
    echo '<div class="text-center pt-5">';
    echo '<a href="' . home_url() . '">';
    echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto pl-md-0 pl-4 pr-md-0 pr-4','style'=>'max-width:500px;']);
    echo '</a>';
    echo '</div>';
}

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



?>

<div id="navMenuOverlay" class="position-fixed" style="z-index:4;"></div>
<div class="col-9 nav-items bg-black desktop-hidden" id="navItems" style="">
<div class="pt-5 pb-5">
<div class="close-menu">
<div>
<span id="navMenuClose" class="close h1 text-white">X</span>
</div>
</div>
<a href="<?php echo home_url(); ?>">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:125px;']);
}
?>
</a>
</div>
<?php 
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu list-unstyled mb-0'
));
?>
</div>