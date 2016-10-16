<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage La_Boutique
 * @since La Boutique 1.1
 */
if (DEBUG_INFO) {
	echo "\n<!-- FILE: /footer.php ================================================================= -->\n";
}
?>

    </section>

    <?php if (theme_option('twitter_publish')){?>
    <!-- Twitter bar -->
    <div class="twitter-bar">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <?php the_widget('wysija'); ?>
                    <!--START Scripts : this is the script part you can add to the header of your theme-->
                    <script type="text/javascript" src="http://malwa.rubets.pro/wp-includes/js/jquery/jquery.js?ver=2.7.5"></script>
                    <script type="text/javascript" src="http://malwa.rubets.pro/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-ru.js?ver=2.7.5"></script>
                    <script type="text/javascript" src="http://malwa.rubets.pro/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.7.5"></script>
                    <script type="text/javascript" src="http://malwa.rubets.pro/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.5"></script>
                    <script type="text/javascript">
                        /* <![CDATA[ */
                        var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http://malwa.rubets.pro/wp-admin/admin-ajax.php","loadingTrans":"Загрузка..."};
                        /* ]]> */
                    </script><script type="text/javascript" src="http://malwa.rubets.pro/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.5"></script>
                    <!--END Scripts-->

                    <div class="widget_wysija_cont html_wysija"><div id="msg-form-wysija-html58026855d3774-1" class="wysija-msg ajax"></div>
                        <form id="form-wysija-html58026855d3774-1" method="post" action="#wysija" class="widget_wysija html_wysija">
                            <span class="footer-span">Підписатися на розсилку</span>
                            <p class="wysija-paragraph">
                                <input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Введіть ваш e-mail.." placeholder="Введіть ваш e-mail.." value="" />
                                <input class="wysija-submit wysija-submit-field" type="submit" value="" />
                    <span class="abs-req">
                        <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
                    </span>
                            </p>
                            <input type="hidden" name="form_id" value="1" />
                            <input type="hidden" name="action" value="save" />
                            <input type="hidden" name="controller" value="subscribers" />
                            <input type="hidden" value="1" name="wysija-page" />
                            <input type="hidden" name="wysija[user_list][list_ids]" value="1" />
                        </form></div>
                        <!-- <div class="share42init"></div>
                                                 <script type="text/javascript" src="http://malwa.com.ua/share42/share42.js"></script> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End class="twitter-bar" -->
    <?php } ?>


    <?php if (theme_option('footer_publish')){?>
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <h5 class="footer-description">Контакти</h5>
                    <div class="malwa">
                        <h6 class="footer-name">Мальва – Південний</h6>
                        <p class="footer-adress">Львів, ТВК “Південний”, ТЦ “Україна” №215</p>
                        <a href="tell:(096)9130700" class="footer-tell">тел.: (096) 913-07-00,</a>
                        <a href="tell:(063)0237877" class="footer-tell">(063) 023-78-77</a>
                    </div>
                    <div class="malwa">
                        <h6 class="footer-name">Мальва – центр</h6>
                        <p class="footer-adress">Львів, пр. Свободи, 43 (вхід в браму)</p>
                        <a href="tell:(097)7021483" class="footer-tell">тел.: (097) 702-14-83,</a>
                        <a href="tell:(063)0192969" class="footer-tell">(063) 019-29-69</a>
                    </div>
                </div>
                <div class="span4">
                    <h5 class="footer-description">Меню</h5>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'container'=>false,
                        'depth'=>'1',
                        'echo'=>'1'));
                    ?>
                </div>
                <div class="span4">
                    <h5 class="footer-description description">Меню</h5>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'footer-menu-second',
                        'container'=>false,
                        'depth'=>'1',
                        'echo'=>'1'));
                    ?>
                </div>
                <div class="span4">
                    <h5 class="footer-description">Приєднуйтесь</h5>
                    <ul class="social">
                        <li class="social-item fb"><a href="https://www.facebook.com/malwalviv/"></a></li>
                        <li class="social-item vk"><a href="http://vk.com/malwalviv"></a></li>
                        <li class="social-item ins"><a href="https://www.instagram.com/malva_lviv/"></a></li>
                    </ul>
                    <span class="payment">Приймаємо оплату</span>
                    <ul class="payment-list">
                        <li class="payment-item">
                            <img src="/wp-content/themes/laboutique/images/visa.png" width="71" height="42" alt="">
                        </li>
                        <li class="payment-item">
                            <img src="/wp-content/themes/laboutique/images/mastercard.png" width="70" height="42" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End id="footer" -->
    <?php } ?>


    <?php if (theme_option('footer_copy_publish')){?>
    <!-- Credits bar -->
    <div class="credits">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <p><?php echo theme_option('footer_copy_left'); ?></p>
                </div>
                <div class="span4 text-right hidden-phone">
                    <p><?php echo theme_option('footer_copy_right'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End class="credits" -->
    <?php } ?>

    <!-- Options panel -->
    <!-- end class="wrapper"-->
    </div>
    <?php if (theme_option('advanced_script')){?>
        <?php echo theme_option('advanced_script')?>
    <?php } ?>
    <? if (constant('THEME_COLORS')){?>
    <!-- Options panel -->
    <div class="options-panel">
        <div class="options-panel-content">

            <div class="row-fluid">
                <div class="span12">

                    <h5><?=__("Color scheme")?></h5>
                    <ul class="controls">


                            <li class="turquoise"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/turquoise.css">Turquoise</a>
                            <li class="greensea"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/greensea.css">Green sea</a>
                            <li class="emerland"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/emerland.css">Emerland</a>
                            <li class="nephritis"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/nephritis.css">Nephritis</a>
                            <li class="peterriver"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/peterriver.css">Peter river</a>
                            <li class="belizehole"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/belizehole.css">Belizehole</a>
                            <li class="amethyst"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/amethyst.css">Amethyst</a>
                            <li class="wisteria"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/wisteria.css">Wisteria</a>
                            <li class="wetasphalt"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/wetasphalt.css">Wet asphalt</a>
                            <li class="midnightblue"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/midnightblue.css">Midnight blue</a>
                            <li class="sunflower"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/sunflower.css">Sunflower</a>
                            <li class="orange"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/orange.css">Orange</a>
                            <li class="carrot"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/carrot.css">Carrot</a>
                            <li class="pumpkin"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/pumpkin.css">Pumpkin</a>
                            <li class="alizarin"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/alizarin.css">Alizarin</a>
                            <li class="pomegranate"><a href="#<?=get_template_directory_uri()?>/css/color-schemes/pomegranate.css">Pomegranate</a>
                    </ul>


                    <h5><?=__("Background")?></h5>
                    <ul class="controls-background">
                        <li class="default"><a href="#f0f0f0"></a></li>
                        <li class="dark10"><a href="#e5e5e5"></a></li>
                        <li class="dark20"><a href="#cccccc"></a></li>
                        <li class="dark30"><a href="#b2b2b2"></a></li>
                        <li class="dark40"><a href="#999999"></a></li>
                        <li class="dark50"><a href="#7f7f7f"></a></li>
                        <li class="dark60"><a href="#666666"></a></li>
                        <li class="dark70"><a href="#4c4c4c"></a></li>

                    </ul>

                    <p><?=__("Custom colors are supported through theme options.")?></p>
                </div>
            </div>

        </div>

        <div class="options-panel-toggle">
            <a href="#" title=""><span></span></a>
        </div>
    </div>
    <!-- End class="options-panel" -->
    <? } ?>
    <?php wp_footer(); ?>
</body>
</html>