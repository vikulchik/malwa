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

<div class="products">
    <div class="products_block">
        <div class="products_item" >
            <div class="products-image">
                <img src="wp-content/themes/laboutique/images/img-1.jpg" alt="">
            </div>

            <a href="http://malwa.rubets.pro/category/%D0%B2%D1%81%D0%B5-%D0%B4%D0%BB%D1%8F-%D0%BD%D1%96%D0%B3%D1%82%D1%96%D0%B2/" class="products_description">
                <span>все для нігтів</span></a>
        </div>
        <div class="products_item">
            <div class="products-image">
                <img src="wp-content/themes/laboutique/images/img-2.jpg" alt="">
                </div>
            <a href="http://malwa.rubets.pro/category/depiljcij/" class="products_description">
                <span>депіляція</span>
            </a>
        </div>
        <div class="products_item">
            <div class="products-image">
            <img src="wp-content/themes/laboutique/images/img-3.jpg" alt="">
                </div>
            <a href="http://malwa.rubets.pro/category/%D0%B2%D1%81%D0%B5-%D0%B4%D0%BB%D1%8F-%D0%B2%D0%BE%D0%BB%D0%BE%D1%81%D1%81%D1%8F/" class="products_description">
                <span>все для волосся</span></a>
        </div>
    </div>
    <div class="products_block">
        <div class="products_item">
            <div class="products-image">
            <img src="wp-content/themes/laboutique/images/img-4.png" alt="">
                </div>
            <a href="http://malwa.rubets.pro/category/%D0%B2%D1%81%D0%B5-%D0%B4%D0%BB%D1%8F-%D0%B2%D1%96%D0%B9-%D1%82%D0%B0-%D0%B1%D1%80%D1%96%D0%B2/" class="products_description">
                <span>все для вій та брів</span></a>
        </div>
        <div class="products_item">
            <div class="products-image">
            <img src="wp-content/themes/laboutique/images/img-5.jpg" alt="">
                </div>
            <a href="http://malwa.rubets.pro/category/%D0%B4%D0%B5%D0%B7%D1%96%D0%BD%D1%84%D0%B5%D0%BA%D1%86%D1%96%D1%8F-%D1%81%D1%82%D0%B5%D1%80%D0%B8%D0%BB%D1%96%D0%B7%D0%B0%D1%86%D1%96%D1%8F/" class="products_description">
                <span>дезинфекція, стерилізація</span></a>
        </div>
        <div class="products_item">
            <div class="products-image">
            <img src="wp-content/themes/laboutique/images/img-6.jpg" alt="">
                </div>
            <a href="http://malwa.rubets.pro/category/%D0%BE%D0%B4%D0%BD%D0%BE%D1%80%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0-%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%86%D1%96%D1%8F/" class="products_description">
                <span>одноразова продукція</span></a>
        </div>
    </div>
</div>
<div class="slider-mark-block">
    <p class="mark_description">
        <span>Торгівельні марки</span></p>
    <ul class="mark-list">
        <li class="mark-item">
            <a href="#">
                <img src="wp-content/themes/laboutique/images/kodi.png" alt="">
            </a>
        </li>
        <li class="mark-item">
            <a href="#">
                <img src="wp-content/themes/laboutique/images/irisc.png" alt="">
            </a>
        </li>
        <li class="mark-item">
            <a href="#">
                <img src="wp-content/themes/laboutique/images/nails.png" alt="">
            </a>
        </li>
        <li class="mark-item">
            <a href="#">
                <img src="wp-content/themes/laboutique/images/blaze.png" alt="">
            </a>
        </li>
        <li class="mark-item">
            <a href="#">
                <img src="wp-content/themes/laboutique/images/gga.png" alt="">
            </a>
        </li>
        <li class="mark-item">
            <a href="#">
                <img src="wp-content/themes/laboutique/images/kodi.png" alt="">
            </a>
        </li>
        <li class="mark-item">
            <a href="#">
                <img src="wp-content/themes/laboutique/images/irisc.png" alt="">
            </a>
        </li>
    </ul>
</div>
<?php get_footer(); ?>
