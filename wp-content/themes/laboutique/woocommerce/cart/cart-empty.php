<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

wc_print_notices();

?>

<section class="cart-empty">


        <div class="container">
            
            
            <div class="row">
                <div class="span6 offset3">

                    
                    

                        <div class="box">
                            <div class="hgroup title">
                                <h3 style="margin-top: 30px"><?php echo __('Кошик', DOMAIN); ?></h3>
                                
                               
                                
                            </div>

                            <div class="box-content">
                                

                                <p class="cart-empty" style="margin-bottom: 30px"><?php _e( 'Ваш кошик порожній.', 'woocommerce' ) ?></p>

                                <?php do_action( 'woocommerce_cart_is_empty' ); ?>

                                
                                
                                
                                
                            </div>

                            <div class="buttons">
                                <a class="button btn  btn-small" style="background: #f3d3ca; border-radius: 25px; color: #781b34; text-transform: inherit" href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>"><?php _e( 'Return To Shop', 'woocommerce' ) ?></a>
                                                                    
                            </div>
                        </div>
                    	
                </div>
            </div>
        </div>	
    </section>                
    <!-- End Reset password -->

    


<?php do_action('woocommerce_cart_is_empty'); ?>

