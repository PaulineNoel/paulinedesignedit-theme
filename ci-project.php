<?php
/**
 * Template Name: CI Project
 */
get_header(); ?>
<main id="main-content" class="project">
    <section id="hero" class="container">
        <div class="project-hero-title">
            <p class="hero-kicker">Case Study</p>
            <h1>Reimagining Careers International: <br>
            <span class="highlight italic">From Brand to Digital Experience</span></h1>
            <p class="subtitle">I rebuilt Careers International from the ground up: new brand, new UX, and a custom WordPress build that the team can manage themselves.</p>
        </div>
        <div class="project-hero-meta section-shell flex-wrap">
            <div class="meta-item">
                <div class="meta-label">My Role</div>
                <div class="meta-value">UX/UI Designer &amp; Front-End Developer</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Scope</div>
                <div class="meta-value">Brand Identity · UX/UI · WordPress Build</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Tools</div>
                <div class="meta-value">Miro · Adobe XD · HTML · CSS · WordPress · Elementor · SEO · Google Analytics</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Year</div>
                <!-- TODO: confirm the real year(s). Page says 2023–2024 but was published in 2026. -->
                <div class="meta-value">2023 - 2024</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Industry</div>
                <div class="meta-value">Recruitment &amp; Career Services</div>
            </div>
        </div>
        <div class="project-tags-wrapper flex-wrap">
            <div class="project-card-tag">Web Strategy</div>
            <div class="project-card-tag">UI/UX</div>
            <div class="project-card-tag">HTML</div>
            <div class="project-card-tag">CSS</div>
            <div class="project-card-tag">WordPress</div>
            <div class="project-card-tag">Elementor</div>
            <div class="project-card-tag">SEO</div>
        </div>
        <img src="" alt="">
        <a class="btn primary-btn" target="_blank" rel="noopener noreferrer" href="https://careersinternational.com">Visit the website</a>
    </section>
    <section id="overview" class="container">
        <div class="two-column-grid">
            <div class="project-overview-content">
                <p class="label">01. Project Overview</p>
                <h2>A platform built to connect people with purpose</h2>
                <p>
                    Careers International is a recruitment and events company. The brief was to rebuild the brand and deliver a website that the team could manage themselves. I led the work from research and structure through design, front-end build, SEO and accessibility.
                </p>
            </div>
            <div class="img-placeholder project-overview-img">
                <img class="img-320" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/CI Project/TWT Old design mockup.png" alt="The old website of Careers international">
                <!-- <div class="img-placeholder ph-md" style="height: 100%;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg>
                </div> -->
                <span>Previous Website Design</span>
            </div>
        </div>
    </section>
    <section id="challenge" class="container">
        <div class="section-shell-dark">
            <div class="project-challenge-content">
                <p class="label-dark"> 02. The Challenge</p>
                <h2 class="dark-mode-txt">Turning complexity into clarity</h2>
                <p class="dark-mode-txt">The existing platform had grown organically without a coherent strategy, leaving a fragmented experience for both candidates and employers. We needed to untangle years of accumulated decisions and start fresh, without losing the trust the brand had already built.</p>
            </div>

            <div class="two-column-grid">
                <div class="challenge-card">
                    <div class="num">01</div>
                    <h3 class="dark-mode-txt">Outdated Visual Identity</h3>
                    <p class="dark-mode-txt">The brand lacked a consistent, up-to-date visual language.</p>
                </div>
                <div class="challenge-card">
                    <div class="num">02</div>
                    <h3 class="dark-mode-txt">Poor Information Architecture</h3>
                    <p class="dark-mode-txt">Candidates and employers shared one navigation.</p>
                </div>
                <div class="challenge-card">
                    <div class="num">03</div>
                    <h3 class="dark-mode-txt">Low Conversion</h3>
                    <p class="dark-mode-txt">Calls to action were buried and value propositions unclear.</p>
                </div>
                <div class="challenge-card">
                    <div class="num">04</div>
                    <h3 class="dark-mode-txt">Hard-to-Maintain Site</h3>
                    <p class="dark-mode-txt">Content updates depended on a developer.</p>
                </div>
            </div>
            <img src="" alt="">
        </div>
    </section>
    <section id="research" class="container">
        <div class="project-research-content">
            <p class="label">03. UX Research & Insights</p>
            <h2>Understanding the business and its audiences</h2>
            <p>I combined a Google Analytics review (drop-offs, exit pages, traffic sources), internal records, and a competitive benchmark with input from stakeholders, to understand how candidates and employers used the site and where it fell short.</p>
        </div>
        <div class="three-column-grid">
            <div class="info-card">
                <div class="research-icon" style="background: #fff0e8;">📊</div>
                <h3>Analytics Review</h3>
                <p>Drop-offs, exit pages and traffic sources.</p>
            </div>
            <div class="research-card">
                <div class="research-icon" style="background: var(--color-blue);">🗂️</div>
                <h3>Internal Records</h3>
                <p>What the business already knew about its candidates and clients.</p>
            </div>
            <div class="research-card">
                <div class="research-icon" style="background: #FDE8F0;">🔍</div>
                <h3>Competitive Benchmarking</h3>
                <p>How comparable recruitment sites structure navigation and calls to action.</p>
            </div>
            <div class="research-card">
                <div class="research-icon" style="background: #fff0e8;">🤝</div>
                <h3>Stakeholder Input</h3>
                <p>Goals and priorities gathered with the business.</p>
            </div>
        </div>
        <div class="two-column-grid">
            <img src="" alt="">
            <img src="" alt="">
        </div>
        <div class="section-shell-pink">
            <p class="label-action">Key Insights</p>
            <h2>What the research revealed</h2>
            <p>Four things kept coming up in the research and shaped the design decisions that followed.</p>
            <!-- TODO: if any of these insights are not supported by the analytics or benchmark, delete that line. -->
            <ul class="findings-list">
                <li>Candidates and employers needed clearer, separate paths from the first screen</li>
                <li>Calls to action and value propositions were hard to find</li>
                <li>Trust signals such as social proof were missing from the journey</li>
                <li>The site needed to work well on mobile</li>
            </ul>
        </div>
        <div class="project-research-content">
            <p class="label">Persona</p>
            <h2>Persona</h2>
            <p>I created a persona based on the analytics, internal records and benchmarking to keep decisions focused on the main candidate need.</p>
            <!-- TODO: add the persona card: name, role, goals, frustrations and the data it came from. Use only content Pauline provides. -->
        </div>
    </section>
    <section id="strategy" class="container">
        <div class="projects-intros">
            <p class="label">04. UX Strategy</p>
            <h2>A clear path from insight to experience</h2>
            <p>Once I had a clear picture from the research, I defined four things the design needed to fix, each tied directly to a problem we'd found.</p>
        </div>
        <div class="strategy-pillars two-column-grid">
            <div class="pillar">
                <h3>Audience Clarity First</h3>
                <p>Separate candidate and employer paths from the homepage.</p>
            </div>
            <div class="pillar">
                <h3>Trust at Every Touchpoint</h3>
                <p>Social proof throughout the journey.</p>
            </div>
            <div class="pillar">
                <h3>Conversion-Led Structure</h3>
                <p>Calls to action matched to each page's purpose.</p>
            </div>
            <div class="pillar">
                <h3>Content-Team Empowerment</h3>
                <p>A modular WordPress/Elementor system the team can edit.</p>
            </div>
        </div>
        <div class="section-shell-blue">
            <p class="label">Design Process</p>
            <h2>How strategy became execution</h2>
            <div class="flow-steps">
                <div class="flow-step">
                    <div class="flow-dot">1</div>
                    <h3>Research &amp; Synthesis</h3>
                    <p>Analytics, records and competitive benchmarking</p>
                </div>
                <div class="flow-step">
                    <div class="flow-dot">2</div>
                    <h3>Stakeholder Workshop</h3>
                    <p>Aligning on goals, audiences and priorities</p>
                </div>
                <div class="flow-step">
                    <div class="flow-dot">3</div>
                    <h3>IA &amp; User Flows</h3>
                    <p>Sitemap and user flow diagram in Miro</p>
                </div>
                <div class="flow-step">
                    <div class="flow-dot">4</div>
                    <h3>Wireframes &amp; Prototype</h3>
                    <p>Wireframes in Adobe XD with my marketing colleague, validated with stakeholders, then developed into low- and high-fidelity prototypes</p>
                </div>
                <div class="flow-step">
                    <div class="flow-dot">5</div>
                    <h3>Brand &amp; UI Design</h3>
                    <p>Identity, design system and prototypes for the main pages</p>
                </div>
                <div class="flow-step">
                    <div class="flow-dot">6</div>
                    <h3>Build &amp; Launch</h3>
                    <p>WordPress and Elementor build, SEO and accessibility</p>
                </div>
            </div>
        </div>
        <div class="wf-block">
            <span class="label-highlight-pink">Stakeholder Workshop</span>
            <div class="wf-desc">
                <p>For every new design project, I start with a workshop with stakeholders. It sets shared goals and priorities and gives the project a clearer, more defined direction.</p>
                <!-- TODO: add one concrete example: who attended (roles), the method used, and what changed because of it. -->
            </div>
        </div>
    </section>
    <section id="wireframes" class="container">
        <div class="projects-intros">
            <p class="label">05. Wireframes &amp; Prototype</p>
            <h2>From user flow to prototype</h2>
            <p>I began with a user flow diagram in Miro, then built wireframes in Adobe XD with my marketing colleague. Once validated with stakeholders, the wireframes became low- and then high-fidelity prototypes covering all the main pages. I also redesigned the jobinar template to match the new brand identity.</p>
            <!-- TODO: add the user flow diagram and wireframe images. If the flow diagram has to be redrawn, caption it "Redrawn from the original (original file no longer available)". -->
        </div>
        <div class="wf-block">
            <span class="label-highlight-pink">Homepage</span>
            <div class="wf-desc">
                <p>The homepage is built around one question: <strong>"Am I in the right place, and what should I do next?"</strong>, with a split hero for candidates and employers.</p>
            </div>
            <!-- <div class="img-placeholder ph-tall" style="height: 420px;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg>
                <span>Homepage wireframe — Lo-fi &amp; Hi-fi comparison</span>
            </div> -->
        </div>
        <div class="wf-block">
            <span class="label-highlight-pink">Navigation &amp; IA</span>
            <div class="wf-desc">
                <p>A mega-menu separates "For Candidates" and "For Employers", surfacing sub-pages and key resources without requiring deep navigation.</p>
            </div>
            <div class="two-column-grid">
                <div class="img-placeholder">
                    <img class="img-320" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/CI Project/TWT old - Navigation screenshot.png" alt="Old navigation UI">
                    <!-- <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg> -->
                    <span>Previous navigation structure</span>
                </div>
                <div class="img-placeholder">
                    <img class="img-320" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/CI Project/CI Navigation screenshot.png" alt="New navigation UI">
                    <!-- <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg> -->
                    <span>Redesigned navigation — mega-menu wireframe</span>
                </div>
            </div>
        </div>
        <div class="wf-block">
            <span class="label-highlight-pink">Mobile Responsive</span>
            <div class="wf-desc">
                <p>Mobile-first design, starting at 375px.</p>
            </div>
            <div class="">
                <div class="img-placeholder">
                    <img class="img-420" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/CI Project/CI - Mobile View - Mockup.png" alt="Mobile View Multiple page mockup presentation">
                    <!-- <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg>
                    <span>Mobile — Homepage</span>
                </div>
                <div class="img-placeholder" style="height: 420px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg>
                    <span>Mobile — Job Listings</span>
                </div>
                <div class="img-placeholder" style="height: 420px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg>
                    <span>Mobile — Contact / Enquiry</span> -->
                </div>
            </div>
        </div>
    </section>
    <section id="ui-branding" class="container">
        <div class="projects-intros">
            <p class="label">06. UI & Branding</p>
            <h2>A visual identity built for trust and ambition</h2>
            <p>The brand needed to feel confident but approachable. I used strong typography, a clear colour palette and photography of real people rather than generic stock photos.</p>
        </div>
        <!-- <div class="two-column-grid">
            <div class="img-placeholder" style="height: 320px;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg>
                <span>Previous navigation structure</span>
            </div>
            <div class="img-placeholder" style="height: 320px;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg>
                <span>Redesigned navigation — mega-menu wireframe</span>
            </div>
        </div> -->
        <div id="color-system">
            <p class="label">Colour System</p>
            <div class="palette-row">
                <div class="swatch" style="background: #325EFF; color: #fff;">
                    <div class="swatch-name">Electric Sapphire</div>
                    <div class="swatch-hex">#325EFF — Primary</div>
                </div>
                <div class="swatch" style="background: #ED1C57; color: #fff;">
                    <div class="swatch-name">Amaranth</div>
                    <div class="swatch-hex">#ED1C57 — Action</div>
                </div>
                <div class="swatch" style="background: #FFF; color: #1C1C1E;">
                    <div class="swatch-name">White</div>
                    <div class="swatch-hex">#FFF — Background</div>
                </div>
                <div class="swatch" style="background: #E3E9FF; color: #fff;">
                    <div class="swatch-name">Lavender</div>
                    <div class="swatch-hex">#4A7FA5 — Secondary</div>
                </div>
                <div class="swatch" style="background: #161F3A; color: #fff;">
                    <div class="swatch-name">Prussian Blue</div>
                    <div class="swatch-hex">#161F3A — Text</div>
                </div>
                <div class="swatch" style="background: #FF9E00; color: #fff;">
                    <div class="swatch-name">Amber Glow</div>
                    <div class="swatch-hex">#FF9E00 — Accent</div>
                </div>
            </div>
        </div>
        <div id="typography" class="section-shell">
            <p class="label">Typography System</p>
            <div class="type-sample-h1">Careers<br>International.</div>
            <div class="type-sample-h2">Connecting talent with opportunity</div>
            <p class="type-sample-body">We help companies build high-performing teams and individuals navigate meaningful career transitions — with precision, discretion, and genuine expertise.</p>
        </div>
        <div class="img-placeholder">
            <img class="img-420" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/CI Project/CI - Branding Style.png" alt="Mobile View Multiple page mockup presentation">
            <span>Brand Styling</span>
        </div>
        <!-- <div class="three-column-grid">
            <div class="img-placeholder ph-sq" style="height: 320px;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg>
                <span>Homepage — Final UI</span>
            </div>
            <div class="img-placeholder ph-sq" style="height: 320px;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg>
                <span>Job Listings — Final UI</span>
            </div>
            <div class="img-placeholder ph-sq" style="height: 320px;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="M21 15l-5-5L5 21"></path></svg>
                <span>About / Team Page — Final UI</span>
            </div>
        </div> -->
    </section>
    <section id="results" class="container">
        <div class="section-shell-burgandy">
            <p class="label-dark">07. Results</p>
            <h2 class="dark-mode-txt">What changed</h2>
            <!-- TODO: add real before/after numbers only if Pauline provides them. Otherwise leave out metrics entirely. -->
            <div class="three-column-grid">
                <div class="project-stat-item">
                    <h3 class="project-stat-num">Self-managed</h3>
                    <p>A modular WordPress/Elementor system lets the internal team update content without a developer, and much faster than before</p>
                </div>
                <div class="project-stat-item">
                    <h3 class="project-stat-num">Clear paths</h3>
                    <p>A clearer structure with separate paths for candidates and employers</p>
                </div>
                <div class="project-stat-item">
                    <h3 class="project-stat-num">SEO &amp; A11y</h3>
                    <p>A site built with SEO and accessibility compliance in mind</p>
                </div>
            </div>
        </div>
    </section>
    <section id="case-footer-cta" class="container">
        <p class="label">What's next?</p>
        <h2>Ready to work together?</h2>
        <p>If you need someone who cares about both how something works and how it looks, let's talk.</p>
        <div class="display-flex-center-center-mobile">
            <a href="mailto:info@paulinedesigned.it" class="primary-btn btn">Work with me</a>
            <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="secondary-btn btn">Explore more case studies</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>