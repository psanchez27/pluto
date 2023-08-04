<?php get_header(); ?>

<main>
  <section class="page-content-wrapper">

    <?php
    while (have_posts()) : the_post();
    ?>
      <div class="page-content">
        <?php
        the_content();
        ?>
      </div>
    <?php endwhile; ?>

  </section>
</main>

<?php get_footer(); ?>