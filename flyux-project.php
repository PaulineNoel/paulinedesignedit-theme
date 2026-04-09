<?php
/**
 * Template Name: FlyUX Project
 */
get_header(); ?>
<main id="main-content" class="project">

    <!-- ══ HERO ══ -->
    <section id="hero" class="container">
        <div class="project-hero-title">
            <p class="hero-kicker">Case Study &middot; UX Design Institute Diploma</p>
            <h1>FlyUX: <br>
            <span class="highlight italic">Designing a Better Airline App Experience</span></h1>
            <p class="subtitle">A full UX design project completed as part of the UX Design Institute professional diploma — from competitive benchmarking and usability testing through to affinity diagrams, customer journey mapping, user flows, and a high-fidelity prototype of an airline booking app.</p>
        </div>
        <div class="project-hero-meta section-shell flex-wrap">
            <div class="meta-item">
                <div class="meta-label">My Role</div>
                <div class="meta-value">UX Designer (solo project)</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Scope</div>
                <div class="meta-value">UX Research &middot; Usability Testing &middot; Affinity Diagramming &middot; Journey Mapping &middot; Wireframing &middot; Prototyping</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Context</div>
                <div class="meta-value">UX Design Institute &mdash; Professional Diploma in UX Design</div>
            </div>
            <div class="meta-item">
                <div class="meta-label">Industry</div>
                <div class="meta-value">Travel &amp; Airline</div>
            </div>
        </div>
        <div class="project-tags-wrapper flex-wrap">
            <div class="project-card-tag">UX Research</div>
            <div class="project-card-tag">Usability Testing</div>
            <div class="project-card-tag">Affinity Diagram</div>
            <div class="project-card-tag">Journey Mapping</div>
            <div class="project-card-tag">Wireframing</div>
            <div class="project-card-tag">Prototyping</div>
        </div>
        <div class="img-placeholder">
            <img class="flyux-hero-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Fly UX/Fly UX - Mobile - Mockup.png" alt="FlyUX airline app mockup on mobile device">
            <span>FlyUX &mdash; airline booking app prototype</span>
        </div>
    </section>

    <!-- ══ OVERVIEW ══ -->
    <section id="overview" class="container">
        <div class="two-column-grid">
            <div class="project-overview-content">
                <p class="label">01. Project Overview</p>
                <h2>A diploma project that followed the full UX process from scratch</h2>
                <p>
                    FlyUX is the capstone project of my UX Design Institute Professional Diploma. The brief was to design a mobile airline booking app, but the real work was in the process: no skipping steps, no assumptions, no jumping straight to design.<br>
                    <br>
                    Every decision in the final prototype is grounded in research. I benchmarked four real airline apps, ran moderated usability tests with real participants, synthesised findings into an affinity diagram, mapped the full customer journey, designed user flows, and built the wireframes and prototype from there.<br>
                    <br>
                    The process taught me that the most valuable design work often happens before you open Figma.
                </p>
            </div>
            <div class="img-placeholder project-overview-img">
                <img class="img-320" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Fly UX/FlyUX - complete wireframe.png" alt="FlyUX complete wireframe overview">
                <span>Complete wireframe overview</span>
            </div>
        </div>
    </section>

    <!-- ══ CHALLENGE ══ -->
    <section id="challenge" class="container">
        <div class="section-shell-dark">
            <div class="project-challenge-content">
                <p class="label-dark">02. The Challenge</p>
                <h2 class="dark-mode-txt">Airline apps are notoriously frustrating &mdash; and for good reason</h2>
                <p class="dark-mode-txt">Booking a flight should be simple. In practice, most airline apps make it harder than it needs to be: confusing fare structures, aggressive upsell flows, unclear seat selection, and layouts that create anxiety rather than confidence. The challenge was to identify exactly where and why things break down, and then design something that genuinely works better.</p>
            </div>

            <div class="two-column-grid">
                <div class="challenge-card">
                    <div class="num">01</div>
                    <h3 class="dark-mode-txt">Fare Confusion</h3>
                    <p class="dark-mode-txt">Fare options and pricing logic are rarely explained clearly. Users struggle to understand what they're actually getting, leading to hesitation, drop-off, and post-booking regret.</p>
                </div>
                <div class="challenge-card">
                    <div class="num">02</div>
                    <h3 class="dark-mode-txt">Upgrade Prompt Overload</h3>
                    <p class="dark-mode-txt">Too many upsell screens interrupt the booking flow. Users lose track of where they are in the process and feel pressured rather than helped.</p>
                </div>
                <div class="challenge-card">
                    <div class="num">03</div>
                    <h3 class="dark-mode-txt">Unclear Layover Selection</h3>
                    <p class="dark-mode-txt">When multiple flight options are available, the differences between connections and layovers are poorly communicated, making it difficult to compare options confidently.</p>
                </div>
                <div class="challenge-card">
                    <div class="num">04</div>
                    <h3 class="dark-mode-txt">Seat Selection Ambiguity</h3>
                    <p class="dark-mode-txt">Seat maps often fail to convey the real differences between seat types. Users aren't sure what they're paying for, or whether a seat is actually worth the upgrade.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ RESEARCH: COMPETITIVE BENCHMARKING ══ -->
    <section id="research" class="container">
        <div class="project-research-content">
            <p class="label">03. Competitive Benchmarking</p>
            <h2>Understanding the landscape before <span class="highlight italic">designing anything</span></h2>
            <p>I started by analysing four major airline apps in detail: Ryanair, EasyJet, British Airways, and All Airlines. For each one, I reviewed the full booking flow, noting what worked well and where the experience broke down. The goal was to find patterns, not to copy a favourite.</p>
        </div>

        <div class="two-column-grid">

            <div class="section-shell">
                <h3 style="margin-top:0;">Ryanair</h3>
                <p class="label" style="margin-bottom:0.5rem;">What worked</p>
                <ul class="findings-list-simple">
                    <li>Clear, fast home screen with direct search access</li>
                    <li>Flight calendar view makes date flexibility easy to compare</li>
                    <li>Bag and seat options visible early in the flow</li>
                </ul>
                <p class="label" style="margin-top:1rem;margin-bottom:0.5rem;">What didn't</p>
                <ul class="findings-list-simple">
                    <li>Aggressive upsell screens on nearly every step</li>
                    <li>Fare bundle differences poorly explained</li>
                    <li>Seat map lacks context for what each zone actually means</li>
                </ul>
            </div>

            <div class="section-shell">
                <h3 style="margin-top:0;">EasyJet</h3>
                <p class="label" style="margin-bottom:0.5rem;">What worked</p>
                <ul class="findings-list-simple">
                    <li>Clean visual hierarchy on search and results screens</li>
                    <li>Flight details expanded clearly on tap</li>
                    <li>Check-in flow is well structured and step-counted</li>
                </ul>
                <p class="label" style="margin-top:1rem;margin-bottom:0.5rem;">What didn't</p>
                <ul class="findings-list-simple">
                    <li>Fare comparison table is text-heavy and hard to scan</li>
                    <li>Progress indicator disappears mid-flow</li>
                    <li>Extras screens feel disconnected from the booking context</li>
                </ul>
            </div>

            <div class="section-shell">
                <h3 style="margin-top:0;">British Airways</h3>
                <p class="label" style="margin-bottom:0.5rem;">What worked</p>
                <ul class="findings-list-simple">
                    <li>Premium tone established from the first screen</li>
                    <li>Cabin class comparison is well presented</li>
                    <li>Booking confirmation is detailed and reassuring</li>
                </ul>
                <p class="label" style="margin-top:1rem;margin-bottom:0.5rem;">What didn't</p>
                <ul class="findings-list-simple">
                    <li>App feels slow and over-designed for simple tasks</li>
                    <li>Seat selection interface is dated and unclear</li>
                    <li>Too many steps to complete a basic one-way booking</li>
                </ul>
            </div>

            <div class="section-shell">
                <h3 style="margin-top:0;">All Airlines</h3>
                <p class="label" style="margin-bottom:0.5rem;">What worked</p>
                <ul class="findings-list-simple">
                    <li>Aggregator model gives users a broad view of options</li>
                    <li>Price comparison across carriers is a genuine differentiator</li>
                    <li>Filter system is one of the more intuitive in the category</li>
                </ul>
                <p class="label" style="margin-top:1rem;margin-bottom:0.5rem;">What didn't</p>
                <ul class="findings-list-simple">
                    <li>Handoff to third-party booking breaks the experience</li>
                    <li>Inconsistent UI across different airline flows</li>
                    <li>Trust is harder to establish without a direct booking relationship</li>
                </ul>
            </div>

        </div>

        <div class="section-shell-pink" style="margin-top: 2rem;">
            <h3 style="margin-top:0;">Key Benchmarking Takeaways</h3>
            <div class="findings-list">
                <div class="finding-item">
                    <div class="finding-icon">📊</div>
                    <div>
                        <strong>Progress visibility matters</strong>
                        <p>Users felt more confident when they could see exactly where they were in the booking flow. Apps that hid or removed the progress indicator caused anxiety.</p>
                    </div>
                </div>
                <div class="finding-item">
                    <div class="finding-icon">💺</div>
                    <div>
                        <strong>Upsells need context, not pressure</strong>
                        <p>Every app offered seat upgrades and extras. The ones that explained the value clearly converted better and frustrated users less.</p>
                    </div>
                </div>
                <div class="finding-item">
                    <div class="finding-icon">🗺️</div>
                    <div>
                        <strong>Fare structures need plain language</strong>
                        <p>No app handled fare explanation well. Users consistently couldn't tell what was included at each price tier without reading the fine print.</p>
                    </div>
                </div>
                <div class="finding-item">
                    <div class="finding-icon">✅</div>
                    <div>
                        <strong>Trust is built in the details</strong>
                        <p>Clear pricing, readable confirmation screens, and a calm visual tone all contributed to users feeling safe handing over payment details.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ USABILITY TESTING ══ -->
    <section id="usability-testing" class="container">
        <div class="project-research-content">
            <p class="label">04. Usability Testing</p>
            <h2>Watching real people struggle reveals <span class="highlight italic">what assumptions miss</span></h2>
            <p>I ran moderated usability tests with two participants using real airline apps: Aer Lingus and Eurowings. Each session followed the same structured script, with participants asked to complete a flight booking while thinking aloud. I observed, took detailed notes, and resisted the urge to help.</p>
        </div>

        <div class="two-column-grid">

            <div class="section-shell">
                <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.25rem;">
                    <div class="research-icon" style="background: #EEF2FF; font-size:1.5rem; width:48px; height:48px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">👩</div>
                    <div>
                        <strong style="display:block;">Janet</strong>
                        <span style="font-size:0.85rem; color: var(--color-text-muted);">Full-time mom &middot; Dublin</span>
                    </div>
                </div>
                <p class="label" style="margin-bottom:0.5rem;">App tested: Aer Lingus</p>
                <ul class="findings-list-simple">
                    <li>Struggled to understand the difference between fare bundles: "I don't know what Plus means exactly"</li>
                    <li>Got lost after the seat selection screen — wasn't sure if she had completed the booking or not</li>
                    <li>Found the extras screen ("Priority boarding? Again?") repetitive and exhausting</li>
                    <li>Appreciated the calendar price view: "Oh that's useful, I can see the cheapest day"</li>
                    <li>Hesitated at payment: wanted to review the full cost before entering card details</li>
                </ul>
            </div>

            <div class="section-shell">
                <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.25rem;">
                    <div class="research-icon" style="background: #F0FDF4; font-size:1.5rem; width:48px; height:48px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">👨</div>
                    <div>
                        <strong style="display:block;">John Doe</strong>
                        <span style="font-size:0.85rem; color: var(--color-text-muted);">Hospitality Manager &middot; Dublin</span>
                    </div>
                </div>
                <p class="label" style="margin-bottom:0.5rem;">App tested: Eurowings</p>
                <ul class="findings-list-simple">
                    <li>Missed the connection time on a layover flight: "Where does it tell me how long I have between flights?"</li>
                    <li>Confused by the seat map: didn't understand why some seats were greyed out vs. locked behind payment</li>
                    <li>Expected a progress bar but had to guess how many steps were left</li>
                    <li>Appreciated direct flight results appearing first: "Good, I don't want to faff around with connections"</li>
                    <li>Felt the final summary page was rushed: too much information compressed into one screen</li>
                </ul>
            </div>

        </div>

        <div class="section-shell-blue" style="margin-top:2rem;">
            <h3 style="margin-top:0;">Common Patterns Across Both Tests</h3>
            <div class="flow-steps">
                <div class="flow-step">
                    <div class="flow-step__dot">1</div>
                    <div class="flow-step__content">
                        <strong>Fare transparency is the biggest pain point</strong>
                        <p>Both participants hesitated at fare selection and couldn't quickly understand what each tier included. They defaulted to choosing the cheapest option by default, regardless of what it included.</p>
                    </div>
                </div>
                <div class="flow-step">
                    <div class="flow-step__dot">2</div>
                    <div class="flow-step__content">
                        <strong>Progress visibility reduces anxiety</strong>
                        <p>When users couldn't see where they were in the flow, they second-guessed every tap. A clear, persistent step indicator was something both participants instinctively looked for.</p>
                    </div>
                </div>
                <div class="flow-step">
                    <div class="flow-step__dot">3</div>
                    <div class="flow-step__content">
                        <strong>Extras should be opt-in, not default-on</strong>
                        <p>Repeated upsell screens made both users feel targeted rather than helped. The pattern eroded trust in the app and made the experience feel manipulative.</p>
                    </div>
                </div>
                <div class="flow-step">
                    <div class="flow-step__dot">4</div>
                    <div class="flow-step__content">
                        <strong>Confirmation needs to feel final</strong>
                        <p>Neither participant felt fully confident about what they had or hadn't booked until the very end of the flow — and even then, they wanted to go back and check.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ AFFINITY DIAGRAM ══ -->
    <section id="affinity-diagram" class="container">
        <p class="label">05. Affinity Diagram</p>
        <h2>Turning raw notes into <span class="highlight italic">design-ready insights</span></h2>
        <p style="max-width:680px; margin-bottom: 2rem;">After both usability tests, I typed up all my observations as individual notes and ran a KJ method affinity session to group and cluster them. The goal: get out of "observer mode" and into "insight mode" — finding the themes and tensions that would actually shape the design.</p>
        <div class="img-placeholder">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Fly UX/FlyUX - Affinity Diagram.png" alt="FlyUX affinity diagram grouping usability test observations into themes">
            <span>Affinity diagram &mdash; KJ method, post usability testing</span>
        </div>

        <div class="section-shell-pink" style="margin-top:2rem;">
            <h3 style="margin-top:0;">Main Clusters Identified</h3>
            <div class="three-column-grid">
                <div class="info-card">
                    <div class="research-icon" style="background:#FDE8F0;">🏷️</div>
                    <h3>Pricing &amp; Fare Clarity</h3>
                    <p>Multiple observations around users not understanding what they were paying for. Fare labels like "Standard" or "Plus" meant nothing without context. Needed plain-language explanations and visual hierarchy.</p>
                </div>
                <div class="info-card">
                    <div class="research-icon" style="background:#EEF2FF;">🧭</div>
                    <h3>Navigation &amp; Flow Confidence</h3>
                    <p>Users lost confidence when they couldn't track their progress. Notes clustered around missing step indicators, ambiguous back navigation, and uncertainty about what action came next.</p>
                </div>
                <div class="info-card">
                    <div class="research-icon" style="background:#F0FDF4;">🤝</div>
                    <h3>Trust &amp; Transparency</h3>
                    <p>Observations about users feeling manipulated by upsell patterns, unclear seat availability, and a fear of making an irreversible mistake. Trust is built through honesty, not design tricks.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ CUSTOMER JOURNEY MAP ══ -->
    <section id="journey-map" class="container">
        <p class="label">06. Customer Journey Map</p>
        <h2>Mapping the full experience, <span class="highlight italic">not just the app screens</span></h2>
        <p style="max-width:680px; margin-bottom: 2rem;">The customer journey map brought together everything from the research phase into a single view: the stages a user moves through from first intent to post-booking, what they feel at each step, what questions they have, and where the biggest design opportunities lie.</p>
        <div class="img-placeholder flyux-img-constrained">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Fly UX/PaulineNoel-Project6.jpg" alt="FlyUX customer journey map across all booking stages">
            <span>Customer journey map &mdash; from search intent to post-booking</span>
        </div>
    </section>

    <!-- ══ USER FLOW ══ -->
    <section id="user-flow" class="container">
        <div class="section-shell-dark">
            <p class="label-dark">07. User Flow &amp; Design Strategy</p>
            <h2 class="dark-mode-txt">From insights to architecture</h2>
            <p class="dark-mode-txt" style="max-width:680px;margin-bottom:2rem;">With the research synthesised, I mapped out the user flow for the full booking journey: from opening the app to receiving a booking confirmation. Every screen, every decision point, every branching path. This became the blueprint for the wireframes.</p>
            <div class="img-placeholder flyux-img-scroll">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Fly UX/Flow Diagram air ux-2x.jpg" alt="FlyUX user flow diagram showing the complete booking journey">
                <span>User flow diagram &mdash; scroll to explore the full journey</span>
            </div>
            <div class="flow-steps" style="margin-top:2rem;">
                <div class="flow-step">
                    <div class="flow-step__dot">1</div>
                    <div class="flow-step__content">
                        <strong>Search &amp; Date Selection</strong>
                        <p>User enters origin, destination, and travel dates. Clear fare calendar view shows price variations by date.</p>
                    </div>
                </div>
                <div class="flow-step">
                    <div class="flow-step__dot">2</div>
                    <div class="flow-step__content">
                        <strong>Flight Results &amp; Fare Selection</strong>
                        <p>Results shown with direct flights first. Fare tiers presented with plain-language descriptions and a clear comparison of what each includes.</p>
                    </div>
                </div>
                <div class="flow-step">
                    <div class="flow-step__dot">3</div>
                    <div class="flow-step__content">
                        <strong>Passenger Details</strong>
                        <p>Streamlined passenger form with smart defaults. No unnecessary fields, no upsell interruption at this stage.</p>
                    </div>
                </div>
                <div class="flow-step">
                    <div class="flow-step__dot">4</div>
                    <div class="flow-step__content">
                        <strong>Seat Selection &amp; Extras</strong>
                        <p>Seat map with clear visual distinction between seat types. Extras offered once, contextually, not as a repeated gauntlet.</p>
                    </div>
                </div>
                <div class="flow-step">
                    <div class="flow-step__dot">5</div>
                    <div class="flow-step__content">
                        <strong>Review &amp; Payment</strong>
                        <p>Full order summary before payment. No hidden fees, no last-minute surprises. Payment screen is calm and focused.</p>
                    </div>
                </div>
                <div class="flow-step">
                    <div class="flow-step__dot">6</div>
                    <div class="flow-step__content">
                        <strong>Confirmation</strong>
                        <p>Booking confirmed with all key details clearly visible. Option to add to wallet or calendar immediately.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ WIREFRAMES ══ -->
    <section id="wireframes" class="container">
        <p class="label">08. Wireframes</p>
        <h2>Structure first, <span class="highlight italic">style second</span></h2>
        <p style="max-width:680px;margin-bottom:2rem;">With the user flow confirmed, I moved into wireframing. Every layout decision is traceable back to a research finding. Screens were reviewed, iterated on, and tested before moving to prototype.</p>
        <div class="img-placeholder">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Fly UX/FlyUX - complete wireframe.png" alt="FlyUX complete wireframe screens overview">
            <span>Complete wireframe set &mdash; all screens in the booking flow</span>
        </div>
    </section>

    <!-- ══ PROTOTYPE PLACEHOLDER ══ -->
    <section id="prototype" class="container">
        <div class="section-shell" style="text-align:center; padding: 4rem 2rem;">
            <p class="label" style="text-align:center;">09. Final Screens &amp; Prototype</p>
            <h2 style="margin-bottom:1rem;">High-fidelity screens <span class="highlight italic">coming soon</span></h2>
            <p style="max-width:540px;margin:0 auto 1.5rem;color:var(--color-text-muted);">The final UI screens and interactive prototype are in preparation and will be added here shortly. This section will show the complete high-fidelity design across all booking flow screens.</p>
            <div style="display:inline-flex;align-items:center;gap:0.5rem;background:var(--color-surface-2,#f3f4f6);border-radius:100px;padding:0.6rem 1.25rem;font-size:0.875rem;color:var(--color-text-muted);">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M8 5v3.5l2 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                Screens &amp; prototype to be added
            </div>
        </div>
    </section>

    <!-- ══ RESULTS ══ -->
    <section id="results" class="container">
        <div class="section-shell-pink">
            <p class="label">10. What I Learned</p>
            <h2>The research is the design</h2>
            <p style="max-width:680px;">This project changed how I think about UX work. The time I spent benchmarking, watching users struggle, and mapping every emotion in the journey didn't feel like "research before the real work" — it was the work. Every screen in the final prototype is better because of what I learned before I started drawing.</p>
            <div class="three-column-grid" style="margin-top:2rem;">
                <div class="info-card">
                    <div class="research-icon" style="background:#FDE8F0;">🔬</div>
                    <h3>Research grounds decisions</h3>
                    <p>Every layout choice, every label, every step in the flow has a reason. I can trace it back to something a test participant said or a pattern I spotted in benchmarking.</p>
                </div>
                <div class="info-card">
                    <div class="research-icon" style="background:#EEF2FF;">👥</div>
                    <h3>Users don't read, they scan and guess</h3>
                    <p>Watching real users navigate airline apps taught me more about information hierarchy than any textbook. People skip things, assume things, and backtrack more than designers expect.</p>
                </div>
                <div class="info-card">
                    <div class="research-icon" style="background:#F0FDF4;">🎯</div>
                    <h3>Clarity beats cleverness</h3>
                    <p>The best UX decisions in this project were the simplest ones: better labels, fewer steps, a persistent progress indicator. The biggest improvements came from removing friction, not adding features.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ FOOTER CTA ══ -->
    <section id="contact" class="container">
        <div class="footer-cta">
            <p class="label">Like what you see?</p>
            <h2>Let's work together</h2>
            <p>I'm a designer who cares about both how something works and how it looks. If you're looking for someone to bring rigour and craft to your next project, I'd love to hear from you.</p>
            <a href="mailto:info@paulinedesigned.it" class="primary-btn btn">Get in touch</a>
        </div>
    </section>

</main>
<?php get_footer(); ?>
