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
                    <?php the_excerpt(); ?>
                    <a class="btn btn-info" href="<?php the_permalink(); ?>">Read more</a>
                </article>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <?php echo wpautop('Sorry, No post were found'); ?>
    <?php endif; ?>

    <div class="sidebar">
        <h1>TEST</h1>
    </div>
</div>

<?php get_footer(); ?>