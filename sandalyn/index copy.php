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

<div id="primary" class="site-main">
    <section class="section">
        <main class="container">
            <!-- Main Page Wrapper -->
            <div class="columns">
                <div class="column">
                    <!-- Page Nav -->
                    <?php include get_theme_file_path( 'inc/nav-blog.php' ); ?>
                    <!-- Main Content -->
                    <div class="columns">
                        <div class="column">
                            <?php
                                if ( have_posts() ) :

                                    if ( is_home() && ! is_front_page() ) :
                                        ?>
                                        <header>
                                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                        </header>
                                        <?php
                                    endif;

                                    /* Start the Loop */
                                    while ( have_posts() ) :
                                        the_post();

                                        /*
                                        * Include the Post-Type-specific template for the content.
                                        * If you want to override this in a child theme, then include a file
                                        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                        */
                                        get_template_part( 'template-parts/content-list', get_post_type() );

                                    endwhile;

                                    the_posts_navigation();

                                else :

                                    get_template_part( 'template-parts/content', 'none' );

                                endif;
                            ?>
                        </div>
                    </div>
                            </div>
            </div>
            <!-- /Main Page Wrapper -->
        </main>
    </section>
</div>

<?php
get_footer();
