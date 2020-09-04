<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sau
 */

?>
    </div><!-- / hero -->
    <!-- Footer -->
    <footer class="sand-c-footer">
        <div class="columns is-multiline">
            <div class="column is-12 sand-c-footer__section1">
                <div class="columns is-multiline is-centered">
                    <div class="column is-12 has-image-centered mbn-20">
                        <figure>
                            <a href="/">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sandalyn-logo.gif" alt="Sandalyn logo">
                            </a>
                        </figure>
                    </div>
                    <div class="column is-12 has-text-centered">
                        <nav class="sand-c-nav pt-30">
                            <?php
                                wp_nav_menu(array(
                                    'theme_loction' => 'mainSiteMenu'
                                ));
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="column is-12 sand-c-footer__section2">
                <div class="columns is-multiline is-centered">
                    <div class="column is-12 has-text-centered">
                        <h4>Subscribe to our Newsletter</h4>
                    </div>
                </div>
            </div>
            <div class="column is-12 sand-c-footer__section3">
                <div class="columns">
                    <div class="column has-text-centered">
                        <p>&copy; <?php echo date("Y"); ?> Sandalyn Estate Accommodation, Weddings &amp; Events, Hunter Valley, NSW Australia. | <a href="#" target="_blank">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
