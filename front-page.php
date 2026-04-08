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
            <a href="mailto:info@paulinedesigned.it" class="primary-btn btn">Work with me</a>
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

        <div class="op-card op-card--lightbox" data-lightbox="fashion-ss2019" role="button" tabindex="0" aria-haspopup="dialog" aria-label="Watch Fashion Collection SS2019 video">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Other Projects/Fashion collection preview.jpg' ); ?>" alt="Fashion Collection SS2019 – Graduate London Fashion Week 2018">
            <div class="op-card__overlay">
              <span class="op-card__category">Fashion Design</span>
              <h4 class="op-card__title">Fashion Collection SS2019</h4>
              <p class="op-card__desc">6 knitwear outfits shown at Graduate London Fashion Week 2018.</p>
              <span class="op-card__gallery-hint" aria-hidden="true">▶ Watch video</span>
            </div>
          </div>
        </div>

        <div class="op-card op-card--lightbox" data-lightbox="addretail" role="button" tabindex="0" aria-haspopup="dialog" aria-label="View AddRetail newsletter gallery">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Other Projects/Newsletter Addretail/Trafic Newsletter Mockups.png' ); ?>" alt="AddRetail newsletter design – De tout pour votre maison">
            <div class="op-card__overlay">
              <span class="op-card__category">Newsletters · HTML & CSS</span>
              <h4 class="op-card__title">AddRetail</h4>
              <p class="op-card__desc">HTML newsletters designed and coded for major Belgian companies.</p>
              <span class="op-card__gallery-hint" aria-hidden="true">View gallery →</span>
            </div>
          </div>
        </div>

        <div class="op-card">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Other Projects/Ne-Ma Mockup.png' ); ?>" alt="Project 3">
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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Other Projects/Dgenious/Dgenious Mockup.png' ); ?>" alt="Project 5">
            <div class="op-card__overlay">
              <span class="op-card__category">Web Master</span>
              <h4 class="op-card__title">Dgenious</h4>
              <p class="op-card__desc">The creation of website for the dgenious app. An app that helps you analyse your data in no time</p>
            </div>
          </div>
        </div>

        <div class="op-card op-card--lightbox" data-lightbox="cricket" role="button" tabindex="0" aria-haspopup="dialog" aria-label="View Cricket &amp; Co project gallery">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Other Projects/Cricket & Co/Cricket & Co Mockup.png' ); ?>" alt="Cricket &amp; Co – graphic design and production work">
            <div class="op-card__overlay">
              <span class="op-card__category">Graphic Design · Production</span>
              <h4 class="op-card__title">Cricket &amp; Co</h4>
              <p class="op-card__desc">Posters, invitations, collection catalogues and production coordination for the menswear brand.</p>
              <span class="op-card__gallery-hint" aria-hidden="true">View gallery →</span>
            </div>
          </div>
        </div>
          
        <div class="op-card op-card--lightbox" data-lightbox="mealzzap" role="button" tabindex="0" aria-haspopup="dialog" aria-label="Watch MealzZap project video">
          <div class="op-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Other Projects/MealzZap mockup.png' ); ?>" alt="MealzZap – Le Wagon coding project">
            <div class="op-card__overlay">
              <span class="op-card__category">Front & Back-end Web Development</span>
              <h4 class="op-card__title">MealzZap</h4>
              <p class="op-card__desc">A full-stack website built in 10 days during Le Wagon's web development bootcamp.</p>
              <span class="op-card__gallery-hint" aria-hidden="true">▶ Watch video</span>
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
            <p><b>Improved system & process efficiencies</b></p>
            <p>Restructued and replaced innefficient platforms<br>Result: 15 annual savings</p>
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

    <p class="ad-lightbox__desc">
      I was hired to design a website for Anita Diamonds, a prominent and fast-growing diamond company in Antwerp. My graphic and UI/UX design skill sets are being implemented to improve customers' experience and security. The web page is in development.
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

