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
    <div class="container resourceHeader__content">
        <div class="pointer">
            <div></div>
            <p class="body-large text-white">   
            <?php
                $parent_id = wp_get_post_parent_id(get_the_ID());
                echo get_the_title($parent_id);
                echo " > ";
                $post_tags = get_the_tags($parent_id);
                 if ($post_tags) {
                echo $post_tags[0]->name . ' ';
                 } else {
                echo 'No tags found for this post.';
              }
            ?>

            </p>
        </div> 
        <h1 class="text-white"><?php echo wp_title('', true, 'right'); ?></h1>
        <p class="body-small text-white text-center">Last Updated: <?php echo get_the_modified_time('F j, Y'); ?></p>
   </div>
</header>
<section class="container resourceMainContent">
    <div class="row ">     
        <div class="col-md-4 col-12 resourceMainContent__sidebar order1 ">
            <div class="resourceMainContent__sidebar_border ">
                <div class="resourceMainContent__sidebar_preparing">  
                    <?php
                    if ($parent_id) {
                        echo '<h5><a>' . $post_tags[0]->name . ' ' . '</a></h5>';
                    } else {
                        echo 'This post has no parent.';
                    }
                    ?>
 


                    <?php
                    // Include WordPress core files
                    require_once ('wp-load.php');

                    // Get all published posts
                    $childrenPosts = get_children( array(
                        'post_parent' => wp_get_post_parent_id(get_the_ID()), // The parent id.
                        'post_type'   => 'resource',
                        'post_status' => 'publish',
                        'numberposts' => -1, // Retrieve 3 posts
                    ));
                    unset($childrenPosts[get_the_ID()]);

                    echo '<h6 style="font-weight:bold">';
                        echo  wp_title('', true, 'right');
                    echo '</h6>'; 
                    if ($childrenPosts) {
                        foreach ($childrenPosts as $recentPost) {
                            echo '<h6>';
                            echo '<a class="text-decoration-none " href="'. get_permalink($recentPost).'" style="color:#132554">'
                                    . esc_html($recentPost->post_title)  . '
                                  </a>';
                            echo '</h6>';
                        }
                    
                    } 
                    ?>
                </div>

                <div class="blogSidbar__Directory">
                    <h5>Directory of Professionals</h2>
                    <div class="my-4 blogSidbar__Directory_Image">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/cardbox1.png'; ?>">
                    </div>
                    <p class="fs-6 fw-bold">AIIA has curated a list of the top professionals from attorneys, investment
                        specialists, to business plan writers to support all all EB-5 stakeholders</p>
                    <div class="fw-bold">
                        <a class="text-decoration-none " href="/directory-of-professionals/" style="color:#1651A5"> View Directory of Professionals
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                    fill="#1651A5" style="margin-left:8px; margin-bottom: 5px;">
                                    <path
                                        d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                        fill="#1651A5" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-12 resourceMainContent__content order2 ">
            <?php
            $post_id = get_the_ID(); // Get the current post ID
            $content = get_post_field('post_content', $post_id); // Retrieve the raw content
            $content = apply_filters('the_content', $content); // Apply the content filters to format it
            echo $content; // Output the content
            ?>
        </div>

    </div>

</section>
<section class="container resourceMoreresource">
    <div class="pointer">
        <div></div>
        <p class="body-large">
        <?php echo get_ACF_by_filed('more_resource_subtitle');?>
        </p>
    </div> 
    <h2>
    <?php echo get_ACF_by_filed('more_resource_title');?>
    </h2>
 
    <div class="row resourceMoreresource__cards">

        <?php

        // Include WordPress core files
        require_once ('wp-load.php');

        // Get all published posts
        $posts = get_posts(
            array(
                'post_type' => 'resource', // Change to 'page' if you want pages instead
                'post_status' => 'publish',
                'post_parent' => 0, // This ensures only parent posts are retrieved
                'numberposts' => 3, // Retrieve 3 posts
            )
        );

        for ($i = 0;  $i <= count($posts)-1 ; $i++) {
            if ($posts[$i]->ID != wp_get_post_parent_id(get_the_ID())){
                $postsWithoutCurrentID[$i] = $posts[$i];
            }
        };

        if(count($postsWithoutCurrentID) == count($posts)){
            array_pop($postsWithoutCurrentID);
        };

        if ($postsWithoutCurrentID) {
            foreach ($postsWithoutCurrentID as $recentPost) {
                $hero = get_field('hero', $recentPost->ID);
                // $summary = get_field('summary', $recentPost->ID);
                echo '<div class="col-md-6">';
                echo '<div class="my-4 Moreresource__card-image">';
                if($hero){
                    echo '<img class="w-100 h-100" src="' . $hero['url'] . '"alt="";>';
                }
                echo '</div>';
                if($recentPost->post_title){
                    echo '<h4>' . esc_html($recentPost->post_title) .'</h4>';
                }
                // echo '<p class="body-large">'.$summary.'</p>';
                echo '<a class="text-decoration-none " href="'. get_permalink($recentPost).'" style="color:#1651A5">Learn More
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
            }
        
        } else {
            echo 'No posts found.';
        }
        ?>
    </div>

</section>

<section class="container my-5 find">
    <h3 class="text-white text-center">Can’t Find The Right Resource?</h3>
    <p class="text-white text-center body-large">Use this tool before to find the most applicable EB-5 resource for your needs.</p>
    <div class="find__form">
        <form class="row">
            <div  class="col-md-5 find__form-item">
                <select id="disabledSelect" class="w-100 h-100 px-3">
                    <option>I am...t</option>
                </select>
            </div>
            <div  class="col-md-5 find__form-item">
                <select id="disabledSelect" class="w-100 h-100 px-3">
                    <option>Looking for...</option>
                </select>
            </div>
            <button type="submit" class="col-md-2 Button ZodiacButton ">Go
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92624 1.71C3.48256 1.71 1.50156 3.69099 1.50156 6.13467C1.50156 8.57835 3.48256 10.5593 5.92624 10.5593C8.36992 10.5593 10.3509 8.57835 10.3509 6.13467C10.3509 3.69099 8.36992 1.71 5.92624 1.71ZM0.101562 6.13467C0.101562 2.91779 2.70936 0.309998 5.92624 0.309998C9.14312 0.309998 11.7509 2.91779 11.7509 6.13467C11.7509 9.35155 9.14312 11.9593 5.92624 11.9593C2.70936 11.9593 0.101562 9.35155 0.101562 6.13467Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.73774 9.52918C10.0033 9.26363 10.4339 9.26363 10.6994 9.52918L13.6994 12.5292C13.965 12.7947 13.965 13.2253 13.6994 13.4908C13.4339 13.7564 13.0033 13.7564 12.7377 13.4908L9.73774 10.4908C9.47219 10.2253 9.47219 9.79474 9.73774 9.52918Z" fill="white"/>
                </svg>
            </button>
        </form>
    </div>
</section>
<!-- <section class="container-fluid getInTouch">
    <div class="row h-100 justify-content-between">
        <div class="col-md-5 getInTouch__image">            
        </div>
        <div class="col-md-5 col-12 m-auto getInTouch__content">
            <h2 class="text-white">Get In Touch With Us</h2>
            <p class="body-base text-white my-4">If you have any questions, inquiries, or collaboration proposals,
                please don’t hesitate to reach out to us.</p>
            <div>
                <form class="d-flex my-4" role="subscribe">
                    <button class="Button WhiteButton" type="submit">Get In Touch</button>
                </form>
            </div>
        </div>
    </div>
</section> -->
<?php get_footer(); ?>
