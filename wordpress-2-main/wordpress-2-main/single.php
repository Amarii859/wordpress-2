<?php get_header(); ?>


<main class="single-post">

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

<article <?php post_class('post-card'); ?>>

<?php if (has_post_thumbnail()) : ?>
    <div class="post_thumb">
        <?php the_post_thumbnail('large');?>
    </div>
    <?php endif; ?>
    <div class ="post-contetnt">
        <h1 class="post-tittle"><?php the_title(); ?></h1>

        <div class="post-body">
            <?php the_content(); ?>
        </div>
        <div class="comments-area">
            <?php if (comments_open() || get_comments_numbers()):
            comments_template();
            endif; ?>
        </div>
    </div>
        </articles>

        <?php endwhile; endif; ?>
        </main>

        <?php get_footer(); ?>