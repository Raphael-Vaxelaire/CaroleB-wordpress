<?php

get_header();


?>

 <?php
        $query = new WP_Query(array(
            'post_type' => 'post-bio',
            'p' => 274
        ));

        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                
                the_content();
            endwhile;
        endif;

        wp_reset_postdata();
        ?>

         <?php
        $query = new WP_Query(array(
            'post_type' => 'post-bio',
            'p' => 275
        ));

        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                
                the_content();
            endwhile;
        endif;

        wp_reset_postdata();
        ?>
<?php
get_footer();