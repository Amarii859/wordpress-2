<?php get_headers(); ?>

<main class="blog-list">
    <h1 class="blog-title">Latest Blog Posts </h1>

<?php if (have_post()  :) ?>
<?php while (have_posts()) : the_post(); ?>
<article><?php pst_class('blog-item'); ?></article>
<h2 class = "blog-item__title">
    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
</h2>
<p class="blog-item__excerpt">
    <?php the_excerpt(); ?>

</p>
</article>
<?php endwhile: ?>

    <nav class="pagination">
        <?php the_posts_pagination() ?>
     </nav>

    <?php else : ?>
        <p>no posts found</p>
        <?php endif; ?>
    </main>

<?php get_footer(); ?>

