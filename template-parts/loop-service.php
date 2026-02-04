<?php
$projects = new WP_Query([
  'post_type'      => 'service',
  'posts_per_page' => 6
]);

if ($projects->have_posts()) :
  while ($projects->have_posts()) : $projects->the_post();
?>
  <article class="project-card">
    <h3><?php the_title(); ?></h3>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>">View project</a>
  </article>
<?php
  endwhile;
  wp_reset_postdata();
endif;
