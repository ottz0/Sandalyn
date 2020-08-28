<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sandalyn
 */

?>
<section class="columns is-mobile is-centered pt-100">
    <div class="column has-text-centered">
        <header>
            <h1 class="title is-2 has-text-weight-semibold"><?php esc_html_e( 'Nothing Found', 'sandalyn' ); ?></h1>
        </header><!-- .page-header -->
        <div class="pt-10">
            <?php
                if ( is_home() && current_user_can( 'publish_posts' ) ) :
                    printf(
                        '<p class="subtitle is-5">' . wp_kses(
                            /* translators: 1: link to WP admin new post page. */
                            __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'sandalyn' ),
                            array(
                                'a' => array(
                                    'href' => array(),
                                ),
                            )
                        ) . '</p>',
                        esc_url( admin_url( 'post-new.php' ) )
                    );

                elseif ( is_search() ) :
                    ?>
                    <p class="subtitle is-5"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sandalyn' ); ?></p>
                        <div class="columns is-centered">
                            <div class="column is-half">
                                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
                                    <div class="field has-addons has-addons-centered">
                                        <p class="control">
                                        <label>
                                            <span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
                                            <input type="search" class="input" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s"/>
                                        </label>
                                        </p>
                                        <p class="control">
                                            <button type="submit" class="button is-black">Search</button>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php
                else :
                    ?>
                        <p class="subtitle is-5"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sandalyn' ); ?></p>
                        <div class="columns is-centered">
                            <div class="column is-half">
                                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
                                    <div class="field has-addons has-addons-centered">
                                        <p class="control">
                                        <label>
                                            <span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
                                            <input type="search" class="input is-large" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s"/>
                                        </label>
                                        </p>
                                        <p class="control">
                                            <button type="submit" class="button is-black">Search</button>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php
                endif;
            ?>
        </div>
    </div>
</section>