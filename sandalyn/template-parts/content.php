<header id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if ( 'post' === get_post_type() ) :
        ?>
        <!-- Post Info -->
        <p class="has-text-weight-normal">Published <?php sandalyn_posted_by(); ?></p>
        <!-- /Post Info -->     
    <?php endif; ?>
    <!-- Header -->
    <div class="pt-10 pb-20"><?php the_title( '<h1 class="title is-2 has-text-weight-semibold">', '</h1>' ); ?></div>
    <!-- Article Nav -->
    <nav class="level sand-c-content-breaker sm mb-30 is-hidden-mobile">
        <!-- Left side -->
        <div class="level-left">
            <div class="level-item">
                <p><i class="fas fa-calendar pr-1"></i> <?php echo get_the_date('F j, Y') ?></p>
            </div>
            <?php
            if ( is_user_logged_in() ) { ?>
                <div class="level-item">
                    <p><i class="fas fa-comment-alt pr-1"></i> <a href="#comment">Leave a comment</a></p>
                </div>
            <?php } else { ?>
                <p><i class="fas fa-comment-alt pr-1"></i> <a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>">Leave a comment</a></p>
            <?php }
            ?>
            <div class="level-item">
                <?php edit_post_link('Edit', '<p><i class="fas fa-pencil pr-1"></i>', '</p>'); ?>
            </div>
        </div>
        <!-- Right side -->
        <div class="level-right">
            <p class="level-item"><a href="https://www.facebook.com/Sandalyn-Estate-Hunter-Valley-501186410731241" target="_blank"><i class="fab fa-facebook-square fa-2x sand-u-font__color--black"></i></a></p>
        </div>
    </nav>
</header><!-- .entry-header -->
<?php sandalyn_post_thumbnail(); ?>
<div class="content pt-30">
    <?php
    the_content(
        sprintf(
            wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sandalyn' ),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            wp_kses_post( get_the_title() )
        )
    );

    wp_link_pages(
        array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sandalyn' ),
            'after'  => '</div>',
        )
    );
    ?>
</div><!-- .entry-content -->
<?php
    if ( 'post' === get_post_type() ) :
    ?>
    <!-- Post Info -->

    <!-- Article Nav -->
    <nav class="level sand-c-content-breaker sm mb-10">
        <!-- Left side -->
        <div class="level-left">
            <div class="level-item">
                <p><i class="fas fa-calendar pr-1"></i> <?php echo get_the_date('F j, Y') ?></p>
            </div>
            <?php
            if ( is_user_logged_in() ) { ?>
                <div class="level-item">
                    <p><i class="fas fa-comment-alt pr-1"></i> <a href="#comment">Leave a comment</a></p>
                </div>
            <?php } else { ?>
                <p><i class="fas fa-comment-alt pr-1"></i> <a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>">Leave a comment</a></p>
            <?php }
            ?>
            <div class="level-item">
                <?php edit_post_link('Edit', '<p><i class="fas fa-pencil pr-1"></i>', '</p>'); ?>
            </div>
        </div>
        <!-- Right side -->
        <div class="level-right">
            <p class="level-item"><a href="https://www.facebook.com/Sandalyn-Estate-Hunter-Valley-501186410731241" target="_blank"><i class="fab fa-facebook-square fa-2x sand-u-font__color--black"></i></a></p>
        </div>
    </nav>
    <!-- /Post Info -->     
<?php endif; ?>