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
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Pauline Noel.jpeg' ); ?>"
            alt="Portrait of Pauline Noël, UI/UX Designer"
            class="about-hero__photo"
          >
        </div>
      </div>

      <div class="about-hero__text-col">
        <span class="hero-kicker">Based in Brussels, Belgium</span>
        <h1>Hi, I'm Pauline, a <span class="highlight italic">UI/UX Designer</span> and Front-End Developer.</h1>
        <p class="about-hero__intro">I have 5+ years of experience in user research, user journeys and flow diagrams, prototyping, front-end development and CMS management. I translate business requirements into accessible, production-ready interfaces across enterprise-scale web platforms, and I'm comfortable owning projects end to end, from user needs analysis through launch.</p>
        <div class="about-hero__actions">
          <a href="mailto:info@paulinedesigned.it" class="primary-btn btn">Work with me</a>
          <a href="<?php echo esc_url( home_url('/projects/') ); ?>" class="secondary-btn btn">View my work</a>
        </div>
        <div class="about-hero__langs">
          <span class="about-lang-pill"><span aria-hidden="true">🇫🇷</span> French, native</span>
          <span class="about-lang-pill"><span aria-hidden="true">🇬🇧</span> English (C2)</span>
          <span class="about-lang-pill"><span aria-hidden="true">🇧🇪</span> Dutch (B1)</span>
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
        <p class="skill-group__heading">UX/UI Design</p>
        <div class="skill-tags">
          <span class="skill-tag">User Research</span>
          <span class="skill-tag">User Personas</span>
          <span class="skill-tag">User Journeys</span>
          <span class="skill-tag">Flow Diagrams</span>
          <span class="skill-tag">Information Architecture</span>
          <span class="skill-tag">Wireframing</span>
          <span class="skill-tag">Mock-ups & GUIs</span>
          <span class="skill-tag">Low to High Fidelity Prototyping</span>
          <span class="skill-tag">Heuristic Evaluations</span>
          <span class="skill-tag">Design Thinking Workshops</span>
          <span class="skill-tag">Usability Testing (participation)</span>
          <span class="skill-tag">Front-End Specifications</span>
          <span class="skill-tag">Mobile-First & Responsive Design</span>
          <span class="skill-tag">Figma</span>
          <span class="skill-tag">Adobe XD</span>
          <span class="skill-tag">Miro</span>
        </div>
      </div>

      <div class="skill-group">
        <p class="skill-group__heading">Front-End Development</p>
        <div class="skill-tags">
          <span class="skill-tag">HTML</span>
          <span class="skill-tag">CSS (BEM)</span>
          <span class="skill-tag">JavaScript</span>
          <span class="skill-tag">Bootstrap</span>
        </div>
      </div>

      <div class="skill-group">
        <p class="skill-group__heading">CMS Platforms</p>
        <div class="skill-tags">
          <span class="skill-tag">Magnolia CMS</span>
          <span class="skill-tag">WordPress</span>
          <span class="skill-tag">Sitecore (onboarding)</span>
        </div>
      </div>

      <div class="skill-group">
        <p class="skill-group__heading">Quality & Performance</p>
        <div class="skill-tags">
          <span class="skill-tag">Accessibility (WCAG)</span>
          <span class="skill-tag">Technical SEO</span>
          <span class="skill-tag">Adobe & Google Tag Management</span>
          <span class="skill-tag">QA/Smoke Testing</span>
        </div>
      </div>

      <div class="skill-group">
        <p class="skill-group__heading">Graphic Design & Video</p>
        <div class="skill-tags">
          <span class="skill-tag">Adobe Photoshop</span>
          <span class="skill-tag">Adobe Illustrator</span>
          <span class="skill-tag">Adobe InDesign</span>
          <span class="skill-tag">Brand Identity</span>
          <span class="skill-tag">Print & Digital Collateral</span>
          <span class="skill-tag">Adobe Premiere Pro</span>
        </div>
      </div>

      <div class="skill-group">
        <p class="skill-group__heading">AI Tools</p>
        <div class="skill-tags">
          <span class="skill-tag">Claude</span>
          <span class="skill-tag">ChatGPT</span>
          <span class="skill-tag">Bevel</span>
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
          <span class="exp-item__date">Oct 2023 - Present</span>
          <div class="exp-item__dot"></div>
        </div>
        <div class="exp-item__content">
          <div class="exp-item__header">
            <h3 class="exp-item__role">Webmaster, UI/UX Designer</h3>
            <span class="exp-item__company">Careers International</span>
          </div>
          <ul class="exp-item__list">
            <li>Full web ownership for enterprise clients</li>
            <li>Single technical point of contact for business stakeholders within an international team, translating requirements into web solutions and technical specifications</li>
            <li>Prepare and facilitate design thinking workshops with stakeholders; present solutions and concepts</li>
            <li>Led complete rebranding of two websites, covering front-end development, SEO strategy and accessibility compliance</li>
            <li>For the website redesign: created a user persona, flow diagrams and user journeys, defined the information architecture, and designed mock-ups and GUIs</li>
            <li>Perform heuristic evaluations and document front-end specifications for components and templates</li>
            <li>Manage CMS content updates, component creation and adaptation, personalisation, and quality/smoke testing</li>
            <li>Act as quality gatekeeper: enforce consistency standards and apply quick fixes directly</li>
            <li>Create social media content (Adobe Suite): imagery, mockups and event posters</li>
          </ul>
          <div class="exp-item__clients">
            <span class="exp-client-tag">AXA France</span>
            <span class="exp-client-tag">Euroclear</span>
            <span class="exp-client-tag">EIB</span>
            <span class="exp-client-tag">VW Group</span>
            <span class="exp-client-tag">Allianz</span>
            <span class="exp-client-tag">Roland Berger</span>
            <span class="exp-client-tag">Mondelez</span>
            <span class="exp-client-tag">ENGIE</span>
          </div>
        </div>
      </div>

      <div class="exp-item">
        <div class="exp-item__meta">
          <span class="exp-item__date">Jan 2020 - Present</span>
          <div class="exp-item__dot"></div>
        </div>
        <div class="exp-item__content">
          <div class="exp-item__header">
            <h3 class="exp-item__role">UI/UX Designer & Front-End Developer</h3>
            <span class="exp-item__company">PND, Independent Design Studio</span>
          </div>
          <ul class="exp-item__list">
            <li>Run an independent design and development studio, owning client web projects end to end from brief to launch</li>
            <li>Deliver full-cycle websites: UX research, wireframing, UI design, front-end development and launch</li>
            <li>Gather requirements, translate business goals into web solutions, and iterate based on client feedback</li>
            <li>Design brand identity assets, flyers, cards and booklets for print and digital communication</li>
            <li>Filmed, voiced and edited (Adobe Premiere Pro) a promotional video for a €2.7M villa, produced for a real estate Instagram account</li>
          </ul>
          <div class="exp-item__clients">
            <span class="exp-client-tag">Flexina</span>
            <span class="exp-client-tag">Stejac</span>
            <span class="exp-client-tag">Anita Diamonds</span>
            <span class="exp-client-tag">Ne-ma</span>
            <span class="exp-client-tag">Dgenious</span>
            <span class="exp-client-tag">Cricket & Co</span>
          </div>
        </div>
      </div>

      <div class="exp-item">
        <div class="exp-item__meta">
          <span class="exp-item__date">Jul 2021 - Sep 2023</span>
          <div class="exp-item__dot"></div>
        </div>
        <div class="exp-item__content">
          <div class="exp-item__header">
            <h3 class="exp-item__role">Web Integrator & Publisher</h3>
            <span class="exp-item__company">Proximus</span>
          </div>
          <ul class="exp-item__list">
            <li>Built and maintained responsive pages in Magnolia CMS following design specifications and accessibility standards</li>
            <li>Ensured WCAG compliance across HTML, configuration and content management on a major telecom website</li>
            <li>Participated in usability tests alongside a Senior UX designer</li>
            <li>Performed heuristic evaluations and documented front-end specifications, including onboarding documentation</li>
            <li>Collaborated in agile release cycles within an international, cross-functional team</li>
            <li>Optimised work distribution across multiple teams, acting as operational hub for web deliverables</li>
          </ul>
        </div>
      </div>

      <div class="exp-item">
        <div class="exp-item__meta">
          <span class="exp-item__date">Jan 2021 - Jul 2021</span>
          <div class="exp-item__dot"></div>
        </div>
        <div class="exp-item__content">
          <div class="exp-item__header">
            <h3 class="exp-item__role">Web Designer</h3>
            <span class="exp-item__company">AddRetail</span>
          </div>
          <ul class="exp-item__list">
            <li>Coded HTML newsletters (inline CSS, tables) for clients including Club, Planet Parfum, Trafic and Deutsche Bank</li>
            <li>Designed and developed websites; created medium-to-high fidelity wireframes and prototypes for high-profile clients</li>
          </ul>
        </div>
      </div>

      <div class="exp-item">
        <div class="exp-item__meta">
          <span class="exp-item__date">Jan 2019 - Jan 2020</span>
          <div class="exp-item__dot"></div>
        </div>
        <div class="exp-item__content">
          <div class="exp-item__header">
            <h3 class="exp-item__role">Fashion Coordinator</h3>
            <span class="exp-item__company">Cricket & Co</span>
          </div>
          <ul class="exp-item__list">
            <li>Led fashion and packaging design</li>
            <li>Managed production: created garment technical packs, coordinated with manufacturers, maintained production files and tracking spreadsheets</li>
            <li>Designed promotional posters published in national newspapers and on the company's social media platforms</li>
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
            <span class="edu-item__year">2015 - 2018</span>
            <div>
              <p class="edu-item__name">Bachelor of Arts</p>
              <p class="edu-item__school">Edinburgh College of Art</p>
            </div>
          </div>
          <div class="edu-item">
            <span class="edu-item__year">2014 - 2015</span>
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
        <p class="dark-mode-txt">Whether it's a full redesign, a new build or just an initial chat, I'd love to hear about your project.</p>
        <a href="mailto:info@paulinedesigned.it" class="primary-btn btn">Get in touch</a>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
