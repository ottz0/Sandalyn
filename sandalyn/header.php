<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sau
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/0d98143560.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<div class="sand-c-hero sand-c-hero__page">
    <div class="container">
        <!-- Main Page Wrapper -->
        <div class="columns pt-30">
            <div class="column">
                <!-- Mobile Nav -->
                <nav class="level">
                    <!-- Left side -->
                    <div class="level-left">
                        <div class="level-item">
                            <a href="/">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sandalyn-logo.gif" alt="Sandalyn logo">
                            </a>
                        </div>
                    </div>
                    <!-- Right side -->
                    <div class="level-right">
                        <div class="level-item">
                            <div class="buttons">
                                <a href="https://apac.littlehotelier.com/properties/sandalynestatedirect" target="_blank" class="button is-black is-default">
                                <span class="icon is-small mr-2">
                                <i class="fas fa-calendar"></i>
                                </span>
                                RESERVATION</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- /Main Page Wrapper -->
    </div>
