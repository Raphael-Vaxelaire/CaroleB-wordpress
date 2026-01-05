<?php
get_header();
?>

<main id="main-content" class="site-main">
    <section class="collection-privee-intro">
        <h1> <?php the_title(); ?></h1>
        <?php the_content() ?>
    </section>

    <nav class="collection-privee-nav">
        <?php
        $subpages = get_pages([
            'child_of' => 86,
            'sort_column' => 'menu_order'
        ]);

        if ($subpages) {
            echo '<ul class="collection-privee-nav-list">';
            foreach ($subpages as $page) {
                echo '<button class="collection-privee-button">
                    <a class="collection-privee-a" href="' . get_permalink($page->ID) . '">' . $page->post_title . '</a>
                </button>
                </li>';
            }
            echo '</ul>';
        }
        ?>
    </nav>

    <section>
        <?php
        $oeuvre_query = new WP_Query(array(
            'post_type' => 'oeuvre',
            'posts_per_page' => 12,
            'post_status' => 'publish',
            'cat' => '11'
        ));
        ?>

        <?php if ($oeuvre_query->have_posts()): ?>
            <ul class="collection-privee-wrapper">
                <?php while ($oeuvre_query->have_posts()):
                    $oeuvre_query->the_post(); ?>
                    <li class="collection-privee-items">
                        <?php
                        $image = get_field('image');
                        $size = 'medium';
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if ($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                            ?>
                        </a>
                        <p class="collection-privee-item-title">
                            <?php the_title(); ?>
                        </p>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="collection-privee-pagination">
                <?php
                echo paginate_links(array(
                    'total' => $oeuvre_query->max_num_pages
                ));
                ?>
            </div>

            <?php wp_reset_postdata();
        elseif (!$oeuvre_query->have_posts()): ?>
            <p class="collection-privee-p">
                <?php
                echo 'Pas doeuvre presente';
                ?>
            </p>
        <?php endif; ?>
    </section>

</main>
<?php
get_footer();
