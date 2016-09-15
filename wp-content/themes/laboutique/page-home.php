<?php
/*
Template Name: Store home page
*/
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
*!------
*<div id="carusel">
*<?php echo do_shortcode("[all_in_one_carousel settings_id='1']"); ?>
*</div> 
 * @package WordPress
 * @subpackage La_Boutique
 * @since La Boutique 1.1
 */
if (DEBUG_INFO) {
	echo "\n<!-- FILE: /page-home.php ================================================================= -->\n";
}
get_header(); ?>
<?php putRevSlider("malva","homepage") ?>
<div class="products">
    <div class="products_block">
        <div class="products_item" >
            <img src="wp-content/themes/laboutique/images/img-1.jpg" alt="">
            <a href="#" class="products_description">
                <span>все для нігтів</span></a>
        </div>
        <div class="products_item">
            <img src="wp-content/themes/laboutique/images/img-2.jpg" alt="">
            <a href="#" class="products_description">
                <span>депіляція</span>
            </a>
        </div>
        <div class="products_item">
            <img src="wp-content/themes/laboutique/images/img-3.jpg" alt="">
            <a href="#" class="products_description">
                <span>все для волосся</span></a>
        </div>
    </div>
    <div class="products_block">
        <div class="products_item">
            <img src="wp-content/themes/laboutique/images/img-4.png" alt="">
            <a href="#" class="products_description">
                <span>все для вій та брів</span></a>
        </div>
        <div class="products_item">
            <img src="wp-content/themes/laboutique/images/img-5.jpg" alt="">
            <a href="#" class="products_description">
                <span>дезинфекція, стерилізація</span></a>
        </div>
        <div class="products_item">
            <img src="wp-content/themes/laboutique/images/img-6.jpg" alt="">
            <a href="#" class="products_description">
                <span>одноразова продукція</span></a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
