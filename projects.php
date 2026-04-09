<?php 
/**
 * Template Name: Projects
 */
get_header(); ?>

<main id="main-content" class="site-main">
  <section id="projects-archive" class="container">
    <h1>View all case studies</h1>
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

          <!-- TWC
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
          </div> -->

          <!-- Anita Diamonds -->
          <div class="project-card">
            <a href="<?php echo esc_url( home_url( '/anita-diamonds-project/' ) ); ?>" class="project-card__overlay" aria-label="View case study: Anita Diamonds" tabindex="-1"></a>
            <div class="project-card-image-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Anita Diamonds Project/Anita Diamonds - Mockup - Multi device.png" alt="Anita Diamonds website mockup across multiple devices">
            </div>
            <div class="project-card-content">
              <div class="project-tags-wrapper flex-wrap">
                <div class="project-card-tag">UI/UX</div>
                <div class="project-card-tag">UX Research</div>
                <div class="project-card-tag">Figma</div>
                <div class="project-card-tag">Luxury</div>
              </div>
              <h4 class="project-title">Anita Diamonds: Designing for Luxury, Trust and Precision</h4>
              <p>High-end UI/UX design for a diamond company in Antwerp, including deep product research and a custom diamond repertory feature.</p>
              <a href="<?php echo esc_url( home_url( '/anita-diamonds-project/' ) ); ?>" class="project-card-link display-flex">View case study</a>
            </div>
          </div>

          <!-- FlyUX -->
          <div class="project-card">
            <a href="<?php echo esc_url( home_url( '/flyux-project/' ) ); ?>" class="project-card__overlay" aria-label="View case study: FlyUX" tabindex="-1"></a>
            <div class="project-card-image-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Fly UX/Fly UX - Mobile - Mockup.png" alt="FlyUX airline app mockup on mobile device">
            </div>
            <div class="project-card-content">
              <div class="project-tags-wrapper flex-wrap">
                <div class="project-card-tag">UX Research</div>
                <div class="project-card-tag">Usability Testing</div>
                <div class="project-card-tag">Journey Mapping</div>
                <div class="project-card-tag">Wireframing</div>
                <div class="project-card-tag">Prototyping</div>
              </div>
              <h4 class="project-title">FlyUX: Designing a Better Airline App from Research to Prototype</h4>
              <p>A full UX process from competitive benchmarking and usability testing to affinity diagrams, journey mapping, and a high-fidelity airline booking app prototype.</p>
              <a href="<?php echo esc_url( home_url( '/flyux-project/' ) ); ?>" class="project-card-link display-flex">View case study</a>
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
  </section>
</main>

<?php get_footer(); ?>
