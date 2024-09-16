<?php /* Template Name: Issue */ ?>
<?php get_header(); ?>

    <section class="container-fluid issueHeader">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-12 issueHeader__content">
                    <?php
                    if (has_category()){
                        $category = get_the_category()[0];
                        if ($category) {
                            echo '<div class="issueHeader__content-category">
                                    <span></span>
                                    <p class="text-white">'. esc_html($category->name) .'</p>
                                </div>'; 
                        }
                    }   
                    else {
                        echo '<div class="issueHeader__content-category">
                                <span></span>
                                <p class="text-white">No category has been selected for this page</p>
                             </div>';
                    }
                    ?>

                    <div class="issueHeader__content-title">
                        <h1> <?php echo wp_title('', true, 'right'); ?> </h1>
                    </div>

                    <div class="issueHeader__content-text">
                        <p class="body-large">
                            <?php
                            $summary = get_field('summary');
                            if (!empty($summary)) {
                                echo $summary;
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container issueHeader__Maincontent">
        <?php
        $post_id = get_the_ID(); // Get the current post ID
        $content = get_post_field('post_content', $post_id); // Retrieve the raw content
        $content = apply_filters('the_content', $content); // Apply the content filters to format it
        echo $content; // Output the content
        ?>
    </section>
    
    <section class="container-fluid issueNewsroom">
        <div class="container">
            <div class="issueHeader__content-category">
                <span></span>
                <p><?php echo get_ACF_by_filed('news&article_subtitle');?></p>
            </div>    
            <h2><?php echo get_ACF_by_filed('news&article_title');?></h2> 

             <!-- in difaulte position this show when click on js-BlogLoadMore_btn get hide -->
            <div class="row issueNewsroom__cards" id="js_BlogReadLess_card">
                <?php
                // Include WordPress core files
                require_once ('wp-load.php');
                // Get all published posts
                if (has_category()){
                    $posts = get_posts(
                        array(
                            'post_type' => 'blog', // Change to 'page' if you want pages instead
                            'post_status' => 'publish',
                            'numberposts' => 6, // Retrieve 3 posts
                            // 'category__in' =>  $category_ids,
                        )
                    );
                }
                else {
                    $posts = get_posts(
                        array(
                            'post_type' => 'blog', // Change to 'page' if you want pages instead
                            'post_status' => 'publish',
                            'numberposts' => 6, // Retrieve 3 posts
                        )
                    );
                }



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

            <!-- in difaulte position this hide when click on js-BlogLoadMore_btn get show -->
            <div class="row issueNewsroom__cards" id="js_BlogReadMore_card">
                <?php
                // Include WordPress core files
                require_once ('wp-load.php');
                
                // Get all published posts
                if (has_category()){
                    $posts = get_posts(
                        array(
                            'post_type' => 'blog', // Change to 'page' if you want pages instead
                            'post_status' => 'publish',
                            'numberposts' => -1, // Retrieve 3 posts
                            'category__in' =>  $category_ids,
                        )
                    );
                }
                else {
                    $posts = get_posts(
                        array(
                            'post_type' => 'blog', // Change to 'page' if you want pages instead
                            'post_status' => 'publish',
                            'numberposts' => -1, // Retrieve 3 posts
                        )
                    );
                }

                if ($posts) {
                    for ($i=0; $i < 6 ; $i++) { 
                        unset($posts[$i]);
                    }
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
        </div>

        <div class="d-flex justify-content-center">
            <button class="Button ZodiacButton" id="js-BlogLoadMore_btn">Load More</button>
        </div>
    </section>
    <?php
        // This post is not a parent post
        function is_parent_post() {
            global $post;
            $children = get_posts(array('post_parent' => $post->ID, 'post_type' => 'any', 'numberposts' => -1));
            return (count($children) > 0);
        }
        if (is_parent_post()) {
    ?>

        <section class="container issuesWithinImmigration">
            <h2 class="mb-2"><?php echo get_ACF_by_filed('issuewithin_title');?></h2>  
            <p class="body-base"><?php echo get_ACF_by_filed('issuewithin_subtitle');?></p> 
            <div class="issuesWithinImmigration__button">
                <button class="PillButton  MaroonPillButton">EB-5 Policy Oversight</button>
                <button class="PillButton MerlotPillButton">Visa Backlog & Processing Delays</button>
                <button class="PillButton ZodiacPillButton">issue</button>
            </div>
            <!-- <div class="row issuesWithinImmigration__cards">
                <?php
                for($i=0 ; $i < 4 ; $i++) {
                ?>
                <div class="card border-0 col-md-3 col-12 px-0 rounded-0 smallVerticalCards__card" >
                    <img class="w-100" src="<?php echo get_stylesheet_directory_uri();?>'/assets/images/issue-card-1.png'">
                    <div class="card-body pt-4 pb-3 px-0">
                        <h5 class="smallVerticalCards__card_title">Parties involved in an EB-5 investment offering</h5>
                        <p class="card-text smallVerticalCards__card_Summary">Preparing a project for raising EB-5 capital is daunting .This should be no surprise, as successfully navigating the quick</p>
                        <a class="text-decoration-none " href="http://aiia.local/blog/test-5/" style="color:#1651A5">Learn More
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="#1651A5" style="margin-left:8px; margin-bottom: 5px;">
                                <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z" fill="#1651A5"></path>
                            </svg>
                        </span>
                    </a></div>
                </div>    
                <?php
                }
                ?>  
            </div> -->

        </section>
    <?php
    }
    ?>
    <section class="container issueResourcesroom">
         <div class="issueHeader__content-category">
            <span></span>
            <p><?php echo get_ACF_by_filed('featuredimmigration_subtitle');?></p>
        </div>    
        <h2><?php echo get_ACF_by_filed('featuredimmigration_title');?></h2> 

        <!-- in default position this show when click on js-LoadMore_btn get hide -->
        <div class="row issueResourcesroom__cards" id="js_ReadLess_card">
            <?php
            // Include WordPress core files
            require_once ('wp-load.php');

            // Get all published posts
            if (has_category()){
                // $categories = get_the_category();
                // if ($categories) {
                //     $category_ids = array();
                //     foreach ($categories as $category) {
                //         $category_ids[] = $category->term_id;
                //     }
                // }
                $posts = get_posts(
                    array(
                        'post_type' => 'resource', // Change to 'page' if you want pages instead
                        'post_status' => 'publish',
                        'numberposts' => 8, // Retrieve 3 posts
                        // 'category__in' => $category_ids,
                    )
                );
            }
            else {
                $posts = get_posts(
                    array(
                        'post_type' => 'resource', // Change to 'page' if you want pages instead
                        'post_status' => 'publish',
                        'numberposts' => 8, // Retrieve 3 posts  
                    )
                );
            }

            if ($posts) {
                foreach ($posts as $recentPost) {
                    $hero = get_field('hero', $recentPost->ID);
                    echo '<div class="card border-0 col-md-3 col-12 px-0 rounded-0 smallVerticalCards__card LazyLoad">';
                    echo '<div style="height : 211px;" >';
                    if($hero) {
                        echo '<img class="w-100" src="' . $hero['url'] . '">';
                    }
                    echo '</div>';
                    echo '<div class="card-body pt-4 pb-3">';
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

        <!-- in default position this hide when click on js-LoadMore_btn get show -->
        <div class="row issueResourcesroom__cards" id="js_ReadMore_card">
            <?php
            // Include WordPress core files
            require_once ('wp-load.php');

            // Get all published posts
            if (has_category()){
                $posts = get_posts(
                    array(
                        'post_type' => 'resource', // Change to 'page' if you want pages instead
                        'post_status' => 'publish',
                        'numberposts' => -1, // Retrieve 3 posts
                        // 'category__in' => $category_ids,
                    )
                );
            }
            else{
                $posts = get_posts(
                    array(
                        'post_type' => 'resource', // Change to 'page' if you want pages instead
                        'post_status' => 'publish',
                        'numberposts' => -1, // Retrieve 3 posts
                    )
                );
            }

            if ($posts) {
                for ($i=0; $i < 8 ; $i++) { 
                    unset($posts[$i]);
                }
                foreach ($posts as $recentPost) {
                    $hero = get_field('hero', $recentPost->ID);
                    echo '<div class="card border-0 col-md-3 col-12 px-0 rounded-0 smallVerticalCards__card LazyLoad">';
                    echo '<div style="height : 211px;" >';
                    if($hero) {
                        echo '<img class="w-100" src="' . $hero['url'] . '">';
                    }
                    echo '</div>';
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

        <div class="d-flex justify-content-center">
            <button class="Button ZodiacButton" id="js-LoadMore_btn">Load More</button>
        </div>
       
        

    </section>

    
    
  

    <section class="my-0 issueConnectProfessional">
        <div class="container-fluid connectProfessional">
            <div class="container">
                <div class="row connectProfessional__content ">
                    <div class="col-md-7">
                        <h2 class="text-white">Connect With A Professional</h2>
                        <p class="body-base text-white">AIIA has curated a list of the top professionals from
                            attorneys, investment specialists, to business plan writers to support all all EB-5 stakeholders</p>
                        <div>
                            <a class="text-decoration-none Button LightZodiacButton" type="submit" href="/directory-of-professionals/" >View Directory Of Professionals</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container FAQ">
                <div class="issue-accordion">
                    <h1 class="newsroom-header newsroom-header2 "> Frequently Asked Questions </h1>
                    <buttom class="accordion">
                            <h3>Financial Strategies for H-1B Visa Holders Considering the EB-5 Investment</h3>
                            <i  class="bi bi-chevron-down accordion-icon"></i>
                    </buttom>
                    <div class="panel">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Lobortis commodo malesuada dolor faucibus. Id molestie vulputate sit at elit vestibulum pulvinar. Lorem ipsum dolor sit amet consectetur. Lobortis commodo malesuada dolor faucibus. Id molestie vulputate sit at elit vestibulum pulvinar.
                        </p>
                    </div>
                    <buttom class="accordion">
                            <h3>Financial Strategies for H-1B Visa Holders Considering the EB-5 Investment</h3>
                            <i  class="bi bi-chevron-down accordion-icon"></i>
                    </buttom>
                    <div class="panel">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Lobortis commodo malesuada dolor faucibus. Id molestie vulputate sit at elit vestibulum pulvinar. Lorem ipsum dolor sit amet consectetur. Lobortis commodo malesuada dolor faucibus. Id molestie vulputate sit at elit vestibulum pulvinar.
                        </p>
                    </div>
                    <buttom class="accordion">
                            <h3>Financial Strategies for H-1B Visa Holders Considering the EB-5 Investment</h3>
                            <i  class="bi bi-chevron-down accordion-icon"></i>
                    </buttom>
                    <div class="panel">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Lobortis commodo malesuada dolor faucibus. Id molestie vulputate sit at elit vestibulum pulvinar. Lorem ipsum dolor sit amet consectetur. Lobortis commodo malesuada dolor faucibus. Id molestie vulputate sit at elit vestibulum pulvinar.
                        </p>
                    </div>
                    <buttom class="accordion">
                            <h3>Financial Strategies for H-1B Visa Holders Considering the EB-5 Investment</h3>
                            <i  class="bi bi-chevron-down accordion-icon"></i>
                    </buttom>
                    <div class="panel">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Lobortis commodo malesuada dolor faucibus. Id molestie vulputate sit at elit vestibulum pulvinar. Lorem ipsum dolor sit amet consectetur. Lobortis commodo malesuada dolor faucibus. Id molestie vulputate sit at elit vestibulum pulvinar.
                        </p>
                    </div>
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

        
    <script>
        $('#js_ReadMore_card').hide();
        $('#js_BlogReadMore_card').hide();

        $('#js-LoadMore_btn').click(function(){
            const issueResourcesScrollTop = $('.issueResourcesroom').offset().top - 50;
            $(window).scrollTop(issueResourcesScrollTop);
            if ($(this).text() === 'Load More'){
                $('#js_ReadMore_card').show();
                $(this).text('Lode Less');
            }
            else{       
                $('#js_ReadLess_card').css('display' ,'flex');
                $(this).text('Load More');
            }
        })
        
        $('#js-BlogLoadMore_btn').click(function(){
            const issueBlogScrollTop = $('.issueNewsroom').offset().top - 30;
            $(window).scrollTop(issueBlogScrollTop);
            if ($(this).text() === 'Load More'){
                $('#js_BlogReadMore_card').show();
                $(this).text('Lode Less');
            }
            else{
                $('#js_BlogReadMore_card').hide();
                $(this).text('Load More');
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


<?php get_footer(); ?>