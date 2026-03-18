<?php get_header(); ?>

<main class="home">
    <!-- HERO (hardcoded) -->
    <section class="home-hero container">
      <div class="display-flex-center-center">
        <div class="half-width-container hero-text">
          <h1>Designing digital<br>experiences that<br><span class="highlight">actually work</span>.</h1>
          <h2 class="hero-h2">Strategy-led UX and high-performing websites.</h2>
          <hr class="space-30">
          <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="primary-btn btn">Explore Case Studies</a>
          <!-- <div class="display-flex two-button-section">
            <a href="/projects" class="primary-btn btn two-button-section-element">View all projects</a>
            <a href="/contact-me" class="secondary-btn btn two-button-section-element">View all projects</a>
          </div> -->
        </div>
        <img class="half-width-container hero-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Pauline Noel Profile photo with chat bubble.png" alt="Portrait of Pauline Noël, web and UI/UX designer">
      </div>
    </section>

    <!-- Short value proposition -->
     <section class="container">
      <h2>Design is not just how it looks. It’s how it performs.</h2>
      <p>I help companies create websites and platforms that are clear, accessible, conversion-focused, and easy to maintain.<br>No over-engineering. No unnecessary fluff. Just smart design decisions backed by strategy and execution.
      </p>
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
<!--
      <div class="projects-wrapper display-flex">
        <div class="project-card" href="/PLACEHREF">
          <img class="project-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Careers International Redesign mockup.png" alt="work in progress">
          <div class="project-content">
            <div class="project-tags-wrapper display-flex">
              <div class="project-card-tag">HTML & CSS</div>
              <div class="project-card-tag">UI/UX</div>
              <div class="project-card-tag">Branding</div>
              <div class="project-card-tag">WP & Elementor</div>
            </div>
            <div class="card-txt">
              <h4>Reimagining Careers International: From Brand to Digital Experience</h4>
              <p>A complete brand and UX transformation for Careers International. I developed a new visual identity, crafted an engaging and user-friendly UI, and built an animated WordPress site using Elementor and custom HTML/CSS.</p>
            </div>
            <a href="/PLACEHREF" class="project-card-link display-flex">View case study</a>
          </div>
        </div>

        <div class="project-card" href="/PLACEHREF">
          <img class="project-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Careers International Redesign mockup.png" alt="work in progress">
          <div class="project-content">
            <div class="project-tags-wrapper display-flex">
              <div class="project-card-tag">HTML & CSS</div>
              <div class="project-card-tag">UI/UX</div>
              <div class="project-card-tag">Branding</div>
              <div class="project-card-tag">WP & Elementor</div>
            </div>
            <div class="card-txt">
              <h4>Top Women Careers: Brand & UX for an Inclusive Career Platform</h4>
              <p>Brand and website for Top Women Careers, connecting women with progressive employers. UX, visual identity, and scalable WordPress platform.</p>
            </div>
            <a href="/PLACEHREF" class="project-card-link display-flex">View case study</a>
          </div>
        </div>
      </div> -->


      <div class="projects-grid">
        <!-- Careers Intenational -->
        <div class="project-card">
          <div class="project-card-image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Careers International Redesign mockup.png" alt="Mockeup image of the Careers International Website I have designed">
          </div>
          <div class="project-card-content">
            <div class="project-tags-wrapper display-flex">
              <div class="project-card-tag">HTML & CSS</div>
              <div class="project-card-tag">UI/UX</div>
              <div class="project-card-tag">Branding</div>
              <div class="project-card-tag">WP & Elementor</div>
            </div>
            <h4 class="project-title">Reimagining Careers International: From Brand to Digital Experience</h4>
            <p>A full brand and UX transformation for Careers International, including a new identity, engaging UI, and animated WordPress build.</p>
            <a href="/PLACEHREF" class="project-card-link display-flex">View case study</a>
          </div>
        </div>

        <!-- Careers Intenational - Jobinar-->
        <div class="project-card">
          <div class="project-card-image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Jobinar mockup.png" alt="Mockeup image of the Jobinar project">
          </div>
          <div class="project-card-content">
            <div class="project-tags-wrapper display-flex">
              <div class="project-card-tag">Web Strategy</div>
              <div class="project-card-tag">UI/UX</div>
              <div class="project-card-tag">HTML & CSS</div>
              <div class="project-card-tag">WP & Elementor</div>
            </div>
            <h4 class="project-title">Optimizing Jobinar: From Costly Platform to Scalable Solution</h4>
            <p>A web strategy and UX overhaul of the Jobinar platform, replacing an expensive, inflexible system with a scalable Wistia-based solution.</p>
            <a href="/PLACEHREF" class="project-card-link display-flex">View case study</a>
          </div>
        </div>

        <!-- Careers Intenational - TWC-->
        <div class="project-card">
          <div class="project-card-image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Top women careers Redesign mockup.png" alt="Mockeup image of the Careers International Website I have designed">
          </div>
          <div class="project-card-content">
            <div class="project-tags-wrapper display-flex">
              <div class="project-card-tag">HTML & CSS</div>
              <div class="project-card-tag">UI/UX</div>
              <div class="project-card-tag">Branding</div>
              <div class="project-card-tag">WP & Elementor</div>
            </div>
            <h4 class="project-title">Top Women Careers: Brand & UX for an Inclusive Career Platform</h4>
            <p>Brand and website for Top Women Careers, connecting women with progressive employers. UX, visual identity, and scalable WordPress platform.</p>
            <a href="/PLACEHREF" class="project-card-link display-flex">View case study</a>
          </div>
        </div>

        <!-- Careers Intenational - TWC-->
        <div class="project-card">
          <div class="project-card-image-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Top women careers Redesign mockup.png" alt="Mockeup image of the Careers International Website I have designed">
          </div>
          <div class="project-card-content">
            <div class="project-tags-wrapper display-flex">
              <div class="project-card-tag">HTML & CSS</div>
              <div class="project-card-tag">UI/UX</div>
              <div class="project-card-tag">Branding</div>
              <div class="project-card-tag">WP & Elementor</div>
            </div>
            <h4 class="project-title">Top Women Careers: Brand & UX for an Inclusive Career Platform</h4>
            <p>Brand and website for Top Women Careers, connecting women with progressive employers. UX, visual identity, and scalable WordPress platform.</p>
            <a href="/PLACEHREF" class="project-card-link display-flex">View case study</a>
          </div>
        </div>
        
      </div>

      <!-- <div class="projects-grid">
          <?php get_template_part('template-parts/loop', 'project'); ?>
      </div> 

      <a href="/projects" class="primary-btn btn">View all projects</a>-->

    </section>
</main>

<?php get_footer(); ?>
