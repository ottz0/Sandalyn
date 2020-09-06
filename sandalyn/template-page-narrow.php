<?php
/**
 * 
 * Template Name:PageNarrow
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
                    <?php include get_theme_file_path( 'inc/nav-main.php' ); ?>
                    <!-- Main Content -->
                    <div class="columns">
                        <div class="column is-8 is-offset-2">
                            <div class="content">
                                <?php
                                while ( have_posts() ) :
                                    the_post();
                                    get_template_part( 'template-parts/content', 'page' );
                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;
                                endwhile; // End of the loop.
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Main Page Wrapper -->
        </main>
    </section>
<?php
get_footer();
