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
                <!-- Main Nav -->
                <?php include get_theme_file_path( 'inc/nav-main.php' ); ?>
                <!-- Hero Carousel -->
                <div class="columns pb-70">
                    <div class="column">
                        <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
                    </div>
                </div>      
                <!-- Main Content -->
                <div class="columns is-vcentered">
                    <div class="column is-6">
                        <div class="content">
                                <h1 class="title is-3">Hunter Valley Accommodation, Weddings and Events</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mattis nunc sed blandit libero volutpat. Arcu bibendum at varius vel pharetra vel turpis nunc. Neque viverra justo nec ultrices dui sapien eget mi. Sem et tortor consequat id porta nibh venenatis cras sed. Pharetra massa massa ultricies mi quis hendrerit dolor magna.</p>
                        </div>
                    </div>
                    <div class="column">
                        <img src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="" />
                    </div>
                </div>
                <div class="columns pt-30">
                    <div class="column">   
                        <h2 class="title is-3 has-text-centered">Latest Articles</h2>                
                        <!-- Articles -->
                        <div class="container has-margin-top-minus-70">
                            <div class="columns is-multiline">
                            <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 4
                                );
                                $the_query = new WP_Query( $args );
                                // The Loop
                                if ( $the_query->have_posts() ) {
                                    while ( $the_query->have_posts() ) {
                                        $the_query->the_post(); 
                                        ?>
                                            <!-- Article -->
                                            <article class="column is-3 sand-c-link-card">
                                                <a href="<?php the_permalink(); ?>">
                                                    <div class="sand-c-link-card__inner card-equal-height">
                                                        <div class="sand-c-link-card__img">
                                                            <figure class="image is-4by3">
                                                                <?php the_post_thumbnail('single-post-thumbnail'); ?>
                                                            </figure>
                                                        </div>
                                                        <div class="sand-c-link-card__content">
                                                        <p class="is-size-7"><?php echo get_the_date('F j, Y') ?></p>
                                                            <h1 class="pb-3"><?php the_title() ?></h1>
                                                        </div>
                                                    </div>
                                                </a>
                                            </article>
                                            <!-- Article -->
                                    <?php }   
                                }
                                /* Restore original Post Data */
                                wp_reset_postdata();
                            ?>
                            </div>
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
