<?php get_header(); ?>

<main>
  <div class="post-container">
    <!-- The loop start -->
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_id(); ?>" class="post <?php post_class(); ?>">
      <!-- Post title -->
      <h1 class="post-title"><?php the_title(); ?></h1>
      <!-- Post thumbnail -->
      <div class="post-thumbnail">
        <img src="<?php the_post_thumbnail( 'large' ); ?>" />
      </div>
      <!-- Meta info -->
      <div class="post-meta-info">
        <p class="post-author">Created on: <?php echo get_the_date(); ?></p>
        <p class="post-categories">Categories: <?php the_category( ', ' ); ?></p>
        <p class="post-tags">Tags: <?php the_tags( '', ', ' ); ?></p>
      </div>
      <!-- Main blog content -->
      <p class="post-content"><?php the_content(); ?></p>
    </article>
    
    <?php endwhile; ?>

  </div>
</main>

<?php get_footer(); ?>