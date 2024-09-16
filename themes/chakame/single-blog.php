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
get_header();
?>

<section class=" container-fluid blogHeader">

    <div class="container blogHeader__titel">
        <div class="d-flex blogHeader__titel_subject">
            <p></p>
            <a href="#">News & Articles</a>
        </div>
        <h1 class="text-white blogHeader__titel_body"><?php echo wp_title('', true, 'right'); ?></h1>
        <h4 class="text-white blogHeader__titel_info">
            <p>
                <?php
                $post_id = get_the_ID();
                $publish_date = get_post_field('post_date', $post_id);
                $timestamp = strtotime($publish_date);
                $formatted_date = date('jS F, Y', $timestamp);
                echo $formatted_date;
                ?>
            </p>
            <span class="mx-3">|</span>
            <p>
                <?php
                $post_id = get_the_ID(); // Get the current post ID
                $author_id = get_post_field('post_author', $post_id); // Get the author ID
                $author_name = get_the_author_meta('display_name', $author_id); // Get the author's display name
                echo $author_name;
                ?>
            </p>
        </h4>
    </div>


    <div class="container-fluid container-md blogSummary my-0 my-lg-4">
        <P>
            <?php
            $summary = get_field('summary'); // Get the value of the 'summary' custom field               
            if (!empty($summary)) {
                echo $summary;
            }
            ?>
        </P>
    </div>
</section>

<section class="container-md container-fluid  blogHero__image">
    <div class="row h-100">
        <div class="">
            <?php
            $image = get_field('hero'); //acf field name
            if (!empty($image)): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>


