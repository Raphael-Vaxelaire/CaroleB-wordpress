<?php
get_header();
?>

<main id="main-content" class="site-main">
    <h1 class="h1"><?php the_title(); ?> </h1>

    <nav class="galerie-nav">
        <?php
        // $subpages = get_pages([
        //     'child_of' => get_the_ID(),
        //     'sort_column' => 'menu_order'
        // ]);
        
        // if ($subpages) {
        //     echo '<ul class="nav-list">';
        //     foreach ($subpages as $page) {
        //         echo '<li class="list-individual">
        //         <a class="list-a" href="' . get_permalink($page->ID) . '">' . $page->post_title . '</a>
        //         </li>';
        //     }
        //     echo '</ul>';
        // }
        ?>
    </nav>

    <section class="galerie-wrapper">
        <?php

        $slug = 'collections-privées';
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type' => 'oeuvre',
            'name' => $slug
        ));

        if ($posts): ?>
            <ul>
                <?php foreach ($posts as $post):
                    setup_postdata($post);
                    ?>
                    <li>
                        <?php
                        $image = get_field('image');
                        $size = 'medium';
                        ?>
                        <a href="
                        <?php the_permalink(); ?>"><?php if ($image) {
                              echo wp_get_attachment_image($image, $size);
                          } ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php wp_reset_postdata();
        endif; ?>
    </section>

</main>

<?php
get_footer();