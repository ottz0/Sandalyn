<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sandalyn
 */

get_header();
?>

<section class="section">
    <main class="container">
        <!-- Main Page Wrapper -->
        <div class="columns">
            <div class="column">
                <!-- Main Nav -->
                <?php include get_theme_file_path( 'inc/nav-main.php' ); ?>
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
                                        <h1 class="page-title screen-reader-text title is-3 has-text-weight-medium"><?php single_post_title(); ?></h1>
                                    </header>
                                    <?php
                                endif; ?>
                                <div class="container pt-10">
                                    <div class="columns is-multiline">
                                        <?php
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
                                            else :
                                                get_template_part( 'template-parts/content', 'none' );
                                endif;
                            ?>

                                    </div>
                                </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- /Main Page Wrapper -->
        <div class="columns">
            <div class="column is-half is-offset-one-quarter has-text-centered">
                <?php echo paginate_links(); ?>
                <div class="pt-10">
                    <?php the_posts_navigation(); ?>
                </div>
            </div>
        </div>
    </main>
</section>
<?php
get_footer();
