<?php get_header(); ?>

<main>
    <section class="accueil-post1">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'post-acceuil',
            'p' => 227
        ));
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                the_title('<h1 class="accueil-title">', '</h1>');
                the_content();
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </section>

    <section class="accueil-post2">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'post-acceuil',
            'p' => 389
        ));
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                the_title('<h2 class="accueil-subtitle1">', '</h2>');

                the_content();
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </section>

    <section class="accueil-post3">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'post-acceuil',
            'p' => 391
        ));
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                the_title('<h2 class="accueil-subtitle2">', '</h2>');

            endwhile;
        endif;
        wp_reset_postdata();
        ?>
        <?php
        $post_id = 391;

        $img1 = get_field('image_1', $post_id);
        $img2 = get_field('image_2', $post_id);
        $img3 = get_field('image_3', $post_id);
        $img4 = get_field('image_4', $post_id);
        $img5 = get_field('image_5', $post_id);
        $img6 = get_field('image_6', $post_id);
        ?>
        <div class="mosaic oeuvre">
            <div class="col left col2">
                <?php if ($img1)
                    echo wp_get_attachment_image($img1, 'large'); ?>
                <?php if ($img5)
                    echo wp_get_attachment_image($img5, 'large'); ?>
            </div>
            <div class="col right">
                <?php if ($img6)
                    echo wp_get_attachment_image($img6, 'large'); ?>
                <div class="row-small">
                    <?php if ($img4)
                        echo wp_get_attachment_image($img4, 'large'); ?>
                    <div class="raw-small2">
                        <?php if ($img2)
                            echo wp_get_attachment_image($img2, 'large'); ?>
                        <?php if ($img2)
                            echo wp_get_attachment_image($img2, 'large'); ?>
                    </div>

                </div>
                <?php if ($img3)
                    echo wp_get_attachment_image($img3, 'large'); ?>

            </div>
        </div>
        <?php
        $query = new WP_Query(array(
            'post_type' => 'post-acceuil',
            'p' => 391
        ));

        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                the_content();

            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </section>

    <section class="accueil-post4">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'post-acceuil',
            'p' => 394
        ));
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                the_title('<h2 class="accueil-subtitle3
                ">', '</h2>');

            endwhile;
        endif;
        wp_reset_postdata();
        ?>
        <?php echo do_shortcode('[metaslider id="425"]'); ?>
        <?php
        $query = new WP_Query(array(
            'post_type' => 'post-acceuil',
            'p' => 394
        ));
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                the_content();

            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </section>

</main>
<?php get_footer(); ?>
<!-- jfhdfbdjf -->