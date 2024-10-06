<?php
/*
Template Name: About Us
*/

get_header();
?>


    <section class=" container aboutusHeader ">

        <h1><?php echo wp_title('', true, 'right'); ?></h1>
        <div>
        <?php
            $post_id = get_the_ID(); // Get the current post ID
            $content = get_post_field('post_content', $post_id); // Retrieve the raw content
            $content = apply_filters('the_content', $content); // Apply the content filters to format it
            echo $content; // Output the content
            ?>
        </div>

    </section>





<?php get_footer(); ?>