<?php get_header(); ?>

<main id="main" class="site-main">
  <section class="container page-header">
    <h1><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?>
      <p class="lead"><?php echo get_the_excerpt(); ?></p>
    <?php endif; ?>
  </section>

  <section class="container contact">
    <div class="contact-grid">
      <div class="contact-copy">
        <h2>Let’s build something clear, fast, and beautiful.</h2>
        <p>Email me at <a href="mailto:hello@yourdomain.com">hello@yourdomain.com</a> or use the form.</p>
      </div>

      <div class="contact-form">
        <?php
          // Option 1: Paste a shortcode from a form plugin (WPForms / CF7 / Fluent Forms)
          // echo do_shortcode('[contact-form-7 id="123" title="Contact"]');

          // Option 2: If you want pure code later, we can build a custom form handler.
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
