<?php
get_header();
the_post_thumbnail();
the_title();
// the_content();

$titre = get_field('titre');

$image = get_field('image');
$size = 'full';
if ($image) {
    echo wp_get_attachment_image($image, $size);
}

$description = get_field('description');

if (!empty($titre && $image && $description)): ?>
    <h1><?= $titre ?></h1>
    <p><?= $description ?></p>
<?php endif;

get_footer();

