<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aiia
 */
 /*
 Template Name: resource
 */
get_header();
?>
<header class="container-fluid resourceHeader" >
    <?php
     $hero = get_field('hero', $post->ID);
     if($hero) {
        echo '<img  src="' . $hero['url'] . '">';
    }
    ?>
</header>

<section class="container resourceContent">
    <?php
    $post_id = get_the_ID(); // Get the current post ID
    $content = get_post_field('post_content', $post_id); // Retrieve the raw content
    $content = apply_filters('the_content', $content); // Apply the content filters to format it
    echo $content; // Output the content
    ?>
</section>

<?php get_footer(); ?>
