<footer class="site-footer">
  <div class="site-footer__inner container">

    <!-- Brand column -->
    <div class="footer-brand">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="footer-brand__logo-wrap">
        <img
          src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pauline Designed It - Logo Design_White.png' ); ?>"
          alt="Pauline Designed It"
          class="footer-logo"
        >
        <span class="footer-site-name">Pauline Designed It</span>
      </a>
      <p class="footer-tagline">Designing digital experiences<br>that actually work.</p>
      <a href="mailto:info@paulinedesigned.it" class="primary-btn btn footer-cta">Let's work together</a>
    </div>

    <!-- Nav columns -->
    <nav class="footer-nav" aria-label="Footer navigation">

      <div class="footer-nav__col">
        <p class="footer-nav__heading">Navigation</p>
        <ul class="footer-nav__list">
          <li><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a></li>
          <li><a href="<?php echo esc_url( home_url('/projects/') ); ?>">Case Studies</a></li>
          <li><a href="<?php echo esc_url( home_url('/about-me/') ); ?>">About Me</a></li>
          <li><a href="<?php echo esc_url( home_url('/contact/') ); ?>">Work With Me</a></li>
        </ul>
      </div>

      <div class="footer-nav__col">
        <p class="footer-nav__heading">Case Studies</p>
        <ul class="footer-nav__list">
          <li><a href="<?php echo esc_url( home_url('/ci-project/') ); ?>">Careers International</a></li>
          <li><a href="<?php echo esc_url( home_url('/jobinar-project/') ); ?>">Jobinar</a></li>
          <li><a href="<?php echo esc_url( home_url('/twc-project/') ); ?>">Top Women Careers</a></li>
          <li><a href="<?php echo esc_url( home_url('/flexina-project/') ); ?>">Flexina</a></li>
        </ul>
      </div>

    </nav>

  </div>

  <!-- Bottom bar -->
  <div class="footer-bottom">
    <div class="container footer-bottom__inner">
      <p class="footer-bottom__copy">&copy; <?php echo date('Y'); ?> Pauline Designed It - All rights reserved.</p>
      <p class="footer-bottom__made">Designed &amp; built by Pauline No&euml;l</p>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
