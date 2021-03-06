<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div>
            <?php get_template_part( 'template-parts/header/header', 'image' ); ?>

            </header>

            <div id="main" class="site-main">                

<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/bootstrap.min.js'; ?>"></script>

<script type="text/javascript">
/*    var num=603;
    $(window).bind('scroll', function() {           
    //alert("function called");
    if ($(window).scrollTop() >num) {
        $('.nav-menu').addClass('fixed');
    } else {
        $('.nav-menu').removeClass('fixed');
    }
});
*/
</script>