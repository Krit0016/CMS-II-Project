<!DOCTYPE html>
<html>
<head>
    <!-- charset is a computer alphabet: utf-8 -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- function that generates the title for the page -->
    <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
    <!-- URL of the style.css generate by WP -->
    <!-- <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" /> -->
    <!-- require function before the closing of the head tag -->
    <?php wp_head(); ?>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><?php bloginfo('name'); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <?php wp_nav_menu(['theme_location' => 'header-menu', 'container' => 'ul', 'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0']); ?>
                <div class="navbar-text">
                    <?php bloginfo('description'); ?>
                </div>
            </div>
        </div>
        </nav>

    </header>

</body>
</html>

