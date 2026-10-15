<?php
/**
 * Template Name: Jobinar Project 2026
 */
$jobinar26_img = get_stylesheet_directory_uri() . '/assets/images/Jobinar Improved 2026/';
get_header(); ?>
<main id="main-content" class="project">

    <!-- ══ HERO ══ -->
    <section id="hero" class="container">
        <div class="project-hero-title">
            <p class="hero-kicker">Case Study</p>
            <h1>Jobinar 2026: <br>
            <span class="highlight italic">A More Adaptable Job Listing Experience</span></h1>
            <p class="subtitle">Two years after moving Jobinar to Wistia, the platform was stable, but the pages around the videos weren't keeping up. This redesign made them easier to read and easier to browse, made vacancies easier to manage, and let each page take on a light or dark look to match the client.</p>
        </div>
        <div class="project-hero-meta section-shell flex-wrap">
            <div class="meta-item">
                <div class="meta-label">My Role</div>
                <div class="meta-value">UX/UI Designer &amp; Web Developer</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Scope</div>
                <div class="meta-value">UX Audit · Content Workflow · UI Redesign · Theming</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Year</div>
                <div class="meta-value">2026</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Industry</div>
                <div class="meta-value">HR &amp; Recruitment</div>
            </div>
        </div>
        <div class="project-tags-wrapper flex-wrap">
            <div class="project-card-tag">UI/UX</div>
            <div class="project-card-tag">Design System</div>
            <div class="project-card-tag">Light &amp; Dark Themes</div>
            <div class="project-card-tag">HTML</div>
            <div class="project-card-tag">CSS</div>
            <div class="project-card-tag">WordPress</div>
            <div class="project-card-tag">Elementor</div>
            <div class="project-card-tag">Wistia</div>
        </div>
        <div class="img-placeholder">
            <img class="img-420" src="<?php echo esc_url( $jobinar26_img . 'Jobinar 2026 - Mockup pages.webp' ); ?>" alt="Redesigned Jobinar pages for Allianz Global Investors and BT shown on laptop, phone and tablet" fetchpriority="high">
            <span>Jobinar 2026: dark and light pages across devices</span>
        </div>
    </section>

    <!-- ══ OVERVIEW ══ -->
    <section id="overview" class="container">
        <div class="two-column-grid">
            <div class="project-overview-content">
                <p class="label">01. Project Overview</p>
                <h2>The next chapter for <span class="highlight italic">Jobinar</span></h2>
                <p>
                    Jobinar is Careers International's live and on-demand webinar format, where employers introduce their teams, programmes and open roles to candidates. In 2024, I moved the platform to Wistia, which fixed the cost and streaming problems. <a href="<?php echo esc_url( home_url( '/jobinar-project/' ) ); ?>">Read the 2024 case study</a>.<br>
                    <br>
                    As more employers came on board, a new problem showed up. Every page was still built by hand, vacancy lists kept getting longer, and every client got the same visual style, whether or not it suited their brand.<br>
                    <br>
                    The 2026 redesign treats the Jobinar page as <strong>a repeatable system</strong> rather than a one-off page: a clearer structure for candidates, a simpler vacancy workflow for the team, and a light or dark theme for each client.
                </p>
            </div>
            <div class="project-overview-img">
                <div class="img-placeholder" style="height: 100%; min-height: 320px;">
                    <img class="img-420" src="<?php echo esc_url( $jobinar26_img . 'screencapture-careersinternational-bt-shaping-the-future-of-tech-2026-10-05-11_15_15.webp' ); ?>" alt="Full mobile view of the BT Jobinar replay page with video, numbered questions and content tabs" loading="lazy">
                    <span>Mobile: BT jobinar replay page</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ CHALLENGE ══ -->
    <section id="challenge" class="container">
        <div class="section-shell-dark">
            <div class="project-challenge-content">
                <p class="label-dark">02. The Challenge</p>
                <h2 class="dark-mode-txt">A great video, <span class="italic">buried in a hard-to-use page</span></h2>
                <p class="dark-mode-txt">The video player was no longer the problem. The page around it was. Candidates had to work hard to find the information they came for, and the team spent too much time keeping every page up to date.</p>
            </div>

            <div class="two-column-grid">
                <div class="challenge-card">
                    <div class="num">01</div>
                    <h3 class="dark-mode-txt">Long, Unstructured Vacancy Lists</h3>
                    <p class="dark-mode-txt">Some programmes had more than twenty open roles in one list, with no search and no way to filter by team. Candidates had to scroll through all of them to find the ones that mattered.</p>
                </div>
                <div class="challenge-card">
                    <div class="num">02</div>
                    <h3 class="dark-mode-txt">Repetitive Manual Updates</h3>
                    <p class="dark-mode-txt">Each vacancy was edited by hand, page by page. Adding, closing or recategorising a role took time and introduced inconsistencies between pages.</p>
                </div>
                <div class="challenge-card">
                    <div class="num">03</div>
                    <h3 class="dark-mode-txt">Dense, Hard-to-Scan Content</h3>
                    <p class="dark-mode-txt">Event details, company information, speakers and vacancies were stacked in one long page. The key facts candidates needed, such as date, location and how to apply, were easy to miss.</p>
                </div>
                <div class="challenge-card">
                    <div class="num">04</div>
                    <h3 class="dark-mode-txt">Replays Without Navigation</h3>
                    <p class="dark-mode-txt">Recorded sessions could run close to an hour. Without any chapters, candidates had no way of jumping to the questions that were relevant to them.</p>
                </div>
                <div class="challenge-card">
                    <div class="num">05</div>
                    <h3 class="dark-mode-txt">One Look for Every Client</h3>
                    <p class="dark-mode-txt">Every employer got the same visual style. Brands with a bold, dark identity and brands with a light, corporate one were squeezed into the same template.</p>
                </div>
                <div class="challenge-card">
                    <div class="num">06</div>
                    <h3 class="dark-mode-txt">Readability on Smaller Screens</h3>
                    <p class="dark-mode-txt">Long text blocks and tightly packed lists became hard to read on mobile, where a large share of candidates first discover a jobinar.</p>
                </div>
            </div>
        </div>

        <!-- Insight callout -->
        <div class="iterations-note" style="margin-top: 32px;">
            <span style="font-size: 1.4rem;">💡</span>
            <p><strong>The insight that shaped the project:</strong> The issue wasn't any single page. Each jobinar was designed from scratch, so every new client multiplied the work and the inconsistencies. The fix was a reusable page system with content managed in one place.</p>
        </div>
    </section>

    <!-- ══ RESEARCH ══ -->
    <section id="research" class="container">
        <div class="project-research-content">
            <p class="label">03. UX Research &amp; Insights</p>
            <h2>Looking at <span class="highlight italic">both sides of the listing</span></h2>
            <p>The research focused on two audiences: candidates trying to decide whether a programme is right for them, and the internal team keeping dozens of jobinars and vacancies up to date.</p>
        </div>

        <div class="three-column-grid">
            <div class="info-card">
                <div class="research-icon" style="background: var(--color-blue);">🔍</div>
                <h3>Page Content Audit</h3>
                <p>A review of existing jobinar pages to map every content block, spot repetition, and find where the key information got lost.</p>
            </div>
            <div class="info-card">
                <div class="research-icon" style="background: #FDE8F0;">🗂️</div>
                <h3>Team Workflow Review</h3>
                <p>A walkthrough of how vacancies were added, updated and removed, to find the repetitive steps that could be centralised.</p>
            </div>
            <div class="info-card">
                <div class="research-icon" style="background: #fff0e8;">🧭</div>
                <h3>Candidate Journey Mapping</h3>
                <p>The path from discovering a jobinar to applying for a role, with every point where candidates had to scroll, search or guess.</p>
            </div>
            <div class="info-card">
                <div class="research-icon" style="background: var(--color-blue);">💼</div>
                <h3>Job Board Benchmarking</h3>
                <p>A look at how leading career sites structure vacancy lists: filters, categories, card layouts and the details shown up front.</p>
            </div>
            <div class="info-card">
                <div class="research-icon" style="background: #FDE8F0;">🎨</div>
                <h3>Client Brand Review</h3>
                <p>A comparison of the brand identities of current and upcoming clients, to decide how far one template could flex before it broke.</p>
            </div>
            <div class="info-card">
                <div class="research-icon" style="background: #fff0e8;">📱</div>
                <h3>Readability &amp; Mobile Check</h3>
                <p>A review of type sizes, contrast, line lengths and spacing on mobile and desktop, in both light and dark contexts.</p>
            </div>
        </div>

        <?php $jobinar_journey = get_stylesheet_directory_uri() . '/assets/images/CI Project/CI - Jobinar page journey.png'; ?>
        <div class="img-placeholder">
            <a href="<?php echo esc_url( $jobinar_journey ); ?>" target="_blank" rel="noopener noreferrer">
                <img style="width: 100%; height: auto;" src="<?php echo esc_url( $jobinar_journey ); ?>" alt="Jobinar page candidate journey in four stages: discover and learn, apply to the jobinar, join the live or watch the replay, then apply to roles within two weeks of the live">
            </a>
            <span>Jobinar page candidate journey. Redrawn from the original (original file no longer available)</span>
        </div>

        <div class="section-shell-pink">
            <p class="label-action">Key Insights</p>
            <h2>What the research revealed</h2>
            <p>Every design decision that followed came back to one of these findings.</p>
            <ul class="findings-list">
                <li>Candidates scan before they read: role, location and team need to be visible without opening a vacancy</li>
                <li>Large vacancy lists need search and categories, otherwise relevant roles get lost in the scroll</li>
                <li>Replays are watched selectively: candidates want to jump straight to the questions they care about</li>
                <li>Event essentials (date, time, live or on demand) were the first thing people looked for and the hardest to find</li>
                <li>The team needed one familiar place to manage vacancies instead of editing each page by hand</li>
                <li>A single template could serve every client, as long as it supported both a light and a dark visual direction</li>
            </ul>
        </div>
    </section>

    <!-- ══ STRATEGY ══ -->
    <section id="strategy" class="container">
        <div class="projects-intros">
            <p class="label">04. UX Strategy</p>
            <h2>From one-off pages to a <span class="highlight italic">repeatable system</span></h2>
            <p>The strategy brought the page layout and the way vacancies are managed closer together: one clear structure for candidates, a practical workflow for the team, and room for each client's brand.</p>
        </div>

        <div class="strategy-pillars two-column-grid">
            <div class="pillar">
                <h3>Organise Content at the Source</h3>
                <p>Vacancies and their categories are prepared in a shared Excel board before they appear on the page. The team works in a tool they already know, and the page stays consistent.</p>
            </div>
            <div class="pillar">
                <h3>Design for Discovery</h3>
                <p>A search field and category filters with live role counts turn a long list into something candidates can narrow down in seconds.</p>
            </div>
            <div class="pillar">
                <h3>Put the Essentials First</h3>
                <p>Date, time, live status, location and sector sit right in the hero, and tabs split the rest of the page into the jobinar, the company, programme highlights and vacancies.</p>
            </div>
            <div class="pillar">
                <h3>One System, Two Themes</h3>
                <p>The same layout and hierarchy work in either a light or a dark theme, chosen to fit each client's brand without redesigning the page.</p>
            </div>
        </div>

        <!-- Before / After -->
        <div class="section-shell-blue">
            <p class="label">Before &amp; After</p>
            <h2>What changed</h2>
            <div class="two-column-grid">
                <div>
                    <p style="font-size: 0.72rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: var(--color-main-burgandy); margin-bottom: 1rem;">⚠ Before</p>
                    <div class="info-step display-flex-mobile">
                        <div class="num-oultine">✕</div>
                        <div class="info-step-content"><h4>One long vacancy list</h4><p>No search, no categories, everything in one scroll</p></div>
                    </div>
                    <div class="info-step display-flex-mobile">
                        <div class="num-oultine">✕</div>
                        <div class="info-step-content"><h4>Manual page-by-page updates</h4><p>Every role edited by hand on every page</p></div>
                    </div>
                    <div class="info-step display-flex-mobile">
                        <div class="num-oultine">✕</div>
                        <div class="info-step-content"><h4>Key details hidden</h4><p>Event info and how to apply buried in long text</p></div>
                    </div>
                    <div class="info-step display-flex-mobile">
                        <div class="num-oultine">✕</div>
                        <div class="info-step-content"><h4>Linear replays</h4><p>No way to jump to a specific question</p></div>
                    </div>
                    <div class="info-step display-flex-mobile">
                        <div class="num-oultine">✕</div>
                        <div class="info-step-content"><h4>Same look for every client</h4><p>A single visual style regardless of brand</p></div>
                    </div>
                </div>
                <div>
                    <p style="font-size: 0.72rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: var(--color-main-burgandy); margin-bottom: 1rem;">✦ After: Jobinar 2026</p>
                    <div class="info-step display-flex-mobile">
                        <div class="num-oultine">✓</div>
                        <div class="info-step-content"><h4>Searchable, categorised vacancies</h4><p>Filters with live role counts and colour-coded cards</p></div>
                    </div>
                    <div class="info-step display-flex-mobile">
                        <div class="num-oultine">✓</div>
                        <div class="info-step-content"><h4>Shared Excel board</h4><p>Vacancies managed in one familiar place</p></div>
                    </div>
                    <div class="info-step display-flex-mobile">
                        <div class="num-oultine">✓</div>
                        <div class="info-step-content"><h4>Essentials up front</h4><p>Date, time, live status and clear CTAs in the hero</p></div>
                    </div>
                    <div class="info-step display-flex-mobile">
                        <div class="num-oultine">✓</div>
                        <div class="info-step-content"><h4>Question-based replays</h4><p>Numbered questions next to the video</p></div>
                    </div>
                    <div class="info-step display-flex-mobile">
                        <div class="num-oultine">✓</div>
                        <div class="info-step-content"><h4>Light or dark per client</h4><p>One system that adapts to each brand</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-shell-blue" style="margin-top: 24px;">
            <p class="label">Design Process</p>
            <h2>How strategy became execution</h2>
            <div class="flow-steps">
                <div class="flow-step">
                    <div class="flow-dot">1</div>
                    <h3>Audit</h3>
                    <p>Content, workflow and candidate journey</p>
                </div>
                <div class="flow-step">
                    <div class="flow-dot">2</div>
                    <h3>Structure</h3>
                    <p>Tabs, hierarchy and vacancy model</p>
                </div>
                <div class="flow-step">
                    <div class="flow-dot">3</div>
                    <h3>Workflow</h3>
                    <p>Shared Excel board and categories</p>
                </div>
                <div class="flow-step">
                    <div class="flow-dot">4</div>
                    <h3>UI &amp; Themes</h3>
                    <p>Components in light and dark</p>
                </div>
                <div class="flow-step">
                    <div class="flow-dot">5</div>
                    <h3>Build &amp; Launch</h3>
                    <p>WordPress, Elementor, responsive QA</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ KEY SCREENS ══ -->
    <section id="wireframes" class="container">
        <div class="projects-intros">
            <p class="label">05. Key Screens</p>
            <h2>Designing the <span class="highlight italic">new experience</span></h2>
            <p>Each screen tackles one of the research findings: finding the right role, getting the essentials quickly, and watching only the part of a replay that matters.</p>
        </div>
        <div class="two-column-grid">
            <div class="wf-block">
                <span class="label-highlight-pink">Available Vacancies</span>
                <div class="wf-desc">
                    <p>The vacancy list answers one question: <strong>"Is there a role here for me?"</strong> A search field and category filters with role counts narrow down the list, and each colour-coded card shows title, location, team, programme length and contract type before candidates click.</p>
                </div>
                <div class="img-placeholder" style="height: 400px;">
                    <img class="img-320" src="<?php echo esc_url( $jobinar26_img . 'New Jobs 2026 Design.webp' ); ?>" alt="Dark-theme vacancy list with search, category filters and colour-coded job cards" loading="lazy">
                    <span>Vacancy list: search, categories and role cards</span>
                </div>
            </div>

            <div class="wf-block">
                <span class="label-highlight-pink">Replay &amp; Questions</span>
                <div class="wf-desc">
                    <p>Replays now sit next to a numbered list of the questions answered during the session. Candidates can see at a glance what was covered and go straight to the part they care about, with an Apply Now button right under the video.</p>
                </div>
                <div class="img-placeholder" style="height: 400px;">
                    <img class="img-320" src="<?php echo esc_url( $jobinar26_img . 'Jobinar replay 2026 design.webp' ); ?>" alt="Light-theme BT jobinar replay page with video player and numbered question list" loading="lazy">
                    <span>Replay page: video and numbered questions</span>
                </div>
            </div>
        </div>

        <div class="iterations-note">
            <span style="font-size: 1.4rem;">💡</span>
            <p><strong>On the workflow:</strong> Rather than adding a new tool, the vacancy workflow was built around a shared Excel board, something the team already used every day. Keeping it familiar made it easy to adopt and meant less repetitive work on every new jobinar.</p>
        </div>
    </section>

    <!-- ══ UI & DESIGN ══ -->
    <section id="ui-branding" class="container">
        <div class="projects-intros">
            <p class="label">06. UI Design</p>
            <h2>One adaptable system, <span class="highlight italic">two ways to make it yours</span></h2>
            <p>The layout works in either a dark or a light theme, chosen to suit each client's brand and content. Both keep the same clear hierarchy, readable details and easy-to-spot actions, so candidates always know where to look.</p>
        </div>
        <div class="two-column-grid">
            <div class="img-placeholder" style="height: 520px;">
                <img style="height: 460px; object-fit: contain; border-radius: var(--radius-md);" src="<?php echo esc_url( $jobinar26_img . 'screencapture-careersinternational-allianz-gi-graduate-programme-2027-2026-10-05-09_51_22.webp' ); ?>" alt="Full dark-theme Jobinar page for the Allianz Global Investors Graduate Programme" loading="lazy">
                <span>Dark theme: Allianz Global Investors</span>
            </div>
            <div class="img-placeholder" style="height: 520px;">
                <img style="height: 460px; object-fit: contain; border-radius: var(--radius-md);" src="<?php echo esc_url( $jobinar26_img . 'screencapture-careersinternational-bt-shaping-the-future-of-tech-2026-10-05-09_57_57.webp' ); ?>" alt="Full light-theme Jobinar page for BT's Shaping the Future of Tech" loading="lazy">
                <span>Light theme: BT</span>
            </div>
        </div>
        <div class="img-placeholder" style="margin-top: 24px;">
            <img class="img-420" src="<?php echo esc_url( $jobinar26_img . 'screencapture-careersinternational-allianz-gi-graduate-programme-2027-2026-10-05-09_51_59.webp' ); ?>" alt="Allianz Global Investors Jobinar page with the Available Vacancies tab open" loading="lazy">
            <span>Full page: event essentials, tabs and vacancies</span>
        </div>
    </section>

    <!-- ══ RESULTS ══ -->
    <section id="results" class="container">
        <div class="section-shell-burgandy">
            <p class="label-dark">07. Results</p>
            <h2 class="dark-mode-txt">Better for <span class="italic">both sides of the listing</span></h2>
            <p class="dark-mode-txt" style="max-width: 560px;">The 2024 project made Jobinar affordable and reliable. The 2026 redesign makes it scalable: every new client starts from a proven system instead of a blank page.</p>
            <div class="three-column-grid">
                <div class="project-stat-item">
                    <h3 class="project-stat-num">1</h3>
                    <p class="dark-mode-txt">Shared board to manage<br>every vacancy</p>
                </div>
                <div class="project-stat-item">
                    <h3 class="project-stat-num">2</h3>
                    <p class="dark-mode-txt">Visual themes,<br>light and dark</p>
                </div>
                <div class="project-stat-item">
                    <h3 class="project-stat-num">↑↑</h3>
                    <p class="dark-mode-txt">Readability and<br>role discovery</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ FOOTER CTA ══ -->
    <section id="case-footer-cta" class="container">
        <p class="label">What's next?</p>
        <h2>Ready to work together?</h2>
        <p>If you're looking for a designer who cares about both how something works and how it looks, let's talk.</p>
        <div class="display-flex-center-center-mobile">
            <a href="mailto:info@paulinedesigned.it" class="primary-btn btn">Work with me</a>
            <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="secondary-btn btn">Explore more case studies</a>
        </div>
    </section>

</main>
<?php get_footer(); ?>
