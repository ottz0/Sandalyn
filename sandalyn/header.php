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

<div class="sau-c-hero sau-c-hero__page">
    <div class="container">
        <!-- Main Page Wrapper -->
        <div class="columns pt-30">
            <div class="column">
                <!-- Mobile Nav -->
                <nav class="is-hidden-desktop">
                    <div class="columns is-centered">
                        <div class="column has-text-centered">
                            <a href="#!" data-qualified-action="open" class="mx-3"><span class="icon is-small mr-2"><i class="fas fa-headset"></i></span>Live Chat</a>
                            <a href="tel:1300788862" class="mx-3"><span class="icon is-small mr-2"><i class="fas fa-phone"></i></span>1300 788 862</a>
                        </div>
                    </div>
                    <div class="columns has-margin-top-minus-40">
                        <div class="column has-text-centered">
                            <a href="https://www.serversaustralia.com.au/resources/blog">
                                <img src="https://go.serversaustralia.com.au/l/797243/2020-08-13/21s3m/797243/37436/sau_brandmark_horizontal_blue.svg" width="280">
                            </a>
                        </div>
                    </div>
                </nav>
                <!-- Desktop Nav -->
                <nav class="navbar is-hidden-touch" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sandalyn-logo.gif" alt="Sandalyn logo">
                        </a>
                    </div>
                    <div class="navbar-end">
                        <div class="navbar-item mrn-10">
                            <div class="buttons">
                                <a href="tel:1300788862" class="button is-black is-default">
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
