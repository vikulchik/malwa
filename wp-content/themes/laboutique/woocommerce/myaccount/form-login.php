<?php
    /**
     * Login Form
     *
     * @author 		WooThemes
     * @package 	WooCommerce/Templates
     * @version     2.1.0
     */
    if (!defined('ABSPATH'))
        exit; // Exit if accessed directly

    global $woocommerce;
?>



<?php do_action('woocommerce_before_customer_login_form');?>


<!-- Login / Register -->
<section class="login_register">


    <div class="container">
        <?php wc_print_notices();?>

        <div class="row">            
            <div class="span6<?php if (get_option('woocommerce_enable_myaccount_registration')!='yes') :?> offset3<?php endif;?>">

                <div class="box">
                    <form method="post" class="login">

                        <div class="hgroup title">
                            <a href="#" class="products_description my-account">
                                <span>Увійти до системи</span></a>
                            <h3 class="form-description" style=" color:#781b34; font-size:24px;text-transform:uppercase; border-bottom:1px solid #ffbacc;font-weight: bold; padding-bottom: 22px;">увійти до особового кабінету</h3>
                        </div>

                        <div class="box-content">
                            <div class="row-fluid">
                                <div class="span6">
                                    <div class="control-group">
                                        <label class="control-label" for="login_email"><?php _e('Email','woocommerce');?></label>
                                        <div class="controls">
                                            <input type="text" class="input-text span12" name="username" id="username" />
                                        </div>
                                    </div>
                                </div>

                                <div class="span6">	
                                    <div class="control-group">					
                                        <label class="control-label" for="login_password"><?php _e('Пароль','woocommerce');?></label>
                                        <div class="controls">
                                            <input class="input-text span12" type="password" name="password" id="password" />
                                        </div>
                                    </div>
                                </div>
                            </div>	
                        </div>

                        <div class="buttons">
                            <div class="pull-left">
                                <?php wp_nonce_field('woocommerce-login');?>
                                <button type="submit" class="btn btn-primary btn-small" name="login" value="<?php _e('Login','woocommerce');?>">
                                    <?php _e('Увійти','woocommerce');?>
                                </button>


                                <a href="<?php echo esc_url(wc_lostpassword_url());?>"  class="btn btn-small"><?php _e('Забули пароль?','woocommerce');?></a>
                            </div>
                        </div>		           
                    </form>		
                </div>




            </div>

            <div class="span6">  
                <?php if (get_option('woocommerce_enable_myaccount_registration')=='yes') :?>


                        <div class="box">
                            <form method="post" class="register">

                                <div class="hgroup title">
                                    <h3><?php _e('Register','woocommerce');?></h3>
                                    <h5><?php _e('Registration allows you to avoid filling in billing and shipping forms every time you checkout on this website. You\'ll also be able to track your orders with ease!',DOMAIN);?></h5>
                                </div>

                                <div class="box-content">


                                    <?php do_action('woocommerce_register_form_start');?>

                                    <?php if ('no'===get_option('woocommerce_registration_generate_username')) :?>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="control-group">
                                                    <label for="reg_username"><?php _e('Username','woocommerce');?> <span class="required">*</span></label>
                                                    <input type="text" class="input-text span12" name="username" id="reg_username" value="<?php if (!empty($_POST['username'])) echo esc_attr($_POST['username']);?>" />
                                                </div>
                                            </div> 
                                        </div> 

                                    <?php endif;?>

                                    <?php if ('no'===get_option('woocommerce_registration_generate_password')){?>
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label for="reg_email"><?php _e('Email address','woocommerce');?> <span class="required">*</span></label>
                                                    <input type="email" class="input-text span12" name="email" id="reg_email" value="<?php if (!empty($_POST['email'])) echo esc_attr($_POST['email']);?>" />
                                                </div>
                                            </div> 
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label for="reg_password"><?php _e('Password','woocommerce');?> <span class="required">*</span></label>
                                                    <input type="password" class="input-text span12" name="password" id="reg_password" value="<?php if (!empty($_POST['password'])) echo esc_attr($_POST['password']);?>" />
                                                </div>
                                            </div> 
                                        </div> 
                                    <?php } else {?>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="control-group">
                                                    <label for="reg_email"><?php _e('Email address','woocommerce');?> <span class="required">*</span></label>
                                                    <input type="email" class="input-text span12" name="email" id="reg_email" value="<?php if (!empty($_POST['email'])) echo esc_attr($_POST['email']);?>" />
                                                </div>
                                            </div> 
                                        </div> 
                                    <?php }?>

                                    <!-- Spam Trap -->
                                    <div style="left:-999em; position:absolute;"><label for="trap"><?php _e('Anti-spam','woocommerce');?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>



                                    <?php do_action('register_form');?>
                                    <?php do_action('woocommerce_register_form');?>


                                </div>
                                <div class="buttons">


                                    <?php wp_nonce_field('woocommerce-register','register');?>

                                    <button type="submit" class="btn btn-primary btn-small" name="login" value="<?php _e('Register','woocommerce');?>">
                                        <?php _e('Register','woocommerce');?>
                                    </button>

                                    

                                </div>	
                            </form>		
                        </div>



                    <?php endif;?>
            </div>	
        </div>
    </div>


</section>                
<!-- End Login / Register -->


<?php do_action('woocommerce_after_customer_login_form');?>