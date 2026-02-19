<?php get_header(); ?>

<main id="main" class="site-main">
  <section class="container page-header">
    <h1><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?>
      <p class="lead"><?php echo get_the_excerpt(); ?></p>
    <?php endif; ?>
  </section>

  <section class="container projects-grid">
    <?php
      // If you're using a CPT called "project", switch post_type accordingly.
      $query = new WP_Query([
        'post_type'      => 'post', // change to 'project' if you have a CPT
        'posts_per_page' => 12,
        'orderby'        => 'date',
        'order'          => 'DESC',
      ]);

      if ( $query->have_posts() ) :
        echo '<div class="grid">';
        while ( $query->have_posts() ) : $query->the_post();
          get_template_part('template-parts/loop', 'project'); // you already have loop-project.php
        endwhile;
        echo '</div>';
        wp_reset_postdata();
      else :
        echo '<p>No projects yet — coming soon.</p>';
      endif;
    ?>
  </section>
</main>

<?php get_footer(); ?>
