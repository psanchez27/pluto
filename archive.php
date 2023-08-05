<?php get_header(); ?>

<main>
  <div class="archive-container">
    <?php
      while ( have_posts() ) : the_post();
    ?>
    <!-- Page content -->
    <article class="archive-query-item">
      <!-- Title -->
      <h2 class="archive-query-title"><?php the_title(); ?></h2>

      <!-- thumbnail -->
      <div class="archive-query-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
      </div>

      <!-- Meta info -->
      <div class="archive-query-meta-info">
        <div class="archive-author">Posted by: <?php the_author_post_link(); ?> on: <?php echo get_the_date(); ?></div>
        <div class="archive-categories">Categories: <?php the_category( ', ' ) ?></div>
        <div class="archive-tags">Tags: <?php the_tags( '', ', ' ); ?></div>
      </div>

      <!-- archive content -->
      <p class="archive-content"><?php the_content(); ?></p>
    </article>

    <?php endwhile; ?>

  </div>
</main>

<?php get_footer(); ?>