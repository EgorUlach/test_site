<?php
/*
Template Name: News Page
*/
get_header(); ?>

<main>
    <h1>Новости</h1>
    <?php
    $news_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => -1,
    ));
    if ($news_query->have_posts()) : while ($news_query->have_posts()) : $news_query->the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>">Подробнее</a>
        </article>
    <?php endwhile; endif; wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>