<!-- Lightbox: Fashion Collection SS2019 (video) -->
<div class="ad-lightbox" id="lightbox-fashion-ss2019" role="dialog" aria-modal="true" aria-label="Fashion Collection SS2019 video" hidden>
  <div class="ad-lightbox__backdrop"></div>
  <div class="ad-lightbox__panel ad-lightbox__panel--video">

    <button class="ad-lightbox__close" aria-label="Close video">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M2 2l16 16M18 2L2 18" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
    </button>

    <div class="ad-lightbox__header">
      <p class="label">Fashion Design</p>
      <h3>Fashion Collection SS2019</h3>
    </div>

    <div class="ad-lightbox__video-wrap">
      <iframe
        id="fashion-yt-iframe"
        src=""
        data-src="https://www.youtube.com/embed/DArVILkG7Ag?autoplay=1&rel=0&modestbranding=1"
        title="Fashion Collection SS2019 – Graduate London Fashion Week 2018"
        frameborder="0"
        allow="autoplay; encrypted-media; picture-in-picture"
        allowfullscreen
      ></iframe>
    </div>

    <p class="ad-lightbox__counter" style="text-align:left; color: rgba(28,28,30,0.55); font-size:0.85rem;">
      6 knitwear outfits shown at Graduate London Fashion Week 2018.
    </p>

  </div>
</div>

