<?php
/*
Template Name: Blogs
*/

get_header();
?>

<section class="container-fluid blogHeader">
</section>

<section class="container-md px-0">
    <div class="row blogHeader_Cards">
        <div class="col-md-5 col-12 blogHeader__firstColumn">
            <div class="blogHeader__firstColumn-card">
                <p class="mb-4 body-base">Civil Liberties</p>
                <h3>Blog Post Title: Lorem Ipsum Dolor The Quick Brown</h3>
                <p class="body-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla
                    metus id augue rhoncus dapibus. Maecenas id neque pulvinar, ornare odio nec, ultricies quam.
                    Vivamus ultricies diam massa, ut bibendum eros venenatis ullamcorper. Praesent bibendum tempus
                    odio ac bibendum.</p>
                <button class="mt-4 Button LightZodiacButton">
                    Read More
                </button>
            </div>
        </div>
        <div class="col-md-4 col-12 blogHeader__secondcolumn">
            <div class="blogHeader__secondcolumn-card">
                <h5>Blog Post Title: Lorem Ipsum Dolor The Quick Brown</h5>
                <p class="body-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla
                    metus id augue rhoncus dapibus. Maecenas id neque pulvinar, ornare odio nec, ultricies quam.
                    Vivamus ultricies diam massa, ut bibendum eros venenatis ullamcorper. Praesent bibendum tempus
                    odio ac bibendum.</p>
                <a class="text-decoration-none " href="#" style="color:#1651A5">Learn More
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                            fill="#1651A5" style="margin-left:8px; margin-bottom: 0px;">
                            <path
                                d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                fill="#1651A5"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-12 blogHeader__secondcolumn">
            <div class="blogHeader__secondcolumn-card">
                <h5>Blog Post Title: Lorem Ipsum Dolor The Quick Brown</h5>
                <p class="body-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fringilla
                    metus id </p>
                <a class="text-decoration-none " href="#" style="color:#1651A5">Learn More
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                            fill="#1651A5" style="margin-left:8px; margin-bottom: 0px;">
                            <path
                                d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                fill="#1651A5"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="container latestPosts">
    <h2 id="js-LastestPosts">Latest Posts</h2>
    <div class="row mb-5">
        <?php
        // Include WordPress core files
        require_once ('wp-load.php');

        // Get all published posts
        $posts = get_posts(
            array(
                'post_type' => 'blog', // Change to 'page' if you want pages instead
                'post_status' => 'publish',
                'numberposts' => 1, // Retrieve 3 posts
            )
        );
        
        if ($posts) {
            foreach ($posts as $recentPost) {
                $hero = get_field('hero', $recentPost->ID);
                $summary = get_field('summary', $recentPost->ID);
                echo '<div class="col-md-6 col-12 largeHorizontalcard__img">';
                if($hero){
                    echo '<img src="' . $hero['url'] . '">';
                }
                echo '</div>';
                echo '<div class="col-md-6 col-12 largeHorizontalcard__content">';
                if($recentPost->post_title){
                    echo '<h3>' . esc_html($recentPost->post_title) .'</h3>';
                }
                if($summary){
                    echo '<p class="body-large">'.$summary.'</p>';
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
            }
           
        } else {
            echo 'No posts found.';
        }
        ?>

    </div>

    <!-- in default position this show when click on js-BlogsLoadMore_btn get hide -->
    <div class="row" id="js_BlogsReadLess_card">  
        <?php
        // Include WordPress core files
        require_once ('wp-load.php');

        // Get all published posts
        $posts = get_posts(
            array(
                'post_type' => 'blog', // Change to 'page' if you want pages instead
                'post_status' => 'publish',
                'numberposts' => 13, // Retrieve 3 posts
            )
        );

        if ($posts) {
            unset($posts[0]);
            foreach ($posts as $recentPost) {
                $hero = get_field('hero', $recentPost->ID);
                $summary = get_field('summary', $recentPost->ID);
                echo '<div class="col-md-6 mb-5 LazyLoad lazy">';
                echo '<div class="row">';
                echo '<div class="col-md-6 mediumHorizontalcard__img">';
                if($hero){
                    echo '<img class="w-100 h-100" src="' . $hero['url'] . '">';
                }
                echo '</div>';
                echo '<div class="col-md-6 mediumHorizontalcard__content">';
                if($recentPost->post_title){
                    echo '<p class="body-large">' . esc_html($recentPost->post_title) .'</p>';
                }
                if($summary){
                    echo '<p class="body-base">'.$summary.'</p>';
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
                echo '</div>';
            }
        
        } else {
            echo 'No posts found.';
        }
        ?>
    </div>

    <!-- in default position this hide when click on js-BlogsLoadMore_btn get show -->
    <div class="row" id="js_BlogsReadMore_card">  
        <?php
        // Include WordPress core files
        require_once ('wp-load.php');

        // Get all published posts
        $posts = get_posts(
            array(
                'post_type' => 'blog', // Change to 'page' if you want pages instead
                'post_status' => 'publish',
                'numberposts' => -1, // Retrieve 3 posts
            )
        );

        if ($posts) {
            for ($i=0; $i < 12 ; $i++) { 
                unset($posts[$i]);
            }
            foreach ($posts as $recentPost) {
                $hero = get_field('hero', $recentPost->ID);
                $summary = get_field('summary', $recentPost->ID);
                echo '<div class="col-md-6 mb-5 LazyLoad lazy">';
                echo '<div class="row">';
                echo '<div class="col-md-6 mediumHorizontalcard__img">';
                if($hero){
                    echo '<img class="w-100" src="' . $hero['url'] . '">';
                }
                echo '</div>';
                echo '<div class="col-md-6 mediumHorizontalcard__content">';
                if($recentPost->post_title){
                    echo '<p class="body-large">' . esc_html($recentPost->post_title) .'</p>';
                }
                if($summary){
                    echo '<p class="body-base">'.$summary.'</p>';
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
                echo '</div>';
            }
        
        } else {
            echo 'No posts found.';
        }
        ?>
    </div>
    
      
    <div class="latestPost__btn">
        <button class="mt-4 Button ZodiacButton" id="js-BlogsLoadMore_btn" >View More</button>
    </div>
</section>

<section class="container-fluid blogArticle__category">
    <div class="container blog-articles">
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
    </div>

    <div class="container">
        <div class="row  blogArticle__category-cards">

            <div class="col-md-3 col-12 px-0 rounded-0 smallVerticalCards__card" style="width: 18rem;">
                <img class="w-100" id="recommendedResources_img"
                    src="http://aiia.local/wp-content/themes/aiia/assets/images/mobilecard1.png">
                <!-- <div id="recommendedResources_img" class="smallVerticalCards__card_Image w-100"></div> -->
                <div class="card-body py-4 pb-5 px-0">
                    <h5 class="smallVerticalCards__card_title">Financial Strategies for H-1B Visa Holders Considering
                        the
                        EB-5 Investm</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="text-decoration-none " href="#" style="color:#1651A5">Learn More
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                fill="#1651A5" style="margin-left:8px; margin-bottom: 1px;">
                                <path
                                    d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                    fill="#1651A5"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>


            <div class="col-md-3 col-12 px-0 rounded-0 smallVerticalCards__card" style="width: 18rem;">
                <img class="w-100" id="recommendedResources_img"
                    src="http://aiia.local/wp-content/themes/aiia/assets/images/mobilecard2.png">
                <!-- <div id="recommendedResources_img" class="smallVerticalCards__card_Image w-100"></div> -->
                <div class="card-body pt-4 pb-5 px-0">
                    <h5 class="smallVerticalCards__card_title">Financial Strategies for H-1B Visa Holders Considering
                        the
                        EB-5 Investm</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="text-decoration-none " href="#" style="color:#1651A5">Learn More
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                fill="#1651A5" style="margin-left:8px; margin-bottom: 1px;">
                                <path
                                    d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                    fill="#1651A5"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-12 px-0 rounded-0 smallVerticalCards__card" style="width: 18rem;">
                <img class="w-100" id="recommendedResources_img"
                    src="http://aiia.local/wp-content/themes/aiia/assets/images/mobilecard3.png">
                <!-- <div id="recommendedResources_img" class="smallVerticalCards__card_Image w-100"></div> -->
                <div class="card-body pt-4 pb-5 px-0">
                    <h5 class="smallVerticalCards__card_title">Financial Strategies for H-1B Visa Holders Considering
                        the
                        EB-5 Investm</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="text-decoration-none " href="#" style="color:#1651A5">Learn More
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                fill="#1651A5" style="margin-left:8px; margin-bottom: 1px;">
                                <path
                                    d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                    fill="#1651A5"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-12 px-0 rounded-0 smallVerticalCards__card" style="width: 18rem;">
                <img class="w-100" id="recommendedResources_img"
                    src="http://aiia.local/wp-content/themes/aiia/assets/images/mobilecard4.png">
                <!-- <div id="recommendedResources_img" class="smallVerticalCards__card_Image w-100"></div> -->
                <div class="card-body pt-4 pb-5 px-0">
                    <h5 class="smallVerticalCards__card_title">Financial Strategies for H-1B Visa Holders Considering
                        the
                        EB-5 Investm</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="text-decoration-none " href="#" style="color:#1651A5">Learn More
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                fill="#1651A5" style="margin-left:8px; margin-bottom: 1px;">
                                <path
                                    d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                    fill="#1651A5"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-12 px-0 rounded-0 smallVerticalCards__card" style="width: 18rem;">
                <img class="w-100" id="recommendedResources_img"
                    src="http://aiia.local/wp-content/themes/aiia/assets/images/mobilecard1.png">
                <!-- <div id="recommendedResources_img" class="smallVerticalCards__card_Image w-100"></div> -->
                <div class="card-body pt-4 pb-5 px-0">
                    <h5 class="smallVerticalCards__card_title">Financial Strategies for H-1B Visa Holders Considering
                        the
                        EB-5 Investm</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="text-decoration-none " href="#" style="color:#1651A5">Learn More
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                fill="#1651A5" style="margin-left:8px; margin-bottom: 1px;">
                                <path
                                    d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                    fill="#1651A5"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-12 px-0 rounded-0 smallVerticalCards__card" style="width: 18rem;">
                <img class="w-100" id="recommendedResources_img"
                    src="http://aiia.local/wp-content/themes/aiia/assets/images/mobilecard2.png">
                <!-- <div id="recommendedResources_img" class="smallVerticalCards__card_Image w-100"></div> -->
                <div class="card-body pt-4 pb-5 px-0">
                    <h5 class="smallVerticalCards__card_title">Financial Strategies for H-1B Visa Holders Considering
                        the
                        EB-5 Investm</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="text-decoration-none " href="#" style="color:#1651A5">Learn More
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                fill="#1651A5" style="margin-left:8px; margin-bottom: 1px;">
                                <path
                                    d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                    fill="#1651A5"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-12 px-0 rounded-0 smallVerticalCards__card" style="width: 18rem;">
                <img class="w-100" id="recommendedResources_img"
                    src="http://aiia.local/wp-content/themes/aiia/assets/images/mobilecard3.png">
                <!-- <div id="recommendedResources_img" class="smallVerticalCards__card_Image w-100"></div> -->
                <div class="card-body pt-4 pb-5 px-0">
                    <h5 class="smallVerticalCards__card_title">Financial Strategies for H-1B Visa Holders Considering
                        the
                        EB-5 Investm</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="text-decoration-none " href="#" style="color:#1651A5">Learn More
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                fill="#1651A5" style="margin-left:8px; margin-bottom: 1px;">
                                <path
                                    d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                    fill="#1651A5"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-12 px-0 rounded-0 smallVerticalCards__card" style="width: 18rem;">
                <img class="w-100" id="recommendedResources_img"
                    src="http://aiia.local/wp-content/themes/aiia/assets/images/mobilecard4.png">
                <!-- <div id="recommendedResources_img" class="smallVerticalCards__card_Image w-100"></div> -->
                <div class="card-body pt-4 pb-5 px-0">
                    <h5 class="smallVerticalCards__card_title">Financial Strategies for H-1B Visa Holders Considering
                        the
                        EB-5 Investm</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="text-decoration-none " href="#" style="color:#1651A5">Learn More
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12"
                                fill="#1651A5" style="margin-left:8px; margin-bottom: 1px;">
                                <path
                                    d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z"
                                    fill="#1651A5"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="blogArticle__category-btn mb-0">
                <button class="mt-4 Button ZodiacButton">View More</button>
            </div>
        </div>
    </div>

</section>


<script>   
    $('#js_BlogsReadMore_card').hide();
    $('#js-BlogsLoadMore_btn').click(function(){
        const LastestPostsScrollTop = $('.latestPosts').offset().top - 70;
        $(window).scrollTop(LastestPostsScrollTop);
        if ($(this).text() === 'View More'){
            $('#js_BlogsReadMore_card').show();
            $(this).text('View Less');  
        }
        else{
            $('#js_BlogsReadMore_card').hide();
            $(this).text('View More');

        } 
    })
</script>

<script>
    const lazyDivs = document.querySelectorAll("div.LazyLoad");
    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                entry.target.classList.toggle("lazy" , !entry.isIntersecting)
            })
        }
    );
    
    lazyDivs.forEach(card =>{
        observer.observe(card);
    });
   
</script>


<?php
get_footer();
?>