<?php get_header(); ?>

<!-- Hero Banner get image from images directory with function echo get_theme_file_uri() 
the class was updated for class "hero-section-->
<div class="hero-section" style="background-image: url('<?php echo get_theme_file_uri('images/john-lee-unsplash-1536_x_1000.jpeg'); ?>'); background-size: cover; background-position: center; height: 500px; ">
<div class="px-4 py-5 my-5 text-center text-white">
<h1 class="display-5 fw-bold">Discover the Majesty of Banff</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Immerse yourself in the breathtaking landscapes and unparalleled beauty of Banff, a jewel nestled in the heart of the Canadian Rockies.</p>
    </div>
</div>
</div>
<!-- Hero Banner finish here -->

<div class="container my-4">

    <!-- WP Loop: Require code that gets the page content -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if (is_home() && !is_front_page()) : ?>
            <!-- For inner pages (all but home), display the title and content -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
                <div class="col-md-6">
                    <!-- Display the featured image -->
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
    <!-- End if of the WP loop -->
    <?php endif; ?>


   <!-- CARDS SECTION FOR HOMEPAGE STARTS HERE -->
    <div class="container px-4 py-5" id="custom-cards">
<h2 class="pb-2 border-bottom">Activities Showcase</h2>

<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
  <div class="col">
  <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?php echo get_theme_file_uri('images/redd-f-unsplash-640_x_640.jpeg'); ?>'); background-position: center;">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">        
        <h1 class="custom-heading" class="pt-5 mt-5 mb-4 lh-1 fw-bold">Hiking trails unveil stunning vistas of towering mountains, crystal-clear lakes, and lush forests.</h1>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="d-flex align-items-center me-3">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512" style="margin-right: 5px;">
            <style>svg{fill:#ffffff}</style>
            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> 
            <small>12 Experiences</small>
          </li>
          <li class="d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" style="margin-right: 5px;">
            <style>svg{fill:#ffffff}</style>
            <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>   
            <small>3d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?php echo get_theme_file_uri('images/quenten-janssen-unsplash-640_x_640.jpeg'); ?>'); background-position: center;">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
        <h1 class="custom-heading" class="pt-5 mt-5 mb-4 lh-1 fw-bold">Experience the thrill of carving through powder-covered slopes in Banff's world-renowned ski resorts</h1>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="d-flex align-items-center me-3">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512" style="margin-right: 5px; fill: #333;">
            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>       
            <small style="color: #333;">15 Experiences</small>
          </li>
          <li class="d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" style="margin-right: 5px; fill: #333;">
            <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>       
            <small style="color: #333;">4d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
  <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?php echo get_theme_file_uri('images/geoff-brooks-unsplash-640_x_640.jpeg'); ?>'); background-position: center;">
      <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
        <h1 class="custom-heading" class="pt-5 mt-5 mb-4 lh-1 fw-bold">Immerse yourself in Banff's rich biodiversity with guided wildlife tours.</h1>
        <ul class="d-flex list-unstyled mt-auto">
          <li class="d-flex align-items-center me-3">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512" style="margin-right: 5px;">
            <style>svg{fill:#ffffff}</style>
            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
            <small>10 Experiences</small>
          </li>
          <li class="d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" style="margin-right: 5px;">
           <style>svg{fill:#ffffff}</style>
            <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>          
            <small>5d</small>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<!-- CARDS SECTION FOR HOMEPAGE ENDS HERE -->

</div>


<?php get_footer(); ?>


    
