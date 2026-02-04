<?php get_header(); ?>

<main class="home">

  <!-- HERO (hardcoded) -->
  <section class="home-hero">
    <h1>Pauline Noël</h1>
    <p class="hero-subtitle">
      UI/UX Designer & Web Strategist
    </p>
  </section>

  <!-- PROJECTS LOOP -->
  <section class="home-projects">
    <h2>Selected Work</h2>

    <div class="projects-grid">
        <?php get_template_part('template-parts/loop', 'project'); ?>
    </div>

  </section>

</main>

<?php get_footer(); ?>
