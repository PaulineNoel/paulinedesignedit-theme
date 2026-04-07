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

        <div class="op-card op-card--lightbox" data-lightbox="anita-diamonds" role="button" tabindex="0" aria-haspopup="dialog" aria-label="View Anita Diamonds project gallery">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Anita Diamonds Project/Anita Diamonds Mockup.png' ); ?>" alt="Anita Diamonds website mockup">
            <div class="op-card__overlay">
              <span class="op-card__category">UI & UX Design</span>
              <h4 class="op-card__title">Anita Diamonds</h4>
              <p class="op-card__desc">The creation of a high end, luxurious website for a diamond company in Antwerp</p>
              <span class="op-card__gallery-hint" aria-hidden="true">View gallery →</span>
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
          
        <div class="op-card">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Other Projects/Coding project.png' ); ?>" alt="Project 6">
            <div class="op-card__overlay">
              <span class="op-card__category">Front & Back end Web Development</span>
              <h4 class="op-card__title">MealzZap</h4>
              <p class="op-card__desc">10 days to create and code a website using Ruby on Rails, MCV, HTML, SCSS, JS</p>
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

<?php
$ad_base = get_template_directory_uri() . '/assets/images/Anita Diamonds Project/';
$ad_images = [
  [ 'src' => $ad_base . 'Anita Diamonds Mockup.png',           'alt' => 'Anita Diamonds – full website mockup across devices' ],
  [ 'src' => $ad_base . 'Desktop home screen - A_D.png',       'alt' => 'Anita Diamonds – homepage design' ],
  [ 'src' => $ad_base . 'Desktop about us screen - A_D.png',   'alt' => 'Anita Diamonds – about us page design' ],
  [ 'src' => $ad_base . 'Desktop corpot res screen - A_D.png', 'alt' => 'Anita Diamonds – corporate responsibility page design' ],
  [ 'src' => $ad_base . 'Diamond Search.png',                  'alt' => 'Anita Diamonds – diamond search feature design' ],
];
?>

<!-- Lightbox: Anita Diamonds -->
<div class="ad-lightbox" id="lightbox-anita-diamonds" role="dialog" aria-modal="true" aria-label="Anita Diamonds project gallery" hidden>
  <div class="ad-lightbox__backdrop"></div>
  <div class="ad-lightbox__panel">

    <button class="ad-lightbox__close" aria-label="Close gallery">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M2 2l16 16M18 2L2 18" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
    </button>

    <div class="ad-lightbox__header">
      <p class="label">UI & UX Design</p>
      <h3>Anita Diamonds</h3>
    </div>

    <div class="ad-lightbox__carousel">
      <div class="ad-lightbox__track">
        <?php foreach ( $ad_images as $i => $img ) : ?>
          <div class="ad-lightbox__slide" <?php echo $i === 0 ? 'aria-current="true"' : ''; ?>>
            <img src="<?php echo esc_url( $img['src'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>">
          </div>
        <?php endforeach; ?>
      </div>

      <button class="ad-lightbox__nav ad-lightbox__nav--prev" aria-label="Previous image">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M13 3l-7 7 7 7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      <button class="ad-lightbox__nav ad-lightbox__nav--next" aria-label="Next image">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M7 3l7 7-7 7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
    </div>

    <div class="ad-lightbox__dots" aria-hidden="true">
      <?php foreach ( $ad_images as $i => $img ) : ?>
        <span class="ad-lightbox__dot <?php echo $i === 0 ? 'is-active' : ''; ?>"></span>
      <?php endforeach; ?>
    </div>

    <p class="ad-lightbox__counter" aria-live="polite">
      <span class="ad-lightbox__current">1</span> / <?php echo count( $ad_images ); ?>
    </p>

  </div>
</div>

<script>
(function () {
  var lightbox   = document.getElementById('lightbox-anita-diamonds');
  var backdrop   = lightbox.querySelector('.ad-lightbox__backdrop');
  var closeBtn   = lightbox.querySelector('.ad-lightbox__close');
  var prevBtn    = lightbox.querySelector('.ad-lightbox__nav--prev');
  var nextBtn    = lightbox.querySelector('.ad-lightbox__nav--next');
  var slides     = lightbox.querySelectorAll('.ad-lightbox__slide');
  var dots       = lightbox.querySelectorAll('.ad-lightbox__dot');
  var counter    = lightbox.querySelector('.ad-lightbox__current');
  var triggers   = document.querySelectorAll('[data-lightbox="anita-diamonds"]');
  var current    = 0;
  var lastFocus  = null;

  function goTo(n) {
    slides[current].removeAttribute('aria-current');
    dots[current].classList.remove('is-active');
    current = (n + slides.length) % slides.length;
    slides[current].setAttribute('aria-current', 'true');
    dots[current].classList.add('is-active');
    counter.textContent = current + 1;
    slides[current].querySelector('img').focus();
  }

  function open() {
    lastFocus = document.activeElement;
    lightbox.removeAttribute('hidden');
    document.body.style.overflow = 'hidden';
    goTo(0);
    closeBtn.focus();
  }

  function close() {
    lightbox.setAttribute('hidden', '');
    document.body.style.overflow = '';
    if (lastFocus) { lastFocus.focus(); }
  }

  triggers.forEach(function (el) {
    el.addEventListener('click', open);
    el.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); open(); }
    });
  });

  closeBtn.addEventListener('click', close);
  backdrop.addEventListener('click', close);
  prevBtn.addEventListener('click', function () { goTo(current - 1); });
  nextBtn.addEventListener('click', function () { goTo(current + 1); });

  document.addEventListener('keydown', function (e) {
    if (lightbox.hasAttribute('hidden')) return;
    if (e.key === 'Escape')     { close(); }
    if (e.key === 'ArrowLeft')  { goTo(current - 1); }
    if (e.key === 'ArrowRight') { goTo(current + 1); }
  });
})();
</script>

<?php get_footer(); ?>