<section class="container my-md-5 px-md-0 pb-5 border-bottom">
    <div class="row  justify-content-between">
        <div class="col-md-8 col-12 blogMainContent">
            <!-- <p> -->
            <?php
            $post_id = get_the_ID(); // Get the current post ID
            $content = get_post_field('post_content', $post_id); // Retrieve the raw content
            $content = apply_filters('the_content', $content); // Apply the content filters to format it
            echo $content; // Output the content
            ?>
            <!-- </p> -->
        </div>

        <div class="col-lg-4 col-12 pt-3 blogSidbar ">
            <div class="blogSidbar__subscribe">
                <h5>Subscribe To Our Newsletter</h2>
                    <p class="blogSidbar__subscribe_content">Join our newsletter to stay up to date on what’s new in the
                        EB-5 world</p>
                    <div class="my-3">
                        <form role="subscribe">
                            <div class="row gap-md-0 gap-3 justify-content: space-around">
                                <div class="col-md-8 col-12">
                                    <input class="form-control  border rounded-0 h-100" type="subscribe"
                                        placeholder="Enter your email..." aria-label="subscribe">
                                </div>
                                <div class="col-md-3 col-12">
                                    <button class=" Button ToryButton" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <h6 class="fs-6 fw-light fst-italic blogSidbar__subscribe_subTitle ">
                        By subscribing you agree to with our
                        <span class="text-decoration-underline">Privacy Policy</span>
                        and provide consent to receive updates from our company.
                    </h6>
            </div>


            <div class="blogSidbar__Directory">
                <h5>Directory of Professionals</h2>
                <div class="my-4 blogSidbar__Directory_Image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/cardbox1.png'; ?>">
                </div>
                <p class="fs-6 fw-bold">AIIA has curated a list of the top professionals from attorneys, investment
                    specialists, to business plan writers to support all all EB-5 stakeholders</p>
                    
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


            <div>
                <h5>Related Posts</h2>
                <?php
                
                
                // Include WordPress core files
                require_once ('wp-load.php');
                // Get all published posts
                
                if(get_the_category())
                {
                    $cat_id = get_the_category()[0]->cat_ID;
                    $RelatedPosts = get_posts(
                        array(
                            'post_type' => 'blog', // Change to 'page' if you want pages instead
                            'post_status' => 'publish',
                            'numberposts' => 4, // Retrieve 3 posts
                            'category'   => $cat_id,
                        )
                    );
                    for ($i = 0;  $i <= count($RelatedPosts)-1 ; $i++) {
                        if ($RelatedPosts[$i]->ID !=  get_the_ID()){
                            $relatedPostsWithoutCurrentID[$i] = $RelatedPosts[$i];
                        }
                    };
                    if(count($relatedPostsWithoutCurrentID) == count($RelatedPosts)){
                        array_pop($relatedPostsWithoutCurrentID);
                    };

                }
                
                $posts = get_posts(
                    array(
                        'post_type' => 'blog', // Change to 'page' if you want pages instead
                        'post_status' => 'publish',
                        'numberposts' => 4, // Retrieve 3 posts
                    )
                );
                for ($i = 0;  $i <= count($posts)-1 ; $i++) {
                    if ($posts[$i]->ID !=  get_the_ID()){
                        $postsWithoutCurrentID[$i] = $posts[$i];
                    }
                };

                if(count($postsWithoutCurrentID) == count($posts)){
                    array_pop($postsWithoutCurrentID);
                };

                if (get_the_category() && count($RelatedPosts)> 1 ) {
                    if ($relatedPostsWithoutCurrentID){
                        foreach ($relatedPostsWithoutCurrentID as $recentPost) {
                            $hero = get_field('hero', $recentPost->ID);
                            // $summary = get_field('summary', $recentPost->ID);
                            echo '<div class="horizontalCard">';
                            echo '<div class="horizontalCard__image">';
                            if($hero) {
                                echo '<img src="' . $hero['url'] . '">';
                            }
                            echo '</div>';
                            echo '<div class="horizontalCard__content">';
                            if($recentPost->post_title) {
                                echo '<p class="horizontalCard__content_text">'. esc_html($recentPost->post_title) .'</p>';
                            }
                            echo '<div class="horizontalCard__content_link">';
                            echo '<a class="text-decoration-none " href="'.get_permalink($recentPost).'" style="color:#1651A5">View Pos
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12"
                                        viewBox="0 0 17 12" fill="#1651A5"
                                        style="margin-left:8px; margin-bottom: 5px;">
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
                    }
                } 
                elseif($postsWithoutCurrentID)
                {
                    foreach ($postsWithoutCurrentID as $recentPost) {
                        $hero = get_field('hero', $recentPost->ID);
                        // $summary = get_field('summary', $recentPost->ID);
                        echo '<div class="horizontalCard">';
                        echo '<div class="horizontalCard__image">';
                        if($hero) {
                            echo '<img src="' . $hero['url'] . '">';
                        }
                        echo '</div>';
                        echo '<div class="horizontalCard__content">';
                        if($recentPost->post_title) {
                            echo '<p class="horizontalCard__content_text">'. esc_html($recentPost->post_title) .'</p>';
                        }
                        echo '<div class="horizontalCard__content_link">';
                        echo '<a class="text-decoration-none " href="'.get_permalink($recentPost).'" style="color:#1651A5">View Pos
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12"
                                    viewBox="0 0 17 12" fill="#1651A5"
                                    style="margin-left:8px; margin-bottom: 5px;">
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
                } 
                else
                {
                    echo 'No posts found.';
                }
                ?>

            </div>

        </div>
    </div>

</section>

<section class="container avatar">
    <div class="row border-bottom  justify-content-around align-items-center">
        <div class="col-lg-6 avatar__info">
            <div class="rounded-circle avatar__image">
                <?php
                $avatar = get_avatar($author_id); // Get the avatar image for the author
                
                if ($avatar) {
                    echo $avatar;
                } else {
                    echo "No avatar available for this author.";
                }
                ?>
            </div>
            <h4 class="my-4"><?php echo $author_name; ?></h4>
            <p class="body-base" style="color:#132554">
                <?php
                $author_bio = get_the_author_meta('description', $author_id); // Get the author's bio
                if (
                    !empty($author_bio)
                ) {
                    echo $author_bio;
                }
                ?>
            </p>
        </div>
    </div>
</section>


<section class="container-fluid">
    <div class="container newsLetter">
        <div class="row d-flex">

            <div class="col-md-6">
                <div class="newsLetter__image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/stayUp.jpg'; ?>">
                </div>
            </div>

            <div class="col-md-6">
                <h4 class="text-white">Stay Up To Date With AIIA</h4>
                <p class="body-base text-white my-4">Join our newsletter to stay up to date on EB-5 updates.</p>
                <div>
                    <form class="d-flex my-4" role="subscribe">
                        <input class="form-control me-2 border rounded-0" type="subscribe"
                            placeholder="Enter your email..." aria-label="subscribe">
                        <button class="Button ToryButton" type="submit">Subscribe</button>
                    </form>
                </div>
                <p class="body-base text-white">By subscribing you agree to with our Privacy Policy and provide consent
                    to receive updates from our company.</p>
            </div>
        </div>

    </div>

    <!--comments-section-->
    <?php  
        if (comments_open() || get_comments_number()) {
           comments_template();
        }
    ?>

</section>


<section class="blogconnectProfessional">
    <div class="container-fluid connectProfessional">
        <div class="container">
            <div class="row connectProfessional__content ">
                <div class="col-md-7">
                    <h2 class="text-white">Connect With A Professional</h2>
                    <p class="body-base text-white">AIIA has curated a list of the top professionals from
                        attorneys, investment specialists, to business plan writers to support all all EB-5 stakeholders</p>
                    <div>
                        <form class="d-flex" role="subscribe">
                            <button class="Button LightZodiacButton" type="submit">View Directory Of Professionals</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container blog-articles ">
    <h2 class="mb-4">Articles By Topic</h2>
    <div class="row">
        <form class="blog-articles__Buttons" role="subscribe">
            <button class="GrayPillButton" type="submit">Visa Blacklog</button>
            <button class="GrayPillButton" type="submit">EB-5 Law & Policy</button>
            <button class="GrayPillButton" type="submit">Freedom Of Information Act</button>
            <button class="GrayPillButton" type="submit">Requests</button>
            <button class="GrayPillButton" type="submit">General Updates</button>
            <button class="GrayPillButton" type="submit">Grandfathering/FIFA</button>
            <button class="GrayPillButton" type="submit">For Investors</button>
            <button class="GrayPillButton" type="submit">Redeployment and Sustinment</button>
        </form>
    </div>
</section>

<section class="container recommendedResources">
    <h2 class="mb-4">Recommended Resources</h2>
    <div class="row smallVerticalCards">
        <?php
        // Include WordPress core files
        require_once ('wp-load.php');

        // Get all published posts
        $posts = get_posts(
            array(
                'post_type' => 'resource', // Change to 'page' if you want pages instead
                'post_status' => 'publish',
                'numberposts' => 3, // Retrieve 3 posts
            )
        );

        if ($posts) {
            foreach ($posts as $recentPost) {
                $hero = get_field('hero', $recentPost->ID);
                echo '<div class="card border-0 col-md-4 col-12 px-0 rounded-0 smallVerticalCards__card">';
                if($hero) {
                    echo '<img class="w-100" id="recommendedResources_img"
                    src="' . $hero['url'] . '">';
                }
                echo '<div class="card-body pt-4 pb-3 px-0">';
                if($recentPost->post_title) {
                    echo '<h5 class="smallVerticalCards__card_title">' . esc_html($recentPost->post_title) .'</h5>';
                }
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
                echo '</div>';
            }
        
        } 
        ?>

    </div>

</section>

<section class="container recentsPosts">
    <h2 class="mb-4">Recents Posts</h2>
    <div class="row smallVerticalCards">
        <?php

        // Include WordPress core files
        require_once ('wp-load.php');

        // Get all published posts
        $posts = get_posts(
            array(
                'post_type' => 'blog', // Change to 'page' if you want pages instead
                'post_status' => 'publish',
                'numberposts' => 4, // Retrieve 3 posts
            )
        );


        for ($i = 0;  $i <= count($posts)-1 ; $i++) {
            if ($posts[$i]->ID !=  get_the_ID()){
                $postsWithoutCurrentID[$i] = $posts[$i];
            }
        };

        if(count($postsWithoutCurrentID) == count($posts)){
            array_pop($postsWithoutCurrentID);
        };
        
        if ($postsWithoutCurrentID) {
            foreach ($postsWithoutCurrentID as $recentPost) {
                $hero = get_field('hero', $recentPost->ID);
                $summary = get_field('summary', $recentPost->ID);
                echo '<div class="card border-0 col-md-4 col-12 px-0 rounded-0 smallVerticalCards__card">';
                if($hero){
                    echo '<img class="w-100"
                    src="' . $hero['url'] . '">';
                }
                echo '<div class="card-body pt-4 pb-3 px-0">';
                if($recentPost->post_title){
                    echo '<h5 class="smallVerticalCards__card_title">' . esc_html($recentPost->post_title) .'</h5>';
                }
                if($summary){
                    echo '<p class="card-text smallVerticalCards__card_Summary">'.$summary.'</p>';
                }
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
                echo '</div>';
            }
           
        } else {
            echo 'No posts found.';
        }
        ?>

    </div>

</section>



<script>
    const commentsCount = $('.comment').length;
    $('.js-commentCount').html('(' + commentsCount + ')');
    if (commentsCount > 0) {
        $('.js-comments-list').show();
    }
    else{
        $('.js-comments-list').hide();
    }
    if (commentsCount > 3) {
        $('.responses__Button').show();
        $('.comment:nth-child(n+4)').hide();
    }
    else{
        $('.responses__Button').hide();
    }

    $('.js-LoadMoreComments').click(function(){
        const CommentsScrollTop = $('#comments').offset().top - 70;
        $(window).scrollTop(CommentsScrollTop);
        if ($(this).text() === 'See All Comments'){
            $('.comment').show();
            $(this).text('See Less Comments');  
        }
        else{
            $('.comment:nth-child(n+4)').hide();
            $(this).text('See All Comments');

        } 
    });
</script>

<?php get_footer(); ?>