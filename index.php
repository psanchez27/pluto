<?php get_header(); ?>

<main>
  <div class="posts-container">
    <!-- The Loop Start-->
    <?php
      if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
    ?>

    <!-- Page content -->
    <article class="post-query-item">
      <!-- Title -->
      <h2 class="post-query-title"><?php the_title(); ?></h2>

      <!-- thumbnail (image) -->
      <div class="post-query-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
      </div>

      <!-- Meta info -->
      <div class="post-query-meta-info">
        <p class="post-author">Posted by: <?php the_author_post_link(); ?> on: <?php echo get_the_date(); ?></p>
        <p class="post-categories">Categories: <?php the_category( ', ' ); ?></p>
        <p class="post-tags">Tags: <?php the_tags( '', ', ' ); ?></p>
      </div>

      <!-- The post content -->
      <p class="post-query-content"><?php the_content(); ?></p>
    </article>

    <?php endwhile; ?>

    <!-- Pagination -->
    <div class="pluto-pagination">
      <div class="pagination-left"><?php previous_posts_link( 'Prev Posts' ); ?></div>
      <div class="pagination-right"><?php next_posts_link( 'Next Posts' ); ?></div>
    </div>

    <?php else: ?>

    <p>Sorry, no posts at the moment. Please return soon!</p>

    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>