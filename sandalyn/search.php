<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package sandalyn
 */

get_header();
?>
	<div id="primary" class="site-main">
        <section class="section mtn-30">
            <main class="container">
                <!-- Main Page Wrapper -->
                <div class="columns">
                    <div class="column">
                        <!-- Main Nav -->
                        <?php include get_theme_file_path( 'inc/nav-main.php' ); ?>
                        <!-- Main Content -->
                        <div class="columns">
                            <div class="column">
                                <?php if ( have_posts() ) : ?>
                                <header class="pb-20">
                                    <h1 class="title is-2 has-text-weight-semibold">
                                        <?php
                                        /* translators: %s: search query. */
                                        printf( esc_html__( 'Search Results for: %s', 'sandalyn' ), '<span>' . get_search_query() . '</span>' );
                                        ?>
                                    </h1>
                                </header><!-- .page-header -->
                                <div class="columns">
                                    <?php
                                    /* Start the Loop */
                                        while ( have_posts() ) :
                                            the_post();
                                            /**
                                             * Run the loop for the search to output the results.
                                             * If you want to overload this in a child theme then include a file
                                             * called content-search.php and that will be used instead.
                                             */
                                            get_template_part( 'template-parts/content-list', 'search' );
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
                </div>
            </main>
        </section>
	</div><!-- #main -->
<?php
get_footer();
