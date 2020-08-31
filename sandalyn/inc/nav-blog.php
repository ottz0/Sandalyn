<?php
/**
 * The template for displaying Blog nav
 *
 *
 * @package sau
 */

get_header();

$categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 0
) );
?>
<!-- Page Nav -->
<div class="columns">
    <div class="column">
        <div class="columns pt-10 pb-10">
            <div class="column">
                <!-- Main container -->
                <nav class="level">
                    <!-- Left side -->
                    <div class="level-left">
                        <div class="level-item">
                            <!-- Dropdown -->
                            <div class="dropdown">
                                <div class="dropdown-trigger">
                                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                                        <span>Categories</span>
                                        <span class="icon is-small">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <?php
                                            $categories = get_categories();
                                            foreach ($categories as $cat) {
                                            $category_link = get_category_link($cat->cat_ID);
                                            echo '<a href="'.esc_url( $category_link ).'" class="dropdown-item">'.$cat->name.'</a>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right side -->
                    <div class="level-right">
                        <div class="level-item">
                            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
                                <div class="field has-addons">
                                    <p class="control">
                                    <label>
                                        <span class="screen-reader-text"><?php _x( 'Search for:', 'label' )?></span>
                                        <input type="search" class="input" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
                                    </label>
                                    </p>
                                        <p class="control">
                                    <button type="submit" class="button"><i class="far fa-search"></i></button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>