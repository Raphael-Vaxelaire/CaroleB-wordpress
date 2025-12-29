<?php
get_header();

$date = get_field('date');
$dimensions = get_field('dimensions');
$description = get_field('description');
$image = get_field('image');
$size = 'medium_large';
?>

<main id="main-content" class="site-main">
    <section class="oeuvre">
        <?php

        if ($image) {
            echo wp_get_attachment_image($image, $size);
        } ?>

        <h1 class="oeuvre-title"><?php the_title() ?></h1>

        <?php
        if (!empty($image && $description)): ?>
            <h4 class="oeuvre-date"><?= $date ?></h4>
            <h4 class="oeuvre-dimensions"><?= $dimensions ?></h4>
            <p class="oeuvre-description"><?= $description ?></p>
        <?php endif;
        ?>
    </section>
</main>

<?php
get_footer();