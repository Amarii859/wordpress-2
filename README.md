<?php get_header(); ?>

<main id="main-content">

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-content">
      <img src="<?php echo get_template_directory_uri(); ?>/images/ac-milan-logo.png" alt="AC Milan Logo" class="logo">

      <h1>AC Milan</h1>
      <p>More Than a Club</p>
      <a href="#about" class="btn">Learn More</a>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <section id="about" class="about">
    <h2>About AC Milan</h2>
    <p>
      AC Milan is one of the most successful football clubs in the world.
      Founded in 1899, the club is based in Milan, Italy.
    </p>
  </section>

  <!-- LATEST POSTS -->
  <section class="posts">
    <h2>Latest News</h2>

    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
        <article class="post">
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>">Read more</a>
        </article>
      <?php endwhile;
    else :
      echo '<p>No posts found.</p>';
    endif;
    ?>
  </section>

</main>

<?php get_footer(); ?>