<footer>
<section class="bg-accent-dark pt-5 pb-5">
<div class="container">
<div class="row justify-content-center align-items-center">
<div class="col-lg-5 col-9 text-center pb-5">
<a href="<?php echo home_url(); ?>">
<?php $logo = get_field('logo','options'); $logoFooter = get_field('logo_footer','options'); 
if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
}
?>
</a>
</div>
<?php 
echo '<div class="col-12">';
wp_nav_menu(array(
'menu' => 'footer',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center text-white'
));
echo '</div>';
echo '</div>';

echo '<div class="row justify-content-end align-items-center pt-5">';

echo '<div class="col-lg-3 text-center">';
echo get_template_part('partials/si');
echo '</div>';

echo '<div class="col-lg-6 text-white">';

echo '<div style="" class="">';
the_field('footer_message','options');

echo '<div class="d-flex justify-content-center align-items-center flex-wrap">';
echo '<a href="mailto:rick@dallasjib.com" target="_blank" class="text-accent-blue-light">';
echo '<em>';
echo '<strong>rick@dallasjib.com</strong>';
echo '</em>';
echo '</a>';
echo '<div class="bg-accent mx-3" style="width: 1px; height: 15px;"></div>';
echo '<p class="mb-0 pl-2">Phone: </p>';
echo '<a href="tel:+12145326820" class="text-white text-decoration-none">';
echo '<strong>214-532-6820</strong>';
echo '</a>';
echo '</div>';

echo '</div>';
echo '</div>';


echo '<div class="col-lg-3 text-center pt-md-0 pt-5">';

// echo '<p class="text-white mb-0"><small>Created by</small></p>';
echo '<a href="https://insideoutcreative.io/" target="_blank" title="Website Development, Design &amp SEO in Colorado and Florida" style="padding-top:35px;"><img class="auto img-backlink" src="https://insideoutcreative.io/wp-content/uploads/2022/04/created-by-inside-out-creative.png" alt="Website Development, Design &amp SEO in Colorado - Florida" width="125px" /></a>';

echo '</div>';


// echo '<div class="col-md-3 text-center text-white">';

// echo '</div>';

?>

</div>
</div>
</section>

</footer>
<?php if(get_field('footer', 'options')) { the_field('footer', 'options'); } ?>
<?php wp_footer(); ?>
</body>
</html>