<?php get_header(); ?>

<main class="home">
    <!-- HERO (hardcoded) -->
    <section class="home-hero">
      <div class="display-flex-center">
        <div class="half-width-container">
          <h1>I design digital experiences that actually work.</h1>
          <h2>Clean interfaces, thoughtful UX, and websites built to support real business goals.</h2>
          <p class="hero-subtitle">
            I’m a UI/UX Designer & Web Strategist who bridges design, development, and strategy — turning complex ideas into intuitive, high-performing digital products.
            Professional, detail-driven, and yes… I enjoy the process too.
          </p>
        </div>
        
        <img class="half-width-container hero-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Pauline-Noel-Photo.jpg" alt="Portrait of Pauline Noël, web and UI/UX designer">
        
      </div>
    </section>

    <!-- PROJECTS LOOP -->
    <section class="home-projects container">
      <h2>Selected Work</h2>

      <div class="projects-grid">
          <?php get_template_part('template-parts/loop', 'project'); ?>
      </div>

      <a href="/projects" class="btn">View all projects</a>

    </section>
</main>

<?php get_footer(); ?>
