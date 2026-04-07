<?php
/**
 * Template Name: About Me
 */
get_header(); ?>

<main id="main-content" class="about-page">

  <!-- HERO -->
  <section class="about-hero container">
    <div class="about-hero__inner">

      <div class="about-hero__photo-col">
        <div class="about-hero__photo-wrap">
          <div class="about-hero__photo-bg"></div>
          <img
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pauline-Noel-Photo.jpg' ); ?>"
            alt="Portrait of Pauline Noël, UI/UX Designer"
            class="about-hero__photo"
          >
        </div>
      </div>

      <div class="about-hero__text-col">
        <span class="hero-kicker">Based in Brussels, Belgium</span>
        <h1>Hi, I'm Pauline — <span class="highlight italic">UI/UX Designer</span> & Front-End Developer.</h1>
        <p class="about-hero__intro">I help companies turn complex ideas into clear, high-performing digital experiences. From UX research and strategy through to pixel-perfect design and WordPress builds — I work across the full stack of a project, end to end.</p>
        <div class="about-hero__actions">
          <a href="mailto:paulinenoeldesigns@gmail.com" class="primary-btn btn">Work with me</a>
          <a href="<?php echo esc_url( home_url('/projects/') ); ?>" class="secondary-btn btn">View my work</a>
        </div>
        <div class="about-hero__langs">
          <span class="about-lang-pill"><span aria-hidden="true">🇫🇷</span> French — Native</span>
          <span class="about-lang-pill"><span aria-hidden="true">🇬🇧</span> English — Fluent</span>
          <span class="about-lang-pill"><span aria-hidden="true">🇧🇪</span> Dutch — B1</span>
        </div>
      </div>

    </div>
  </section>

  <!-- SKILLS -->
  <section class="about-skills container">
    <div class="section-shell2">
      <div class="section-intro">
        <p class="label">What I bring to the table</p>
        <h2>Skills & Tools</h2>
      </div>
    </div>
    <div class="about-skills__grid">

      <div class="skill-group">
        <p class="skill-group__heading">Design</p>
        <div class="skill-tags">
          <span class="skill-tag">UI/UX Design</span>
          <span class="skill-tag">UX Research</span>
          <span class="skill-tag">Low–High Fidelity Prototyping</span>
          <span class="skill-tag">Wireframing</span>
          <span class="skill-tag">User Flows</span>
          <span class="skill-tag">Design Systems</span>
        </div>
      </div>

      <div class="skill-group">
        <p class="skill-group__heading">Development</p>
        <div class="skill-tags">
          <span class="skill-tag">HTML</span>
          <span class="skill-tag">CSS & BEM</span>
          <span class="skill-tag">JavaScript</span>
          <span class="skill-tag">Bootstrap</span>
          <span class="skill-tag">WordPress</span>
          <span class="skill-tag">SEO</span>
          <span class="skill-tag">Adobe & Google Tags</span>
        </div>
      </div>

      <div class="skill-group">
        <p class="skill-group__heading">Tools</p>
        <div class="skill-tags">
          <span class="skill-tag">Figma</span>
          <span class="skill-tag">Adobe XD</span>
          <span class="skill-tag">Adobe Photoshop</span>
          <span class="skill-tag">Adobe Illustrator</span>
          <span class="skill-tag">Adobe InDesign</span>
          <span class="skill-tag">Miro</span>
        </div>
      </div>

    </div>
  </section>

  <!-- EXPERIENCE -->
  <section class="about-experience container">
    <div class="section-shell2">
      <div class="section-intro">
        <p class="label">Where I've worked</p>
        <h2>Work Experience</h2>
      </div>
    </div>

    <div class="experience-timeline">

      <div class="exp-item">
        <div class="exp-item__meta">
          <span class="exp-item__date">2023 — Present</span>
          <div class="exp-item__dot"></div>
        </div>
        <div class="exp-item__content">
          <div class="exp-item__header">
            <h3 class="exp-item__role">Webmaster & UI/UX Designer</h3>
            <span class="exp-item__company">Careers International</span>
          </div>
          <ul class="exp-item__list">
            <li>Web UI/UX design and research</li>
            <li>Front-end development and web strategy</li>
            <li>WordPress development and SEO</li>
            <li>Adobe Suite: social media content, mockups and event posters</li>
            <li>Complete rebranding of two websites</li>
          </ul>
          <div class="exp-item__clients">
            <span class="exp-client-tag">VW Group</span>
            <span class="exp-client-tag">Allianz</span>
            <span class="exp-client-tag">Roland Berger</span>
            <span class="exp-client-tag">Euroclear</span>
            <span class="exp-client-tag">EIB</span>
          </div>
        </div>
      </div>

      <div class="exp-item">
        <div class="exp-item__meta">
          <span class="exp-item__date">2021 — Present</span>
          <div class="exp-item__dot"></div>
        </div>
        <div class="exp-item__content">
          <div class="exp-item__header">
            <h3 class="exp-item__role">UI/UX Designer</h3>
            <span class="exp-item__company">PND — Freelance</span>
          </div>
          <ul class="exp-item__list">
            <li>Web UI/UX design and research</li>
            <li>Graphic design: flyers, cards and booklets</li>
            <li>Frontend web developer</li>
          </ul>
          <div class="exp-item__clients">
            <span class="exp-client-tag">Flexina</span>
            <span class="exp-client-tag">Anita Diamonds</span>
            <span class="exp-client-tag">Ne-ma</span>
            <span class="exp-client-tag">Dgenious</span>
            <span class="exp-client-tag">Cricket & Co</span>
          </div>
        </div>
      </div>

      <div class="exp-item">
        <div class="exp-item__meta">
          <span class="exp-item__date">2021 — 2023</span>
          <div class="exp-item__dot"></div>
        </div>
        <div class="exp-item__content">
          <div class="exp-item__header">
            <h3 class="exp-item__role">Web Integrator & Publisher</h3>
            <span class="exp-item__company">Proximus</span>
          </div>
          <ul class="exp-item__list">
            <li>Built responsive pages in Magnolia CMS to design specs</li>
            <li>Ensured website accessibility, HTML and content management</li>
            <li>Produced documentation for onboarding and training</li>
            <li>Collaborated in an agile team through the full release cycle</li>
            <li>Streamlined work distribution across multiple teams</li>
          </ul>
        </div>
      </div>

      <div class="exp-item">
        <div class="exp-item__meta">
          <span class="exp-item__date">2021</span>
          <div class="exp-item__dot"></div>
        </div>
        <div class="exp-item__content">
          <div class="exp-item__header">
            <h3 class="exp-item__role">Web Designer</h3>
            <span class="exp-item__company">AddRetail</span>
          </div>
          <ul class="exp-item__list">
            <li>Coded HTML newsletters for Club, Planet Parfum, Trafic, Deutsche Bank</li>
            <li>Designed and built websites from scratch</li>
            <li>Created medium to high fidelity prototypes and wireframes for high-profile clients</li>
          </ul>
        </div>
      </div>

      <div class="exp-item">
        <div class="exp-item__meta">
          <span class="exp-item__date">2019 — 2020</span>
          <div class="exp-item__dot"></div>
        </div>
        <div class="exp-item__content">
          <div class="exp-item__header">
            <h3 class="exp-item__role">Fashion Coordinator</h3>
            <span class="exp-item__company">Cricket & Co</span>
          </div>
          <ul class="exp-item__list">
            <li>Fashion and packaging design</li>
            <li>Garment technical packs, production management</li>
            <li>Promotional graphic design published in press and social media</li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <!-- EDUCATION -->
  <section class="about-education container">
    <div class="about-edu-lang-grid">

      <div>
        <p class="label">Academic background</p>
        <h2>Education</h2>
        <div class="edu-list">
          <div class="edu-item">
            <span class="edu-item__year">2020</span>
            <div>
              <p class="edu-item__name">Web Development Bootcamp</p>
              <p class="edu-item__school">Le Wagon</p>
            </div>
          </div>
          <div class="edu-item">
            <span class="edu-item__year">2020</span>
            <div>
              <p class="edu-item__name">UX Design Diploma</p>
              <p class="edu-item__school">UX Design Institute</p>
            </div>
          </div>
          <div class="edu-item">
            <span class="edu-item__year">2015 — 2018</span>
            <div>
              <p class="edu-item__name">Bachelor of Arts</p>
              <p class="edu-item__school">Edinburgh College of Art</p>
            </div>
          </div>
          <div class="edu-item">
            <span class="edu-item__year">2014 — 2015</span>
            <div>
              <p class="edu-item__name">Foundation Diploma</p>
              <p class="edu-item__school">Arts University of Bournemouth</p>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA card -->
      <div class="about-cta-card">
        <p class="label-dark">Ready to collaborate?</p>
        <h2 class="dark-mode-txt">Let's build something <span class="highlight italic">great</span> together.</h2>
        <p class="dark-mode-txt">Whether it's a full redesign, a new build, or just a conversation — I'd love to hear about your project.</p>
        <a href="mailto:paulinenoeldesigns@gmail.com" class="primary-btn btn">Get in touch</a>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
