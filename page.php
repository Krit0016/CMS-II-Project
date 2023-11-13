<?php get_header(); ?>

<div class="container">
    <!-- WP Loop: require code that gets the page content -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>">
            <!-- Page Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <!-- gets the title of the page -->
            <h3><?php the_title(); ?></h3>
            <!-- gets the content of the page -->
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
    <!-- endif of the WP loop -->
    <?php endif; ?>
</div>


<?php get_footer(); ?>
