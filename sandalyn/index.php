<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sandalyn
 */

get_header();
?>

<section class="section mtn-30">
    <main class="container">
        <!-- Main Page Wrapper -->
        <div class="columns">
            <div class="column">
                <!-- Page Nav -->
                <?php include get_theme_file_path( 'blog-nav.php' ); ?>
                <!-- Main Content -->
                <div class="columns">
                    <div class="column">
                        this is the main content just here
                    </div>
                </div>
        </div>
        <!-- /Main Page Wrapper -->
    </main>
</section>


<?php
get_footer();
