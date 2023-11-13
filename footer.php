<footer class="container py-5 my-5 border-top">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col mb-3">
      <p class="text-body-secondary">&copy; <?php echo date('Y'); ?></p>
    </div>

    <div class="col mb-3">
      <h5>Explore</h5>
      <ul class="nav flex-column">
        <?php
        $column1_links = array(
            'Home' => home_url('/'),
            'About Banff' => 'https://dev-krit0016.pantheonsite.io/about-banff/',
            'Activities and Attractions' => 'https://dev-krit0016.pantheonsite.io/activities-and-attractions/',
        );

        foreach ($column1_links as $label => $url) {
            echo '<li class="nav-item mb-2"><a href="' . esc_url($url) . '" class="footer nav-link p-0 text-body-secondary">' . esc_html($label) . '</a></li>';
        }
        ?>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Services</h5>
      <ul class="nav flex-column">
        <?php
        $column2_links = array(
            'Services' => '#',
            'Portfolio' => '#',
            'Contact Us' => 'https://dev-krit0016.pantheonsite.io/contact/',
        );

        foreach ($column2_links as $label => $url) {
            echo '<li class="nav-item mb-2"><a href="' . esc_url($url) . '" class="footer nav-link p-0 text-body-secondary">' . esc_html($label) . '</a></li>';
        }
        ?>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Connect</h5>
      <ul class="nav flex-column">
        <?php
        $column3_links = array(
            'Social Medias' => '#',
            'Terms of Service' => '#',
            'Privacy Policy' => '#',
        );

        foreach ($column3_links as $label => $url) {
            echo '<li class="nav-item mb-2"><a href="' . esc_url($url) . '" class="footer nav-link p-0 text-body-secondary">' . esc_html($label) . '</a></li>';
        }
        ?>
      </ul>
    </div>
  </div>
</footer>

<!-- Required function before the closing of the body -->
<?php wp_footer(); ?>
</body>
</html>
