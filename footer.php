<!-- Footer Section -->

<section id="foot">
  <footer>
    <div class="container">
      <div class="address">
        <h3>Pune Headquarters</h1>
          <p>
            201, ABC Avenue,
            Kothrud, Pune, 411038
            Ph No - 02057857934
          </p>
      </div>
      <div class="link">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer',
          'menu_id'        => 'footer-menu'
        ));
        ?>
      </div>
      <div class="social-media">
        <h3>Follow Us for More</h3>
        <button><a href="https://www.instagram.com/"><img src="<?php echo get_template_directory_uri() . '/Images/icons8-instagram-48.png'; ?>" alt="Insta" /></a></button>
        <button><a href="https://twitter.com/"><img src="<?php echo get_template_directory_uri() . '/Images/icons8-twitter-48.png'; ?>" alt="Twitter" /></a></button>
        <button><a href="https://www.youtube.com/"><img src="<?php echo get_template_directory_uri() . '/Images/icons8-youtube-48.png'; ?>" alt="YT" /></a></button>

      </div>
    </div>
    <div class="copyright">
      <p>@2023 <?php bloginfo('name'); ?> All rights reserved</p>
    </div>
  </footer>
</section>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>