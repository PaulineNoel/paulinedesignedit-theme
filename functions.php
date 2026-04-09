<?php
/**
 * Theme functions
 */

/**
 * Enqueue theme styles
 */
function pauline_styles() {
	wp_enqueue_style(
		'pauline-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		filemtime( get_template_directory() . '/assets/css/main.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'pauline_styles' );

function pauline_scripts() {
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'pauline_scripts');

/**
 * Theme setup
 */
function pauline_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

	// Custom logo support
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'pauline_theme_setup' );

// =============================================================================
// SEO — titles, descriptions, Open Graph, JSON-LD structured data
// Works with Rank Math SEO (active plugin). All overrides go through Rank Math
// filters so nothing is duplicated in the <head>.
// =============================================================================

/**
 * Per-page SEO data map.
 * Keys match WordPress page slugs (post_name), plus 'front' for the homepage.
 */
function pauline_seo_data() {
    $img = get_template_directory_uri() . '/assets/images/';

    return [
        'front' => [
            'title' => 'Pauline Designed It | UI/UX Designer & Front-End Developer in Brussels',
            'desc'  => 'Pauline Noel — freelance UI/UX designer and front-end developer based in Brussels, Belgium. I design clear, intuitive digital products from research to launch. View my portfolio.',
            'img'   => $img . 'CI Project/Careers International Redesign mockup.png',
        ],
        'about-me' => [
            'title' => 'About Pauline Noel | Freelance UI/UX Designer & Developer, Brussels',
            'desc'  => 'UI/UX designer and front-end developer based in Brussels. I work across the full project — from UX research and design to code and launch. Available for freelance work in Belgium and remotely.',
            'img'   => $img . 'CI Project/Careers International Redesign mockup.png',
        ],
        'projects' => [
            'title' => 'Case Studies | UX & UI Design Portfolio — Pauline Designed It',
            'desc'  => 'UX research, UI design, branding and web development case studies by Pauline Noel — freelance designer and developer based in Brussels, Belgium.',
            'img'   => $img . 'CI Project/Careers International Redesign mockup.png',
        ],
        'ci-project' => [
            'title' => 'Careers International: Full Brand & UX Redesign — Pauline Designed It',
            'desc'  => 'How I transformed Careers International from outdated brand to polished digital product — new visual identity, complete UX overhaul, and animated WordPress build.',
            'img'   => $img . 'CI Project/Careers International Redesign mockup.png',
        ],
        'jobinar-project' => [
            'title' => 'Jobinar: Web Strategy & Platform UX Overhaul — Pauline Designed It',
            'desc'  => 'How I replaced a costly, inflexible video platform with a scalable Wistia-based solution — reducing costs, improving UX, and shipping on time.',
            'img'   => $img . 'Jobinar Project/Jobinar mockup.png',
        ],
        'anita-diamonds-project' => [
            'title' => 'Anita Diamonds: Luxury UI/UX Design — Pauline Designed It',
            'desc'  => 'High-end website design for an Antwerp diamond company: UX research, competitive benchmarking, and a custom diamond repertory feature built in Figma.',
            'img'   => $img . 'Anita Diamonds Project/Anita Diamonds - Mockup - Multi device.png',
        ],
        'flyux-project' => [
            'title' => 'FlyUX: Airline App UX Design — UX Design Institute Diploma — Pauline Designed It',
            'desc'  => 'A complete UX design project for an airline booking app: competitive benchmarking, usability testing, affinity diagrams, customer journey mapping, and a high-fidelity prototype.',
            'img'   => $img . 'Fly UX/Fly UX - Mobile - Mockup.png',
        ],
        'flexina-project' => [
            'title' => 'Flexina: Website UI Design & Prototype — Pauline Designed It',
            'desc'  => 'Website UI design and interactive prototype for Flexina — a clean, modern digital presence designed in Adobe XD for a growing small business.',
            'img'   => $img . 'Flexina Project/Flexina mockup.png',
        ],
    ];
}

/**
 * Return the SEO data key for the current page, or null if not mapped.
 */
function pauline_seo_key() {
    global $post;
    if ( is_front_page() ) return 'front';
    if ( is_page() && ! empty( $post->post_name ) ) {
        $map = pauline_seo_data();
        if ( array_key_exists( $post->post_name, $map ) ) {
            return $post->post_name;
        }
    }
    return null;
}

// ── Title ──────────────────────────────────────────────────────────────────
// Hook at priority 20 so we run after Rank Math (priority 15).
add_filter( 'pre_get_document_title', function( $title ) {
    $key = pauline_seo_key();
    if ( ! $key ) return $title;
    $data = pauline_seo_data();
    return $data[ $key ]['title'];
}, 20 );

