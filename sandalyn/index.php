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
                <div class="columns is-multiline">
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
        <!-- /Main Page Wrapper -->
        <?php echo paginate_links(); ?>
        <?php the_posts_navigation(); ?>
    </main>
</section>
<?php
get_footer();
