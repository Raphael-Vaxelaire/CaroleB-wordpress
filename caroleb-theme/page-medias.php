<?php
get_header();
?>

<main>
    <h1 class="h1"><?php the_title(); ?> </h1>

    <section class="media-wrapper">
        <?php the_content(); ?>
    </section>
</main>

<?php
get_footer();