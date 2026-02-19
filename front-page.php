<?php get_header(); ?>

<main class="home">
    <!-- HERO (hardcoded) -->
    <section class="home-hero container">
      <div class="display-flex-center">
        <div class="half-width-container hero-text">
          <h1>Designing digital experiences that <span class="highlight">actually work</span>.</h1>
          <h2>Clean interfaces, thoughtful UX, and websites built to support real business goals.</h2>
          <h3 class="hero-subtitle">
            I’m a UI/UX Designer & Web Strategist who bridges design, development, and strategy — turning complex ideas into intuitive, high-performing digital products.<br>
            Professional, detail-driven, and yes… I enjoy the process too.
          </h3>
          <div class="display-flex two-button-section">
            <a href="/projects" class="primary-btn btn two-button-section-element">View all projects</a>
            <a href="/contact-me" class="secondary-btn btn two-button-section-element">View all projects</a>
          </div>
        </div>
        
        <img class="half-width-container hero-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Pauline Noel Profile photo with chat bubble.png" alt="Portrait of Pauline Noël, web and UI/UX designer">
        
      </div>
    </section>

    <!-- Short value proposition -->
     <section class="container">
      <h2>Design is not just how it looks. It’s how it performs.</h2>
      <p>I help companies create websites and platforms that are clear, accessible, conversion-focused, and easy to maintain.<br>
      No over-engineering. No unnecessary fluff. Just smart design decisions backed by strategy and execution.</p>
     </section>
    
    <!-- Services -->
     <section class="container">
      <div class="display-flex-center">
        div.service-card
      </div>
     </section>
    
     <!-- PROJECTS LOOP -->
    <section class="home-projects container">
      <h2>Selected Projects</h2>
      <h3>A curated selection of projects where strategy, design, and execution come together.</h3>
      <p>Each project reflects a clear business objective — whether it’s improving usability, simplifying complex information, or building scalable websites that teams can actually manage.</p>

      <div class="projects-grid">
          <?php get_template_part('template-parts/loop', 'project'); ?>
      </div>

      <a href="/projects" class="primary-btn btn">View all projects</a>

    </section>
</main>

<?php get_footer(); ?>
