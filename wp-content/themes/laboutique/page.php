<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage La_Boutique
 * @since La Boutique 1.1
 */
if (DEBUG_INFO) {
	echo "\n<!-- FILE: /page.php ================================================================= -->\n";
}
get_header(); ?>
<?php
    $woo_page_ids=array();
    
    $unstyled=array(
        'woocommerce_shop_page_id',
        'woocommerce_cart_page_id',
        'woocommerce_checkout_page_id',
        'woocommerce_pay_page_id',
        'woocommerce_lost_password_page_id',      
        'woocommerce_change_password_page_id',
        'woocommerce_logout_page_id'
    );
    
    if (!is_user_logged_in() ){
        $unstyled[]='woocommerce_myaccount_page_id';
    }
    
    foreach($unstyled as $k=>$v){
        
        if ($id=get_option($v)){                                                
            $woo_page_ids[]=$id;
        }
        
        if ($wp_query->post->ID==$id){
            $$v=1;
        }
        
    }


    //check if this is woocommerce page
    $is_woocommerce=false;
    
    foreach(array('[woocommerce_my_account]','[woocommerce_checkout]') as $k=>$v){
        if (!empty($wp_query->post)){
            if (!empty($wp_query->post->post_content)){
                if (strpos($v,$wp_query->post->post_content)!==false){
                    $is_woocommerce=true;
                }
            }
        }
    }

    
?>
<?php if (in_array($wp_query->post->ID,$woo_page_ids)){ ?>
    <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>                
            <?php the_content(); ?>                
        <?php endwhile; ?>
<?php } else {?>
<!-- Static page 1 -->
<section class="static_page_1">


    <div class="container">
        <?php
        if (function_exists('woocommerce_get_template')){
            woocommerce_get_template( 'shop/breadcrumb.php' );
        }
        ?>
        <div class="row">
            <p href="#" class="products_description">
                <span><?php the_title(); ?></span></p>
            <div class="span12">
                <section class="static-page">
                    <div class="row-fluid action" >
                        <div class="span9">
                            <div class="content">


                                <div id="content" class="site-content" role="main">                                    

                                        <?php /* The loop */ ?>
                                        <?php while ( have_posts() ) : the_post(); ?>

                                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                                    <header class="entry-header">
                                                            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                                                            <div class="entry-thumbnail">
                                                                    <?php the_post_thumbnail(); ?>
                                                            </div>
                                                            <?php endif; ?>

                                                        <?php
                                                            
                                                            if ( function_exists('rwmb_meta') ) {
                                                                    // Get 'Diable page title' metabox value
                                                                    $title_settings = rwmb_meta( 'laboutique_page_title_settings', 'type=checkbox_list' );
                                                            } else {
                                                                    $title_settings = '';
                                                            }
                                                                                                  
                                                        ?>
                                                    </header><!-- .entry-header -->

                                                    <div class="entry-content">
                                                            <?php the_content(); ?>
                                                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', DOMAIN ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                                                    </div><!-- .entry-content -->

                                                    <footer class="entry-meta">
                                                            <?php the_tags();?>
                                                            <?php edit_post_link( __( 'Edit', DOMAIN ), '<span class="edit-link">', '</span>' ); ?>
                                                    </footer><!-- .entry-meta -->

                                                </article><!-- #post -->

                                                
                                        <?php endwhile; ?>

                                </div><!-- #content -->					


                            </div>
                        </div>
                        <div class="span3 hidden-desktop visible-phone visible-tablet">
                           <?php if ($is_woocommerce && is_user_logged_in()){?>
                                <? laboutique_my_account_sidebar_nav(array(
                                    'class'=>'nav nav-tabs nav-stacked',
                                ))?>
                            <?php } else {?>
                                <?php wp_nav_menu( array(
                                    'theme_location'=>'pages_sidebar',
                                    'menu_class'=>'nav nav-tabs nav-stacked',
                                    'fallback_cb'=>'false'                               
                                ));?>
                            <?php } ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


</section>    
<!-- End Static page 1 -->
<?php } ?>  


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
[contact-form-7 id="1006"][/vc_column][/vc_row]