<script>
(function () {
  var lightbox  = document.getElementById('lightbox-fashion-ss2019');
  var backdrop  = lightbox.querySelector('.ad-lightbox__backdrop');
  var closeBtn  = lightbox.querySelector('.ad-lightbox__close');
  var iframe    = document.getElementById('fashion-yt-iframe');
  var triggers  = document.querySelectorAll('[data-lightbox="fashion-ss2019"]');
  var lastFocus = null;

  function open() {
    lastFocus = document.activeElement;
    lightbox.removeAttribute('hidden');
    document.body.style.overflow = 'hidden';
    // Load video on open (autoplay)
    iframe.src = iframe.dataset.src;
    closeBtn.focus();
  }

  function close() {
    // Stop video by clearing src before hiding
    iframe.src = '';
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

  document.addEventListener('keydown', function (e) {
    if (!lightbox.hasAttribute('hidden') && e.key === 'Escape') { close(); }
  });
})();
</script>

<!-- Lightbox: MealzZap (video) -->
<div class="ad-lightbox" id="lightbox-mealzzap" role="dialog" aria-modal="true" aria-label="MealzZap project video" hidden>
  <div class="ad-lightbox__backdrop"></div>
  <div class="ad-lightbox__panel ad-lightbox__panel--video">

    <button class="ad-lightbox__close" aria-label="Close video">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M2 2l16 16M18 2L2 18" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
    </button>

    <div class="ad-lightbox__header">
      <p class="label">Front & Back-end Web Development</p>
      <h3>MealzZap</h3>
    </div>

    <div class="ad-lightbox__video-wrap">
      <iframe
        id="mealzzap-yt-iframe"
        src=""
        data-src="https://www.youtube.com/embed/fGRx4cnRLIE?autoplay=1&rel=0&modestbranding=1"
        title="MealzZap – Le Wagon web development project"
        frameborder="0"
        allow="autoplay; encrypted-media; picture-in-picture"
        allowfullscreen
      ></iframe>
    </div>

    <p class="ad-lightbox__desc">
      10 days was the number of days we had to code a website from start to finish while studying web development with "Le Wagon". Each of us had to present a project then we had to vote which project we wanted to work on and groups were then created. My project, MealzZap, was selected and we were 3 working on it — Nina Tomic, Simon Ellicaste and me.
      <br><br>
      My main tasks were to code the front end and some back-end functionalities.
    </p>

  </div>
</div>

<script>
(function () {
  var lightbox  = document.getElementById('lightbox-mealzzap');
  var backdrop  = lightbox.querySelector('.ad-lightbox__backdrop');
  var closeBtn  = lightbox.querySelector('.ad-lightbox__close');
  var iframe    = document.getElementById('mealzzap-yt-iframe');
  var triggers  = document.querySelectorAll('[data-lightbox="mealzzap"]');
  var lastFocus = null;

  function open() {
    lastFocus = document.activeElement;
    lightbox.removeAttribute('hidden');
    document.body.style.overflow = 'hidden';
    iframe.src = iframe.dataset.src;
    closeBtn.focus();
  }

  function close() {
    iframe.src = '';
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

  document.addEventListener('keydown', function (e) {
    if (!lightbox.hasAttribute('hidden') && e.key === 'Escape') { close(); }
  });
})();
</script>

<?php
$ar_base   = get_template_directory_uri() . '/assets/images/Other Projects/Newsletter Addretail/';
$ar_images = [
  [ 'src' => $ar_base . 'De tout pour votre maison - Newsletter Trafic.jpg', 'alt' => 'Trafic newsletter – De tout pour votre maison' ],
  [ 'src' => $ar_base . 'Euro 2021 - Newsletter Trafic.jpg',                 'alt' => 'Trafic newsletter – Euro 2021' ],
  [ 'src' => $ar_base . 'Jardinage 2021 - Newsletter Trafic.jpg',            'alt' => 'Trafic newsletter – Jardinage 2021' ],
];
?>

<!-- Lightbox: AddRetail Newsletters -->
<div class="ad-lightbox" id="lightbox-addretail" role="dialog" aria-modal="true" aria-label="AddRetail newsletter gallery" hidden>
  <div class="ad-lightbox__backdrop"></div>
  <div class="ad-lightbox__panel">

    <button class="ad-lightbox__close" aria-label="Close gallery">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M2 2l16 16M18 2L2 18" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
    </button>

    <div class="ad-lightbox__header">
      <p class="label">Newsletters · HTML & CSS</p>
      <h3>AddRetail</h3>
    </div>

    <p class="ad-lightbox__desc">
      Part of my job at AddRetail consists of coding, using HTML tables and inline CSS, and designing newsletters for major companies across Belgium such as: Trafic, Club, Planet Parfum, Deutsche Bank and more.
      <br><br>
      Find below some of the projects I have completed during the previous months.
    </p>

    <div class="ad-lightbox__carousel">
      <div class="ad-lightbox__track">
        <?php foreach ( $ar_images as $i => $img ) : ?>
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
      <?php foreach ( $ar_images as $i => $img ) : ?>
        <span class="ad-lightbox__dot <?php echo $i === 0 ? 'is-active' : ''; ?>"></span>
      <?php endforeach; ?>
    </div>

    <p class="ad-lightbox__counter" aria-live="polite">
      <span class="ad-lightbox__current">1</span> / <?php echo count( $ar_images ); ?>
    </p>

  </div>
</div>

<script>
(function () {
  var lightbox  = document.getElementById('lightbox-addretail');
  var backdrop  = lightbox.querySelector('.ad-lightbox__backdrop');
  var closeBtn  = lightbox.querySelector('.ad-lightbox__close');
  var prevBtn   = lightbox.querySelector('.ad-lightbox__nav--prev');
  var nextBtn   = lightbox.querySelector('.ad-lightbox__nav--next');
  var slides    = lightbox.querySelectorAll('.ad-lightbox__slide');
  var dots      = lightbox.querySelectorAll('.ad-lightbox__dot');
  var counter   = lightbox.querySelector('.ad-lightbox__current');
  var triggers  = document.querySelectorAll('[data-lightbox="addretail"]');
  var current   = 0;
  var lastFocus = null;

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

<?php
$cc_base    = get_template_directory_uri() . '/assets/images/Other Projects/Cricket & Co/';
$cc_posters = [
  [ 'src' => $cc_base . 'CCO golf annonce.jpg',          'alt' => 'Cricket &amp; Co – golf event announcement' ],
  [ 'src' => $cc_base . 'INVITATION AALSt fr.jpg',       'alt' => 'Cricket &amp; Co – event invitation Aalst' ],
  [ 'src' => $cc_base . 'Invitation balankenberge.jpg',  'alt' => 'Cricket &amp; Co – event invitation Blankenberge' ],
];
$cc_cat_base = $cc_base . 'Catalogue/';
$cc_catalogue = [
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged).jpg',     'alt' => 'Cricket &amp; Co SS2019 catalogue – page 1' ],
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged) 2.jpg',   'alt' => 'Cricket &amp; Co SS2019 catalogue – page 2' ],
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged) 3.jpg',   'alt' => 'Cricket &amp; Co SS2019 catalogue – page 3' ],
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged) 4.jpg',   'alt' => 'Cricket &amp; Co SS2019 catalogue – page 4' ],
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged) 5.jpg',   'alt' => 'Cricket &amp; Co SS2019 catalogue – page 5' ],
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged) 6.jpg',   'alt' => 'Cricket &amp; Co SS2019 catalogue – page 6' ],
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged) 7.jpg',   'alt' => 'Cricket &amp; Co SS2019 catalogue – page 7' ],
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged) 8.jpg',   'alt' => 'Cricket &amp; Co SS2019 catalogue – page 8' ],
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged) 9.jpg',   'alt' => 'Cricket &amp; Co SS2019 catalogue – page 9' ],
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged) 10.jpg',  'alt' => 'Cricket &amp; Co SS2019 catalogue – page 10' ],
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged) 11.jpg',  'alt' => 'Cricket &amp; Co SS2019 catalogue – page 11' ],
  [ 'src' => $cc_cat_base . 'catalogue SS2019 (dragged) 12.jpg',  'alt' => 'Cricket &amp; Co SS2019 catalogue – page 12' ],
];
?>

