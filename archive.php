<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1> <?php the_title() ?> </h1>

        <?php the_post_thumbnail()?>
        <?php the_content() ?>

    <?php endwhile;
else : ?>

    <h1>Pas d'articles à signaler ici, ok ? compris</h1>

<?php endif; ?>


<?php get_footer() ?>