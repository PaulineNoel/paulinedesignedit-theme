<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Skip link: allows keyboard users to jump past navigation -->
<a class="skip-link" href="#main-content">Skip to main content</a>

<header class="site-header" id="site-header">
  <div class="site-header__inner container">

    <!-- Brand: Logo + Site Name -->
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="site-header__brand">
      <img
        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pauline Designed It - Logo Design_Black.png' ); ?>"
        alt="Pauline Designed It Logo"
        class="site-logo"
      >
      <span class="site-name">Pauline Designed It</span>
    </a>

    <!-- Primary Nav -->
    <nav class="site-nav" aria-label="Primary navigation">
      <ul class="site-nav__list">

        <?php
          $is_case_study = is_page( array( 'projects', 'ci-project', 'jobinar-project', 'twc-project', 'flexina-project' ) )
                           || ( is_singular() && in_array( get_post()->post_name, array( 'ci-project', 'jobinar-project', 'twc-project', 'flexina-project', 'projects' ) ) );
        ?>

        <li class="site-nav__item">
          <a href="<?php echo esc_url( home_url('/') ); ?>" class="site-nav__link<?php echo ( is_front_page() ) ? ' is-active' : ''; ?>" <?php echo ( is_front_page() ) ? 'aria-current="page"' : ''; ?>>Home</a>
        </li>

        <!-- Case Studies with animated dropdown -->
        <li class="site-nav__item site-nav__item--has-dropdown">
          <a href="<?php echo esc_url( home_url('/projects/') ); ?>" class="site-nav__link site-nav__link--dropdown-trigger<?php echo $is_case_study ? ' is-active' : ''; ?>" aria-haspopup="true" aria-expanded="false" <?php echo $is_case_study ? 'aria-current="page"' : ''; ?>>
            Case Studies
            <svg class="dropdown-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true">
              <path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <div class="site-nav__dropdown" aria-label="Case studies submenu">
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="<?php echo esc_url( home_url('/ci-project/') ); ?>" class="dropdown-link<?php echo is_page('ci-project') ? ' is-active' : ''; ?>" role="menuitem">
                  <span class="dropdown-link__label">Careers International</span>
                  <span class="dropdown-link__sub">Brand &amp; UX transformation</span>
                </a>
              </li>
              <li class="dropdown-item">
                <a href="<?php echo esc_url( home_url('/jobinar-project/') ); ?>" class="dropdown-link<?php echo is_page('jobinar-project') ? ' is-active' : ''; ?>" role="menuitem">
                  <span class="dropdown-link__label">Jobinar</span>
                  <span class="dropdown-link__sub">Web strategy &amp; UX overhaul</span>
                </a>
              </li>
              <li class="dropdown-item">
                <a href="<?php echo esc_url( home_url('/twc-project/') ); ?>" class="dropdown-link<?php echo is_page('twc-project') ? ' is-active' : ''; ?>" role="menuitem">
                  <span class="dropdown-link__label">Top Women Careers</span>
                  <span class="dropdown-link__sub">Digital experience design</span>
                </a>
              </li>
              <li class="dropdown-item">
                <a href="<?php echo esc_url( home_url('/flexina-project/') ); ?>" class="dropdown-link<?php echo is_page('flexina-project') ? ' is-active' : ''; ?>" role="menuitem">
                  <span class="dropdown-link__label">Flexina</span>
                  <span class="dropdown-link__sub">UI prototype</span>
                </a>
              </li>
            </ul>
            <a href="<?php echo esc_url( home_url('/projects/') ); ?>" class="dropdown-all-link">View all case studies &rarr;</a>
          </div>
        </li>

        <li class="site-nav__item">
          <a href="<?php echo esc_url( home_url('/about-me/') ); ?>" class="site-nav__link<?php echo is_page('about-me') ? ' is-active' : ''; ?>" <?php echo is_page('about-me') ? 'aria-current="page"' : ''; ?>>About Me</a>
        </li>

        <li class="site-nav__item">
          <a href="mailto:info@paulinedesigned.it" class="primary-btn btn">Work With Me</a>
        </li>

      </ul>
    </nav>

    <!-- Mobile hamburger -->
    <button class="site-nav__hamburger" aria-label="Toggle menu" aria-expanded="false" aria-controls="site-nav">
      <span></span><span></span><span></span>
    </button>

  </div>
</header>

<script>
(function () {
  // Dropdown: open on hover (desktop) & click (mobile/keyboard)
  var triggers = document.querySelectorAll('.site-nav__link--dropdown-trigger');
  triggers.forEach(function (trigger) {
    var item = trigger.closest('.site-nav__item--has-dropdown');
    trigger.addEventListener('click', function (e) {
      var isOpen = item.classList.contains('is-open');
      // Close all
      document.querySelectorAll('.site-nav__item--has-dropdown').forEach(function (i) {
        i.classList.remove('is-open');
        i.querySelector('.site-nav__link--dropdown-trigger').setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        e.preventDefault();
        item.classList.add('is-open');
        trigger.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // Close dropdown on outside click or Escape key
  function closeAllDropdowns(returnFocus) {
    document.querySelectorAll('.site-nav__item--has-dropdown').forEach(function (i) {
      var wasOpen = i.classList.contains('is-open');
      i.classList.remove('is-open');
      var trigger = i.querySelector('.site-nav__link--dropdown-trigger');
      trigger.setAttribute('aria-expanded', 'false');
      if (wasOpen && returnFocus) { trigger.focus(); }
    });
  }

  document.addEventListener('click', function (e) {
    if (!e.target.closest('.site-nav__item--has-dropdown')) {
      closeAllDropdowns(false);
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeAllDropdowns(true);
      if (nav.classList.contains('is-mobile-open')) {
        nav.classList.remove('is-mobile-open');
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.classList.remove('is-active');
        hamburger.focus();
      }
    }
  });

  // Mobile hamburger
  var hamburger = document.querySelector('.site-nav__hamburger');
  var nav = document.querySelector('.site-nav');
  if (hamburger) {
    hamburger.addEventListener('click', function () {
      var open = nav.classList.toggle('is-mobile-open');
      hamburger.setAttribute('aria-expanded', open ? 'true' : 'false');
      hamburger.classList.toggle('is-active', open);
    });
  }

  // Sticky header: add scrolled class for shadow
  var header = document.getElementById('site-header');
  window.addEventListener('scroll', function () {
    header.classList.toggle('is-scrolled', window.scrollY > 10);
  }, { passive: true });
})();
</script>