<!-- Lightbox: Cricket & Co -->
<div class="ad-lightbox ad-lightbox--wide" id="lightbox-cricket" role="dialog" aria-modal="true" aria-label="Cricket &amp; Co project gallery" hidden>
  <div class="ad-lightbox__backdrop"></div>
  <div class="ad-lightbox__panel">

    <button class="ad-lightbox__close" aria-label="Close gallery">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M2 2l16 16M18 2L2 18" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/></svg>
    </button>

    <div class="ad-lightbox__header">
      <p class="label">Graphic Design · Production</p>
      <h3>Cricket &amp; Co</h3>
    </div>

    <p class="ad-lightbox__desc">
      At Cricket &amp; Co I worked across two distinct areas. On the production side, I was responsible for ensuring collections arrived on time with correct sizing and specifications, communicating with manufacturers in Turkey, India and China.<br><br>
      As a graphic designer, I created collection catalogues for print, lookbooks for the internal sales team, as well as invitations and promotional posters for stores and events.
    </p>

    <!-- Carousel 1: Posters & Graphic Design -->
    <p class="cc-carousel-label">Graphic Design — Posters &amp; Invitations</p>
    <div class="ad-lightbox__carousel" id="cc-carousel-posters">
      <div class="ad-lightbox__track">
        <?php foreach ( $cc_posters as $i => $img ) : ?>
          <div class="ad-lightbox__slide" <?php echo $i === 0 ? 'aria-current="true"' : ''; ?>>
            <img src="<?php echo esc_url( $img['src'] ); ?>" alt="<?php echo $img['alt']; ?>">
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
      <?php foreach ( $cc_posters as $i => $img ) : ?>
        <span class="ad-lightbox__dot <?php echo $i === 0 ? 'is-active' : ''; ?>"></span>
      <?php endforeach; ?>
    </div>
    <p class="ad-lightbox__counter" aria-live="polite">
      <span class="cc-posters-current">1</span> / <?php echo count( $cc_posters ); ?>
    </p>

    <hr class="cc-divider">

    <!-- Book viewer: SS2019 Collection Catalogue -->
    <p class="cc-carousel-label">SS2019 Collection Catalogue</p>
    <div class="catalogue-book" id="cc-book">
      <div class="book-stage">

        <!-- View 0: Cover — page 1 alone -->
        <div class="book-spread book-spread--single is-current" data-view="0">
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[0]['src'] ); ?>" alt="<?php echo $cc_catalogue[0]['alt']; ?>" loading="lazy">
          </div>
        </div>

        <!-- View 1: Spread — pages 2 & 3 -->
        <div class="book-spread" data-view="1">
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[1]['src'] ); ?>" alt="<?php echo $cc_catalogue[1]['alt']; ?>" loading="lazy">
          </div>
          <div class="book-spine" aria-hidden="true"></div>
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[2]['src'] ); ?>" alt="<?php echo $cc_catalogue[2]['alt']; ?>" loading="lazy">
          </div>
        </div>

        <!-- View 2: Spread — pages 4 & 5 -->
        <div class="book-spread" data-view="2">
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[3]['src'] ); ?>" alt="<?php echo $cc_catalogue[3]['alt']; ?>" loading="lazy">
          </div>
          <div class="book-spine" aria-hidden="true"></div>
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[4]['src'] ); ?>" alt="<?php echo $cc_catalogue[4]['alt']; ?>" loading="lazy">
          </div>
        </div>

        <!-- View 3: Spread — pages 6 & 7 -->
        <div class="book-spread" data-view="3">
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[5]['src'] ); ?>" alt="<?php echo $cc_catalogue[5]['alt']; ?>" loading="lazy">
          </div>
          <div class="book-spine" aria-hidden="true"></div>
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[6]['src'] ); ?>" alt="<?php echo $cc_catalogue[6]['alt']; ?>" loading="lazy">
          </div>
        </div>

        <!-- View 4: Spread — pages 8 & 9 -->
        <div class="book-spread" data-view="4">
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[7]['src'] ); ?>" alt="<?php echo $cc_catalogue[7]['alt']; ?>" loading="lazy">
          </div>
          <div class="book-spine" aria-hidden="true"></div>
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[8]['src'] ); ?>" alt="<?php echo $cc_catalogue[8]['alt']; ?>" loading="lazy">
          </div>
        </div>

        <!-- View 5: Spread — pages 10 & 11 -->
        <div class="book-spread" data-view="5">
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[9]['src'] ); ?>" alt="<?php echo $cc_catalogue[9]['alt']; ?>" loading="lazy">
          </div>
          <div class="book-spine" aria-hidden="true"></div>
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[10]['src'] ); ?>" alt="<?php echo $cc_catalogue[10]['alt']; ?>" loading="lazy">
          </div>
        </div>

        <!-- View 6: Back cover — page 12 alone -->
        <div class="book-spread book-spread--single" data-view="6">
          <div class="book-page">
            <img src="<?php echo esc_url( $cc_catalogue[11]['src'] ); ?>" alt="<?php echo $cc_catalogue[11]['alt']; ?>" loading="lazy">
          </div>
        </div>

        <!-- Flip leaf: JS-driven 3D page-turn overlay -->
        <div class="book-flip-leaf" id="cc-flip-leaf" aria-hidden="true">
          <div class="book-flip-leaf__front"></div>
          <div class="book-flip-leaf__back"></div>
        </div>

      </div><!-- /.book-stage -->

      <div class="book-controls">
        <button class="book-nav book-nav--prev" id="cc-book-prev" aria-label="Previous catalogue page" disabled>
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M13 3l-7 7 7 7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <span class="book-counter" aria-live="polite">
          <span id="cc-book-current">1</span>&thinsp;/&thinsp;7
        </span>
        <button class="book-nav book-nav--next" id="cc-book-next" aria-label="Next catalogue page">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M7 3l7 7-7 7" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </div>
    </div><!-- /.catalogue-book -->

  </div>