// Also override via Rank Math's own title pipeline.
add_filter( 'rank_math/frontend/title', function( $title ) {
    $key = pauline_seo_key();
    if ( ! $key ) return $title;
    $data = pauline_seo_data();
    return $data[ $key ]['title'];
}, 20 );

// ── Meta Description ───────────────────────────────────────────────────────
add_filter( 'rank_math/frontend/description', function( $desc ) {
    $key = pauline_seo_key();
    if ( ! $key ) return $desc;
    $data = pauline_seo_data();
    return $data[ $key ]['desc'];
}, 20 );

// ── Open Graph & Twitter Card ──────────────────────────────────────────────
// Image (applies to both Facebook/LinkedIn and Twitter).
foreach ( [ 'facebook', 'twitter' ] as $network ) {
    add_filter( "rank_math/opengraph/{$network}/title", function( $val ) {
        $key = pauline_seo_key();
        if ( ! $key ) return $val;
        $data = pauline_seo_data();
        return $data[ $key ]['title'];
    }, 20 );

    add_filter( "rank_math/opengraph/{$network}/description", function( $val ) {
        $key = pauline_seo_key();
        if ( ! $key ) return $val;
        $data = pauline_seo_data();
        return $data[ $key ]['desc'];
    }, 20 );

    add_filter( "rank_math/opengraph/{$network}/image", function( $val ) {
        $key = pauline_seo_key();
        if ( ! $key ) return $val;
        $data = pauline_seo_data();
        return $data[ $key ]['img'];
    }, 20 );
}

// ── JSON-LD Structured Data ────────────────────────────────────────────────
// Injects a Person schema (portfolio identity) and BreadcrumbList on case
// study pages via Rank Math's json_ld filter. Rank Math handles WebPage/
// WebSite automatically.
add_filter( 'rank_math/json_ld', function( $data, $jsonld ) {
    $site_url = get_home_url();

    // Person schema — appears on every page, signals to Google who the site is about.
    $data['PaulineDesignedIt_Person'] = [
        '@type'       => 'Person',
        '@id'         => $site_url . '/#person',
        'name'        => 'Pauline Noel',
        'url'         => $site_url,
        'jobTitle'    => 'UI/UX Designer & Front-End Developer',
        'description' => 'Freelance UI/UX designer and front-end developer based in Brussels, Belgium. Specialising in UX research, visual design, branding and WordPress development.',
        'email'       => 'mailto:info@paulinedesigned.it',
        'address'     => [
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Brussels',
            'addressRegion'   => 'Brussels-Capital Region',
            'addressCountry'  => 'BE',
        ],
        'knowsLanguage' => [ 'fr', 'en', 'nl' ],
        'knowsAbout'    => [
            'UI Design', 'UX Design', 'UX Research', 'Front-End Development',
            'WordPress', 'Branding', 'Figma', 'Adobe XD', 'HTML', 'CSS',
        ],
        'hasCredential' => [
            [
                '@type'              => 'EducationalOccupationalCredential',
                'name'               => 'Professional Diploma in UX Design',
                'credentialCategory' => 'Professional Certificate',
                'recognizedBy'       => [
                    '@type' => 'Organization',
                    'name'  => 'UX Design Institute',
                    'url'   => 'https://www.uxdesigninstitute.com',
                ],
            ],
        ],
    ];

    // BreadcrumbList on case study pages.
    $case_studies = [
        'ci-project'             => 'Careers International Brand & UX Redesign',
        'jobinar-project'        => 'Jobinar: Web Strategy & Platform UX Overhaul',
        'anita-diamonds-project' => 'Anita Diamonds: Luxury UI/UX Design',
        'flyux-project'          => 'FlyUX: Airline App UX Design',
        'flexina-project'        => 'Flexina: Website UI Design & Prototype',
    ];

    global $post;
    if ( is_page() && ! empty( $post->post_name ) && array_key_exists( $post->post_name, $case_studies ) ) {
        $data['PaulineDesignedIt_Breadcrumb'] = [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                [ '@type' => 'ListItem', 'position' => 1, 'name' => 'Home',         'item' => trailingslashit( $site_url ) ],
                [ '@type' => 'ListItem', 'position' => 2, 'name' => 'Case Studies', 'item' => trailingslashit( $site_url ) . 'projects/' ],
                [ '@type' => 'ListItem', 'position' => 3, 'name' => $case_studies[ $post->post_name ], 'item' => get_permalink() ],
            ],
        ];
    }

    return $data;
}, 10, 2 );
