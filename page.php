<?php get_header() ?>

<div class="main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="container">

                <article class="post">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>

                    <?php the_content(); ?>
                    <br>
                    <div class="meta">
                        Created By <?php the_author(); ?> on <?php the_date(); ?>
                    </div>
                </article>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <?php echo wpautop('Sorry, No post were found'); ?>
    <?php endif; ?>
</div>

<?php get_footer() ?>