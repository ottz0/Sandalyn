<?php
/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://m.tri.be/1aiy
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap;

get_header(); ?>


<section class="section mtn-30">
    <main class="container">
        <!-- Main Page Wrapper -->
        <div class="columns">
            <div class="column">
                <!-- Page Nav -->
                <?php include get_theme_file_path( 'inc/nav-main.php' ); ?>
                <!-- Main Content -->
                <div class="columns">
                    <div class="column">
                        <?php echo tribe( Template_Bootstrap::class )->get_view_html(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Page Wrapper -->
    </main>
</section>






<?php get_footer(); ?>
