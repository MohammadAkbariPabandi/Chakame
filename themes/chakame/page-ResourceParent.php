<?php
/*
Template Name: Resource Parent
Template Post Type: resource
*/

get_header();
?>

<header class="container-fluid resourceParent__header">
    <?php
     $hero = get_field('hero', $post->ID);
     if($hero) {
        echo '<img  src="' . $hero['url'] . '">';
    }
    ?>
</header>

<section class="container resourceParent__childe">
    <h4>پروژه هایی که با این طبفه بندی اجرا شده</h4>
    <div class="row">
        <?php
        // Include WordPress core files
        require_once ('wp-load.php');
        // Get all published posts
        $posts = get_children( array(
            'post_parent' => $post->ID, // The parent id.
            'post_type'   => 'resource',
            'post_status' => 'publish',
            'numberposts' => -1, // Retrieve 3 posts
        ));


        if ($posts) {
            foreach ($posts as $recentPost) {
                $hero = get_field('hero', $recentPost->ID);
                $summary = get_field('summary', $recentPost->ID);
                echo '<div class="col-md-6 col-12 horizontalCard LazyLoad">';
                echo '<div class="horizontalCard__image">';
                if($hero){
                    echo '<img src="' . $hero['url'] . '">';
                }
                echo '</div>';
                echo '<div class="horizontalCard__content">';
                if($recentPost->post_title){
                    echo '<h5 class="horizontalCard__content_text">' . esc_html($recentPost->post_title) .'</h5>';
                }
                if($summary){
                    echo '<p>'.$summary.'</p>';
                }
                echo '<div class="horizontalCard__content_link">';
                echo '<a class="text-decoration-none " href="'. get_permalink($recentPost).'" style="color:#1651A5">ادامه
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                            fill="#1651A5" style="margin-left:8px; margin-bottom: 5px;">
                            <path
                                d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                fill="#1651A5" />
                        </svg>
                    </span>
                </a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        
        } else {
            echo 'No posts found.';
        }
        ?>
    </div>
</section>

<?php
get_footer();
?>