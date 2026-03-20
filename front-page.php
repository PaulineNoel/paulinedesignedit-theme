<?php get_header(); ?>

<main class="home">
    <!-- HERO (hardcoded) -->
    <section class="home-hero container">
      <div class="display-flex-center-center">
        <div class="half-width-container hero-text">
          <h1>Designing digital<br>experiences that<br><span class="highlight">actually work</span>.</h1>
          <p class="subtitle">I help companies turn complex ideas into clear, high-performing websites.</p>
          <hr class="space-30">
          <div class="display-flex">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="primary-btn btn">Work with me</a>
            <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="secondary-btn btn">Explore case studies</a>
          </div>
          
          <!-- <div class="display-flex two-button-section">
            <a href="/projects" class="primary-btn btn two-button-section-element">View all projects</a>
            <a href="/contact-me" class="secondary-btn btn two-button-section-element">View all projects</a>
          </div> -->
        </div>
        <img class="half-width-container hero-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Pauline Noel Profile photo with chat bubble.png" alt="Portrait of Pauline Noël, web and UI/UX designer">
      </div>
    </section>

    <!-- Short value proposition -->
     <!-- <section class="container">
      <h2>Design is not just how it looks. It’s how it performs.</h2>
      <p>I help companies create websites and platforms that are clear, accessible, conversion-focused, and easy to maintain.<br>No over-engineering. No unnecessary fluff. Just smart design decisions backed by strategy and execution.
      </p>
     </section> -->
    
    <section class="clients container">
      <div class="section-shell">
        <div class="clients-top">
          <div class="section-intro">
            <p class="label">Clients</p>
            <h2>Companies I’ve worked with</h2>
            <p class="subtitle client-subtitle">
              Helping teams turn complex ideas into simple, high-performing digital experiences.
            </p>

            <div class="clients-nav">
              <button class="testimonial-btn prev" aria-label="Previous testimonial">←</button>
              <button class="testimonial-btn next" aria-label="Next testimonial">→</button>
            </div>
          </div>

          <div class="testimonials-stage">
            <div class="testimonials-wrapper">
              <article class="testimonial-card is-active">
                <div class="testimonial-header">
                  <div class="testimonial-avatar">CI</div>
                  <div class="testimonial-profile">
                    <h4>Stéphane Wasjkop</h4>
                    <p>Owner - Careers international</p>
                  </div>
                </div>
                <p class="testimonial-text">
                  “Pauline was a pleasure to work with. She immediately understood what we were trying to build with Flexina and turned it into a modern, user-friendly design. Her responsiveness, creativity, and ability to deliver high-quality work quickly made a real difference. I’d definitely work with her again.”
                </p>
              </article>

              <article class="testimonial-card">
                <div class="testimonial-header">
                  <div class="testimonial-avatar">GL</div>
                  <div class="testimonial-profile">
                    <h4>Giovanni La Mantia</h4>
                    <p>Owner - Flexina</p>
                  </div>
                </div>
                <p class="testimonial-text">
                  “Pauline was a pleasure to work with. She immediately understood what we were trying to build with Flexina and turned it into a modern, user-friendly design. Her responsiveness, creativity, and ability to deliver high-quality work quickly made a real difference. I’d definitely work with her again.”
                </p>
              </article>

              <article class="testimonial-card">
                <div class="testimonial-header">
                  <div class="testimonial-avatar">AC</div>
                  <div class="testimonial-profile">
                    <h4>Andres Orduz</h4>
                    <p>Product Manager - Proximus</p>
                  </div>
                </div>
                <p class="testimonial-text">
                  "Pauline is a team player and is always willing to find creative solutions to complex technical problems. She understands the tools at her disposal and the needs of the business. Her willingness to go above and beyond for her team and her cheerful personality make her an excellent colleague."
                </p>
              </article>
            </div>
          </div>
        </div>

        <div class="clients-logos">
          <div class="logos-track">
            <?php
            $logos = [
              ['file' => 'Careers International Logo B&W.png', 'alt' => 'Careers International Logo'],
              ['file' => 'Proximus Logo B&W.png',              'alt' => 'Proximus Logo'],
              ['file' => 'Top Women Careers Logo B&W.png',     'alt' => 'Top Women Careers Logo'],
              ['file' => 'Flexina logo B&W.png',               'alt' => 'Flexina Logo'],
              ['file' => 'Dgenious Logo.png',                  'alt' => 'Dgenious Logo'],
              ['file' => 'AddRetail Logo B&W.png',             'alt' => 'AddRetail Logo'],
              ['file' => 'Anita Diamonds Logo B&W.png',        'alt' => 'Anita Diamonds Logo'],
            ];
            $base = get_stylesheet_directory_uri() . '/assets/images/Client Logos/B&W/';
            // Duplicate the list for seamless loop
            $all = array_merge($logos, $logos);
            foreach ($all as $logo) :
            ?>
              <div class="logo-img">
                <img src="<?php echo esc_url($base . $logo['file']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="client-logo">
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    
     <!-- PROJECTS  -->
    <section class="home-projects container">
      <div class="section-shell2">
        <div class="section-intro">
          <p class="label">Stats</p>
          <h2>Selected Projects</h2>
        </div>
        
        <h3>A curated selection of projects where strategy, design, and execution come together.</h3>
        <p class="subtitle">Each project reflects a clear business objective — whether it’s improving usability, simplifying complex information, or building scalable websites that teams can actually manage.</p>

        <div class="projects-grid">
          <!-- Careers Intenational -->
          <div class="project-card">
            <div class="project-card-image-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Careers International Redesign mockup.png" alt="Mockeup image of the Careers International Website I have designed">
            </div>
            <div class="project-card-content">
              <div class="project-tags-wrapper flex-wrap">
                <div class="project-card-tag">HTML</div>
                <div class="project-card-tag">CSS</div>
                <div class="project-card-tag">UI/UX</div>
                <div class="project-card-tag">Branding</div>
                <div class="project-card-tag">WordPress</div>
                <div class="project-card-tag">Elementor</div>
                <div class="project-card-tag">SEO</div>
              </div>
              <h4 class="project-title">Reimagining Careers International: From Brand to Digital Experience</h4>
              <p>A full brand and UX transformation for Careers International, including a new identity, engaging UI, and animated WordPress build.</p>
              <a href="<?php echo esc_url( home_url( '/ci-project/' ) ); ?>" class="project-card-link display-flex">View case study</a>
            </div>
          </div>

          <!-- Careers Intenational - Jobinar-->
          <div class="project-card">
            <div class="project-card-image-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Jobinar mockup.png" alt="Mockeup image of the Jobinar project">
            </div>
            <div class="project-card-content">
              <div class="project-tags-wrapper flex-wrap">
                <div class="project-card-tag">Web Strategy</div>
                <div class="project-card-tag">UI/UX</div>
                <div class="project-card-tag">HTML</div>
                <div class="project-card-tag">CSS</div>
                <div class="project-card-tag">WordPress</div>
                <div class="project-card-tag">Elementor</div>
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
              <div class="project-tags-wrapper flex-wrap">
                <div class="project-card-tag">HTML</div>
                <div class="project-card-tag">CSS</div>
                <div class="project-card-tag">UI/UX</div>
                <div class="project-card-tag">Branding</div>
                <div class="project-card-tag">WordPress</div>
                <div class="project-card-tag">Elementor</div>
              </div>
              <h4 class="project-title">Top Women Careers: Brand & UX for an Inclusive Career Platform</h4>
              <p>Brand and website for Top Women Careers, connecting women with progressive employers. UX, visual identity, and scalable WordPress platform.</p>
              <a href="/PLACEHREF" class="project-card-link display-flex">View case study</a>
            </div>
          </div>

          <!-- Careers Intenational - TWC-->
          <div class="project-card">
            <div class="project-card-image-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Flexina mockup.png" alt="Mockeup image of the Flexina website prototype I have designed">
            </div>
            <div class="project-card-content">
              <div class="project-tags-wrapper flex-wrap">
                <div class="project-card-tag">UI</div>
                <div class="project-card-tag">Branding</div>
                <div class="project-card-tag">Adobe XD</div>
              </div>
              <h4 class="project-title">Designing Flexina’s Website: A Clear and Scalable Digital Presence</h4>
              <p>A UI/UX website design for Flexina, focused on clear structure, intuitive navigation, and a modern interface tailored to small businesses.</p>
              <a href="https://xd.adobe.com/view/a7c8528e-753d-4c8f-b49a-109bb02c4edb-f29b/?hints=off" target="blank" class="project-card-link display-flex">View the prototype</a>
            </div>
          </div>
        </div>
        <div class="right-align">
          <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="primary-btn btn">Explore Case Studies</a>
        </div>
      <!-- <div class="projects-grid">
          <?php get_template_part('template-parts/loop', 'project'); ?>
      </div> 

      <a href="/projects" class="primary-btn btn">View all projects</a>-->
      </div>
    </section>

    <section class="stats container">
      <div class="section-shell">
        <div class="section-intro">
          <p class="label">Stats</p>
          <h2>Results that matter</h2>
        </div>
        <div class="stats-grid">
          <div class="stat-card">
            <p><b>€15K+ saved annually</b></p>
            <p>By redesigning and replacing inefficient platforms.</p>
          </div>

          <div class="stat-card">
            <p><b>Multiple websites designed & built end-to-end</b></p>
            <p>From strategy and UX to development and launch.</p>
          </div>

          <div class="stat-card">
            <p><b>Built for performance</b></p>
            <p>Design decisions driven by real user needs and business goals.</p>
          </div>

          <div class="stat-card">
            <p><b>No fluff, just results</b></p>
            <p>No over-engineering — only what brings real value.</p>
          </div>
        </div>
      </div>
      
    </section>
</main>

<?php get_footer(); ?>
