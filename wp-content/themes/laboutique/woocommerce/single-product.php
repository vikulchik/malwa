<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header('shop'); ?>
<!-- Product content -->
<section class="product">


    <!-- Product info -->
    <section class="product-info">
        <div class="container">
            <?php
            if (function_exists('woocommerce_get_template')){
                woocommerce_get_template( 'shop/breadcrumb.php' );
            }
            ?>
            
            <?php while ( have_posts() ) : the_post(); ?>
                <?php woocommerce_get_template_part( 'content', 'single-product' ); ?>
                    
            <?php endwhile; // end of the loop. ?>
        </div>
    </section>
    <?php
    ob_start();

    comment_form(array(
        'comment_notes_after'=>'',
        'comment_notes_before'=>'',
        'title_reply'=>'<div class="box-header"><h3 class="comment-description" style="color: #000;">Залишити коментар</h3></div>',

        'fields'=>array(
            'author' => '<div class="row-fluid"><div class="span4"><div class="control-group">' . '<label for="author" class="control-label">' . __( 'Name' , DOMAIN) . ( $req ? ' <span       class="required">*</span>' : '' ) . '</label> ' .
                '<div class="controls"><input class="span12" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" /></div></div></div>',
            'email'  => '<div class="span4"><div class="control-group"><label for="email" class="control-label">' . __( 'Email' , DOMAIN) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                '<div class="controls"><input class="span12" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" /></div></div></div>',
            'url'    => '<div class="span4"><div class="control-group"><label for="url" class="control-label">' . __( 'Website' , DOMAIN) . '</label> ' .
                '<div class="controls"><input class="span12" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div></div></div></div>',
        ),

        'comment_field'=>'<div class="row-fluid">
                <div class="span12">
                    <div class="control-group">     
                        <div class="controls">
                            <textarea class="span12" id="comment" name="comment" id="content" aria-required="true" placeholder="Текст повідомлення..."></textarea>
                        </div>
                    </div>
                </div>
            </div>'
    ));
    $comment_form=trim(ob_get_contents());
    ob_end_clean();
    ?>
    <?php if ( have_comments() || str_replace(" ","",$comment_form)) : ?>

        <div id="comments" class="comments-area">
            <?php if ( have_comments() ) : ?>
                <section class="post-comments">
                    <div class="box">
                        <div class="box-header">
                            <h3><?php
                                printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', DOMAIN ),
                                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
                                ?></h3>
                        </div>
                        <div class="box-content">
                            <div class="comment-items">
                                <?php
                                wp_list_comments(
                                    array(
                                        'callback'=>'format_comment',
                                        //'avatar_size' => 60,
                                        'max_depth'=>1
                                    )
                                /*array(
                                'style'       => 'div',
                                'short_ping'  => true,
                                'avatar_size' => 60,
                        ) */);
                                ?>
                            </div>
                        </div>
                        <!-- .comment-list -->

                        <?php
                        // Are there comments to navigate through?
                        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                            ?>
                            <nav class="navigation comment-navigation" role="navigation">
                                <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', DOMAIN ); ?></h1>
                                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', DOMAIN ) ); ?></div>
                                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', DOMAIN ) ); ?></div>
                            </nav><!-- .comment-navigation -->
                        <?php endif; // Check for comment navigation ?>

                        <?php if ( ! comments_open() && get_comments_number() ) : ?>
                            <?php /*<p class="no-comments"><?php _e( 'Comments are closed.' , DOMAIN ); ?></p>*/?>
                        <?php endif; ?>


                    </div>
                </section>
            <?php endif; ?>
            <?php if ($comment_form):?>
                <section class="post-comment-form">
                    <div class="box">
                        <?php echo $comment_form;?>

                    </div>
                </section>
            <?php endif; ?>

        </div>
        <!-- #comments -->

    <?php endif;?>

    <!-- End class="product-info" -->

    <?php if (!theme_option('shop_disable_facebook_comments')){?>
    <!-- Product Reviews -->
    <section class="product-reviews">
        <div class="container">
            <div class="span8 offset2">
                <h5><?php echo sprintf(__('Tell us why you %s this product', DOMAIN),'<span class="script">love&#10084;</span>');?></h5>
                

                <!-- Facebook comments -->
                <div id="fb-root"></div>
                <script>                            
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=460821237293986";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <div class="fb-comments" data-width="730" data-href="<?php the_permalink() ?>" data-num-posts="10"></div>
                <!-- End Facebook comments -->

            </div>
        </div>		
    </section>
    <!-- End class="product-reviews" -->
    <?php } ?>

    <!-- Related products -->
    <section class="product-related">
        <div class="container">
            <div class="span12">

                
                <?php // woocommerce_output_related_products(); ?>
                <?php woocommerce_upsell_display(); ?>
                
                
            </div>
        </div>	
    </section>                    
    <!-- End class="products-related" -->

<?php get_footer('shop'); ?>