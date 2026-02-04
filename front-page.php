<?php get_header(); ?>

<main class="home">

  <!-- HERO (hardcoded) -->
  <section class="home-hero">
    <div class="hero">
      <div class="hero-text">
        <h1>I design digital experiences that actually work.</h1>
        <h2>Clean interfaces, thoughtful UX, and websites built to support real business goals.</h2>
        <p class="hero-subtitle">
          I’m a UI/UX Designer & Web Strategist who bridges design, development, and strategy — turning complex ideas into intuitive, high-performing digital products.
          Professional, detail-driven, and yes… I enjoy the process too.
        </p>
      </div>
      <div class="hero-image">
        <img src="http://pauline-designed-it.local/wp-content/uploads/2026/02/Pauline-Noel-scaled.jpg" alt="Portrait of Pauline Noël, web and UI/UX designer">
      </div>
    </div>
  </section>

  <!-- PROJECTS LOOP -->
  <section class="home-projects">
    <h2>Selected Work</h2>

    <div class="projects-grid">
        <?php get_template_part('template-parts/loop', 'project'); ?>
    </div>

    <button type="button" href=""></button>

  </section>

</main>

<?php get_footer(); ?>
