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
        <ul class="oeuvre-list">
            <li>
                <h1 class="oeuvre-title"> <?php the_title() ?> </h1>
            </li>
            <li>
                <h2 class="oeuvre-dimensions"><?= $date ?></h2>
            </li>
        </ul>
        <div class="oeuvre-info">
            <?php if ($image) {
                echo wp_get_attachment_image($image, $size);
            } ?>
            <?php if (!empty($image && $description)): ?>
                <h2 class="oeuvre-dimensions"><?= $dimensions ?></h2>
                <p class="oeuvre-description"><?= $description ?></p>
            <?php endif;
            ?>
        </div>
    </section>
</main>

<?php
get_footer();