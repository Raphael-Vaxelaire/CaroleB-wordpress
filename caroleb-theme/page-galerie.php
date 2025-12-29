<?php
get_header();
?>

<main id="main-content" class="site-main">
    <h1 class="h1"><?php the_title(); ?> </h1>

    <nav class="galerie-nav">
        <?php
        $subpages = get_pages([
            'child_of' => get_the_ID(),
            'sort_column' => 'menu_order'
        ]);

        if ($subpages) {
            echo '<ul class="nav-list">';
            foreach ($subpages as $page) {
                echo '<li class="list-individual">
                <a class="list-a" href="' . get_permalink($page->ID) . '">' . $page->post_title . '</a>
                </li>';
            }
            echo '</ul>';
        }
        ?>
    </nav>

    <section>
        <?php

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $oeuvre_query = new WP_Query(array(
            'post_type' => 'oeuvre',
            'posts_per_page' => 12,
            'paged' => $paged
        ));
        ?>

        <?php if ($oeuvre_query->have_posts()): ?>
            <ul class="galerie-wrapper">
                <?php while ($oeuvre_query->have_posts()):
                    $oeuvre_query->the_post(); ?>

                    <li class="galerie-items">
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
                    </li>

                <?php endwhile; ?>
            </ul>

            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $oeuvre_query->max_num_pages
                ));
                ?>
            </div>

            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </section>

</main>

<?php
get_footer();
