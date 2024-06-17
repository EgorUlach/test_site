<?php get_header(); ?>

<main>
    <h1>Главная страница Егор</h1>
    <section>
        <h2>3 последние новости</h2>
        <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 3,
            'post_status' => 'publish'
        ));
        foreach ($recent_posts as $post) :
        ?>
            <article>
                <h3><?php echo $post['post_title']; ?></h3>
                <?php if (has_post_thumbnail($post['ID'])) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url($post['ID']); ?>" alt="<?php echo $post['post_title']; ?>">
                <?php endif; ?>
                <a href="<?php echo get_permalink($post['ID']); ?>">Подробнее</a>
            </article>
        <?php endforeach; wp_reset_query(); ?>
    </section>
</main>

<?php get_footer(); ?>