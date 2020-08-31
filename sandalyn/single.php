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
                    <div class="column is-8 is-offset-2">
                        <?php
                            while ( have_posts() ) :
                                the_post();
                                get_template_part( 'template-parts/content', get_post_type() );
                                ?>
                                    <!-- Next / Prev post -->
                                    <nav class="level">
                                        <!-- Left side -->
                                        <div class="level-left">
                                            <div class="level-item">
                                                <a href="<?php echo get_permalink($prev_id); ?>" class="has-text-weight-medium"><i class="fas fa-chevron-left"></i> Previous post</a>
                                            </div>
                                        </div>
                                        <!-- Right side -->
                                        <div class="level-right">
                                            <div class="level-item">
                                                <div class="buttons">
                                                    <a href="<?php echo get_permalink($next_id); ?>" class="has-text-weight-medium">Next post <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                <?php
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
</section>
<?php
get_footer();
