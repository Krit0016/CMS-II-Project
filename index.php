<?php get_header(); ?>

<div class="container">
    <!-- WP Loop: require code that gets the page content -->
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- gets the title of the page -->
        <h3><?php the_title(); ?></h3>
        <!-- gets the content of the page -->
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
        <?php edit_post_link(); ?>
    <!-- endwhile of the WP loop -->
    <?php endwhile; ?>
    <?php
    if ( get_next_posts_link() ) {
    next_posts_link();
    }
    ?>
    <?php
    if ( get_previous_posts_link() ) {
    previous_posts_link();
    }
    ?>

<?php else: ?>

<p>No posts found. :(</p>
    <!-- endif of the WP loop -->
    <?php endif; ?>
</div>

<?php get_footer(); ?>