</div>

<script>
(function () {
  var lightbox  = document.getElementById('lightbox-cricket');
  var backdrop  = lightbox.querySelector('.ad-lightbox__backdrop');
  var closeBtn  = lightbox.querySelector('.ad-lightbox__close');
  var triggers  = document.querySelectorAll('[data-lightbox="cricket"]');
  var lastFocus = null;

  // Build an independent carousel controller for each carousel block
  function makeCarousel(carouselEl, counterEl) {
    var slides  = carouselEl.querySelectorAll('.ad-lightbox__slide');
    var dots    = carouselEl.parentElement.querySelectorAll('.ad-lightbox__dot');
    var current = 0;

    function goTo(n) {
      slides[current].removeAttribute('aria-current');
      dots[current].classList.remove('is-active');
      current = (n + slides.length) % slides.length;
      slides[current].setAttribute('aria-current', 'true');
      dots[current].classList.add('is-active');
      counterEl.textContent = current + 1;
    }

    carouselEl.querySelector('.ad-lightbox__nav--prev').addEventListener('click', function () { goTo(current - 1); });
    carouselEl.querySelector('.ad-lightbox__nav--next').addEventListener('click', function () { goTo(current + 1); });

    return { goTo: goTo };
  }

  var postersCarousel  = makeCarousel(
    lightbox.querySelector('#cc-carousel-posters'),
    lightbox.querySelector('.cc-posters-current')
  );
  // Book viewer controller for catalogue
  var bookSpreads  = Array.from(lightbox.querySelectorAll('#cc-book .book-spread'));
  var bookTotal    = bookSpreads.length;
  var bookCurrent  = 0;
  var bookAnimating = false;
  var bookCurrentEl = lightbox.querySelector('#cc-book-current');
  var bookPrevBtn   = lightbox.querySelector('#cc-book-prev');
  var bookNextBtn   = lightbox.querySelector('#cc-book-next');

  function bookGoTo(n, dir) {
    if (bookAnimating || n === bookCurrent || n < 0 || n >= bookTotal) return;
    bookAnimating = true;

    var leaf      = lightbox.querySelector('#cc-flip-leaf');
    var leafFront = leaf.querySelector('.book-flip-leaf__front');
    var current   = bookSpreads[bookCurrent];
    var next      = bookSpreads[n];
    var isSingle  = current.classList.contains('book-spread--single');

    // Find the page that turns and copy its image to the leaf front face
    var pages = current.querySelectorAll('.book-page');
    var turningPage = dir > 0 ? pages[pages.length - 1] : pages[0];
    var img = turningPage ? turningPage.querySelector('img') : null;
    leafFront.style.backgroundImage = img ? 'url("' + img.src + '")' : '';

    // Position leaf over the turning page
    if (isSingle) {
      leaf.style.left            = '25%';
      leaf.style.width           = '50%';
      leaf.style.transformOrigin = dir > 0 ? '0% 50%' : '100% 50%';
    } else if (dir > 0) {
      leaf.style.left            = '50%';
      leaf.style.width           = '50%';
      leaf.style.transformOrigin = '0% 50%';
    } else {
      leaf.style.left            = '0%';
      leaf.style.width           = '50%';
      leaf.style.transformOrigin = '100% 50%';
    }

    // Stack: current on top (z-index 2), next underneath (z-index 1)
    next.classList.add('is-visible');

    // Show leaf, then start animation on next two frames (ensures layout is applied)
    leaf.classList.add('is-active');
    requestAnimationFrame(function () {
      requestAnimationFrame(function () {
        leaf.classList.add(dir > 0 ? 'is-flipping-fwd' : 'is-flipping-bwd');
      });
    });

    // Mid-point (~310ms): leaf is edge-on — remove current spread so next shows through
    setTimeout(function () {
      current.classList.remove('is-current');
    }, 360);

    // End (~740ms): clean up
    setTimeout(function () {
      leaf.classList.remove('is-active', 'is-flipping-fwd', 'is-flipping-bwd');
      leafFront.style.backgroundImage = '';
      next.classList.remove('is-visible');
      next.classList.add('is-current');
      bookCurrent = n;
      bookCurrentEl.textContent = bookCurrent + 1;
      bookPrevBtn.disabled = bookCurrent === 0;
      bookNextBtn.disabled = bookCurrent === bookTotal - 1;
      bookAnimating = false;
    }, 740);
  }

  bookPrevBtn.addEventListener('click', function () { bookGoTo(bookCurrent - 1, -1); });
  bookNextBtn.addEventListener('click', function () { bookGoTo(bookCurrent + 1, 1); });

  function bookReset() {
    bookAnimating = false;
    var leaf = lightbox.querySelector('#cc-flip-leaf');
    leaf.classList.remove('is-active', 'is-flipping-fwd', 'is-flipping-bwd');
    bookSpreads.forEach(function (s, i) {
      s.classList.toggle('is-current', i === 0);
      s.classList.remove('is-visible');
    });
    bookCurrent = 0;
    bookCurrentEl.textContent = '1';
    bookPrevBtn.disabled = true;
    bookNextBtn.disabled = bookTotal <= 1;
  }

  function open() {
    lastFocus = document.activeElement;
    lightbox.removeAttribute('hidden');
    document.body.style.overflow = 'hidden';
    postersCarousel.goTo(0);
    bookReset();
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

  document.addEventListener('keydown', function (e) {
    if (lightbox.hasAttribute('hidden')) return;
    if (e.key === 'Escape') { close(); }
  });
})();
</script>

<?php get_footer(); ?>
