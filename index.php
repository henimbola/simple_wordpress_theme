<?php get_header() ?>

<div class="container">

    <div class="row">

        <div class="main col-md-9">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

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
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, No post were found'); ?>
            <?php endif; ?>

        </div>

        <div class="sidebar col-md-3">

            <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div>

    </div>

</div>
<?php get_footer(); ?>