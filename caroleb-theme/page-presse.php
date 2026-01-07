<?php
get_header();
?>

<main id="main-content" class="site-main">
    <section class="media-intro">
        <h1 class="presse-title"> <?php the_title(); ?></h1>
    </section>
    <?php the_content(); ?>
</main>

<?php
get_footer();