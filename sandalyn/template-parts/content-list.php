<!-- Article -->
<article class="column is-4 sand-c-link-card">
    <a href="<?php the_permalink(); ?>">
        <div class="sand-c-link-card__inner card-equal-height">
            <div class="sand-c-link-card__img">
                <figure class="image is-4by3">
                    <?php the_post_thumbnail('single-post-thumbnail'); ?>
                </figure>
            </div>
            <div class="sand-c-link-card__content">
                <p class="sand-c-link-card__content--cat pb-2">
                    <?php
                        foreach((get_the_category()) as $category) {
                            echo $category->cat_name . ' ';
                        }
                    ?>
                </p>
                <h1 class="pb-3"><?php the_title() ?></h1>
                <div>
                    <p><?php the_excerpt() ?></p>
                </div>
            </div>
            <div class="sand-c-link-card__footer card-equal-height-footer">
                <p class="is-size-7"><?php echo get_the_date('F j, Y') ?></p>
            </div>
        </div>
    </a>
</article>
<!-- Article -->