<?php get_header() ?>

<div class="main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="container">
                <article class="post">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="meta">
                        Created By <?php the_author(); ?> on <?php the_date(); ?>
                    </div>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                    <br>
                </article>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <?php echo wpautop('Sorry, No post were found'); ?>
    <?php endif; ?>

    <div class="container">
        <?php comments_template(); ?>
    </div>
</div>

<?php get_footer(); ?>