<?php get_header(); ?>

<main id="main-content" class="home">
    <!-- HERO -->
    <section class="home-hero">

      <!-- Left: text -->
      <div class="hero-text-col">
        <div class="hero-text">
          <span class="hero-kicker">Available for projects</span>
          <h1>Designing digital experiences that <span class="highlight">actually work</span>.</h1>
          <p class="hero-subtitle">I help companies turn complex ideas into clear,<br>high-performing websites.</p>
          <div class="hero-trust">
            <span class="hero-trust__pill">UI/UX Design</span>
            <span class="hero-trust__pill">WordPress</span>
            <span class="hero-trust__pill">20+ Projects</span>
          </div>
          <div class="hero-actions">
            <a href="mailto:paulinenoeldesigns@gmail.com" class="primary-btn btn">Work with me</a>
            <a href="<?php echo esc_url( home_url('/projects/') ); ?>" class="secondary-btn btn">Explore case studies</a>
          </div>
        </div>
      </div>

      <!-- Right: floating mockup stack -->
      <div class="hero-visual">
        <div class="hero-visual__bg"></div>
        <div class="hero-mockup-stack">
          <div class="hero-mockup hero-mockup--back">
            <img
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Jobinar Project/Jobinar mockup.png' ); ?>"
              alt="Jobinar project mockup"
            >
          </div>
          <div class="hero-mockup hero-mockup--front">
            <img
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/CI Project/Careers International Redesign mockup.png' ); ?>"
              alt="Careers International project mockup"
            >
          </div>
        </div>
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
            <p class="label">Clients & testimonials</p>
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
                  <div class="testimonial-avatar" aria-hidden="true">SW</div>
                  <div class="testimonial-profile">
                    <h4>Stéphane Wasjkop</h4>
                    <p>Owner - Careers international</p>
                  </div>
                </div>
                <p class="testimonial-text">
                  “Pauline was a pleasure to work with. She led the rebranding and redesign of Careers International, delivering a modern, user-friendly experience. Her work on the jobinar project also helped streamline processes and reduce costs. I would gladly work with her again.”
                </p>
              </article>

              <article class="testimonial-card">
                <div class="testimonial-header">
                  <div class="testimonial-avatar" aria-hidden="true">GL</div>
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
                  <div class="testimonial-avatar" aria-hidden="true">AO</div>
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
          <div class="logos-track" aria-hidden="true">
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
          <p class="label">Case studies</p>
          <h2>Selected Projects</h2>
        </div>
        
        <h3>A curated selection of projects where strategy, design, and execution interplay.</h3>
        <p class="subtitle">Each project reflects a clear business objective — whether it’s improving usability, simplifying complex information, or building scalable websites that teams can actually manage.</p>

        <div class="two-column-grid">
          <!-- Careers Intenational -->
          <div class="project-card">
            <a href="<?php echo esc_url( home_url( '/ci-project/' ) ); ?>" class="project-card__overlay" aria-label="View case study: Careers International" tabindex="-1"></a>
            <div class="project-card-image-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/CI Project/Careers International Redesign mockup.png" alt="Mockeup image of the Careers International Website I have designed">
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
            <a href="<?php echo esc_url( home_url( '/jobinar-project/' ) ); ?>" class="project-card__overlay" aria-label="View case study: Jobinar" tabindex="-1"></a>
            <div class="project-card-image-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Jobinar Project/Jobinar mockup.png" alt="Mockeup image of the Jobinar project">
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
              <a href="<?php echo esc_url( home_url( '/jobinar-project/' ) ); ?>" class="project-card-link display-flex">View case study</a>
            </div>
          </div>

          <!-- Careers Intenational - TWC-->
          <div class="project-card">
            <a href="<?php echo esc_url( home_url( '/twc-project/' ) ); ?>" class="project-card__overlay" aria-label="View case study: Top Women Careers" tabindex="-1"></a>
            <div class="project-card-image-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/TWC Project/Top women careers Redesign mockup.png" alt="Mockeup image of the Careers International Website I have designed">
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
              <a href="<?php echo esc_url( home_url( '/twc-project/' ) ); ?>" class="project-card-link display-flex">View case study</a>
            </div>
          </div>

          <!-- Flexina -->
          <div class="project-card">
            <a href="<?php echo esc_url( home_url( '/flexina-project/' ) ); ?>" class="project-card__overlay" aria-label="View case study: Flexina" tabindex="-1"></a>
            <div class="project-card-image-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Flexina Project/Flexina mockup.png" alt="Mockeup image of the Flexina website prototype I have designed">
            </div>
            <div class="project-card-content">
              <div class="project-tags-wrapper flex-wrap">
                <div class="project-card-tag">UI</div>
                <div class="project-card-tag">Branding</div>
                <div class="project-card-tag">Adobe XD</div>
              </div>
              <h4 class="project-title">Designing Flexina’s Website: A Clear and Scalable Digital Presence</h4>
              <p>A UI/UX website design for Flexina, focused on clear structure, intuitive navigation, and a modern interface tailored to small businesses.</p>
              <a href="<?php echo esc_url( home_url( '/flexina-project/' ) ); ?>" target="_blank" rel="noopener noreferrer" class="project-card-link display-flex">View the prototype</a>
            </div>
          </div>
        </div>
        <div class="right-align">
          <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="primary-btn btn">Explore Case Studies</a>
        </div>
      <!-- <div class="two-column-grid">
          <?php get_template_part('template-parts/loop', 'project'); ?>
      </div> 

      <a href="/projects" class="primary-btn btn">View all projects</a>-->
      </div>
    </section>

    <!-- OTHER PROJECTS -->
    <section class="other-projects container">
      <div class="section-shell2">
        <div class="section-intro">
          <p class="label">More work</p>
          <h2>Other Projects</h2>
        </div>
        <h3>A selection of additional work — from quick-turn designs to explorations that never made it to a case study.</h3>
      </div>

      <div class="other-projects-grid">

        <div class="op-card">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Anita Diamonds Project/Anita Diamonds Mockup.png' ); ?>" alt="Project 1">
            <div class="op-card__overlay">
              <span class="op-card__category">UI & UX Design</span>
              <h4 class="op-card__title">Anita Diamonds</h4>
              <p class="op-card__desc">The creation of a high end, luxurious website for a diamond company in Antwerp</p>
            </div>
          </div>
        </div>

        <div class="op-card">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Other Projects/De tout pour votre maison !.png' ); ?>" alt="Project 2">
            <div class="op-card__overlay">
              <span class="op-card__category">Newsletters · HTML & CSS</span>
              <h4 class="op-card__title">AddRetail</h4>
              <p class="op-card__desc">At AddRetail, part of my job consists of coding and creating/designing newsletters.</p>
            </div>
          </div>
        </div>

        <div class="op-card">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Other Projects/ne-ma home page.png' ); ?>" alt="Project 3">
            <div class="op-card__overlay">
              <span class="op-card__category">Web Master</span>
              <h4 class="op-card__title">Ne-Ma</h4>
              <p class="op-card__desc">The creation of a website for a small startup wants to help teenagers succeed at school.</p>
            </div>
          </div>
        </div>

        <!-- <div class="op-card">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/other-project-4.jpg' ); ?>" alt="Project 4">
            <div class="op-card__overlay">
              <span class="op-card__category">Adobe XD · Prototyping</span>
              <h4 class="op-card__title">Project Name</h4>
              <p class="op-card__desc">One line about what this project was and what you did.</p>
            </div>
          </div>
        </div> -->

        <div class="op-card">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Other Projects/dgenious home page-01.png' ); ?>" alt="Project 5">
            <div class="op-card__overlay">
              <span class="op-card__category">Web Master</span>
              <h4 class="op-card__title">Dgenious</h4>
              <p class="op-card__desc">The creation of website for the dgenious app. An app that helps you analyse your data in no time</p>
            </div>
          </div>
        </div>

        <div class="op-card">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Other Projects/Cricket&Co promo img.png' ); ?>" alt="Project 6">
            <div class="op-card__overlay">
              <span class="op-card__category">Graphic Design</span>
              <h4 class="op-card__title">Cricket & Co</h4>
              <p class="op-card__desc">Posters, banners, web design, ads and collection look-books for the menswear brand.</p>
            </div>
          </div>
        </div>

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
