<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sandalyn
 */

get_header();
?>
    <main class="container">
        <!-- Main Page Wrapper -->
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <!-- Page Nav -->
                <?php include get_theme_file_path( 'blog-nav.php' ); ?>
                <!-- Main Content -->
                <div class="columns">
                    <div class="column">
                        <?php
                            while ( have_posts() ) :
                                the_post();

                                get_template_part( 'template-parts/content', get_post_type() );

                                the_post_navigation(
                                    array(
                                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'sandalyn' ) . '</span> <span class="nav-title">%title</span>',
                                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'sandalyn' ) . '</span> <span class="nav-title">%title</span>',
                                    )
                                );

                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;

                            endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
        </div>
        <!-- /Main Page Wrapper -->
    </main>
<?php
get_footer();
