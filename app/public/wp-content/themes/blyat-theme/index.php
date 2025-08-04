<?php get_header(); ?>

<main>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <section class="posts">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post">
                <h2 class="post-title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>
        <?php endwhile;
        endif; ?>
    </section>
</main>

<?php get_footer(); ?>