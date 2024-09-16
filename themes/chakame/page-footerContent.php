<?php
/*
Template Name: Footer Content
*/
?>


<?php
    // Get the "Donat" page by title
    // $donate = get_page_by_title('volunteer');
    // // Get the "volunteer" page by title
    // $volunteer = get_page_by_title('volunteer');
    // Get the "Blogs" page by title
    // $Blogs = get_page_by_title('Blogs');
    // Get the "About Us" page by title
    // $about = get_page_by_title('About Us');
    // Get the "Contact US" page by title
    // $Contactus = get_page_by_title('Contact US');

?>


<section class="container-fluid getInTouch">
    <div class="row h-100 justify-content-between">
        <div class="col-md-5 getInTouch__image">            
        </div>
        <div class="col-md-5 col-12 m-auto getInTouch__content">
            <h2 class="text-white">
                <?php echo get_ACF_by_filed_for_page('footer_top_title' , 'Get In Touch With Us' , 'page-footerContent.php' );?>  
            </h2>
            <p class="body-base text-white my-4">
                <?php echo get_ACF_by_filed_for_page('footer_top_description' , 'If you have any questions, inquiries, or collaboration proposals,
                          please don’t hesitate to reach out to us.' , 'page-footerContent.php' );?> 
            </p>
            <div>
                <form class="d-flex my-4" role="subscribe">
                    <button class="Button WhiteButton" type="submit">
                        <?php echo get_ACF_by_filed_for_page('footer_top_cta' , 'Get In Touch' , 'page-footerContent.php' );?> 
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<footer calss="container-fluid">
    <div class="rgfooter">   
        <div class="container footerUp">
            <div class="row footerUp__info">
                <div class="col-md-6 col-12 footerUp__FirstColumn">
                <img src = "<?php echo get_template_directory_uri().'/assets/icons/LogoWhithText.png';?>">
                    <div class="">                             
                        <p class="body-base text-white my-4">
                            <?php echo get_ACF_by_filed_for_page('footer_join_the_newsletter_title' , 'Join our newsletter to stay up to date on features and releases.' , 'page-footerContent.php' );?>  
                        </p>
                        <div>
                            <form class="d-flex my-4" role="subscribe">
                                <input class="form-control me-2 border rounded-0" type="subscribe" 
                                placeholder="<?php echo get_ACF_by_filed_for_page('footer_join_the_news_letter_place_holder' , 'Enter your email...' , 'page-footerContent.php' );?> " 
                                aria-label="subscribe">
                                <button class="Button ToryButton" type="submit">
                                    <?php echo get_ACF_by_filed_for_page('footer_join_the_news_letter_cta' , 'Subscribe' , 'page-footerContent.php' );?>  
                                </button>
                            </form>
                        </div>
                        <p class="body-base text-white">
                            <?php echo get_ACF_by_filed_for_page('footer_join_the_news_letter_disclaimer' , 'By subscribing you agree to with our Privacy Policy and provide consent to receive updates from our company.' , 'page-footerContent.php' );?>  
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-6 footerUp__SecondColumn">
                    <h5 class="text-white mb-4">
                        <?php echo get_ACF_by_filed_for_page('footer_site_map_title' , 'Sitemap' , 'page-footerContent.php' );?> 
                    </h5>
                    <div class = "footerUp__SecondColumn_links">
                        <?php
                        $SitemapItems = get_ACF_by_filed_for_page('sitemap_Items' , '#' , 'page-footerContent.php' );
                        if (is_countable($SitemapItems) && count($SitemapItems) > 0){
                            if ($SitemapItems) {
                                foreach ($SitemapItems as $Item) {
                                    // $ItemTolower = str_replace(' ', '-', strtolower($Item));
                                    // echo '<a class="text-white" href="./'.$ItemTolower.'/">'.$Item.'</a>';
                                    // echo $Item;
                                    switch ($Item) {
                                        case 'Donate':
                                            echo '<a class="text-white" href="#">'.$Item.'</a>';
                                          break;
                                        case 'Volunteer':
                                            echo '<a class="text-white" href="'.get_permalink( get_page_by_title( 'Volunteer' ) ).'">'.$Item.'</a>';
                                          break;
                                        case 'Blog':
                                            echo '<a class="text-white" href="'.get_permalink( get_page_by_title( 'Blogs' ) ).'">'.$Item.'</a>';
                                          break;
                                        case 'Directory of Professionals':
                                            echo '<a class="text-white" href="'.get_permalink( get_page_by_title( 'Directory of Professionals' ) ).'">'.$Item.'</a>';
                                        break;
                                        case 'About':
                                            echo '<a class="text-white" href="'.get_permalink( get_page_by_title( 'About' ) ).'">'.$Item.'</a>';
                                        break;
                                        case 'Contact':
                                            echo '<a class="text-white" href="'.get_permalink( get_page_by_title( 'Contact' ) ).'">'.$Item.'</a>';
                                        break;
                                    }
                                }
                            }
                        }
                        

                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-6 footerUp__TherdColumn">
                    <h5 class="text-white mb-4">
                        <?php echo get_ACF_by_filed_for_page('footer_follow_us_title' , 'Follow Us' , 'page-footerContent.php' );?> 
                    </h5>
                    <div class = "gap-3 footerUp__SecondColumn_links">

                        <?php
                        if (!empty(get_field('facebook' , get_page_id_by_template('page-footerContent.php') ))) {
                        ?>
                            <a class="text-white d-flex gap-2" href="<?php echo get_ACF_by_filed_for_page('facebook' , '#' , 'page-footerContent.php' );?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path d="M22 13.0865C22 7.5299 17.5229 3.02539 12 3.02539C6.47715 3.02539 2 7.5299 2 13.0865C2 18.1082 5.65684 22.2706 10.4375 23.0254V15.9948H7.89844V13.0865H10.4375V10.8699C10.4375 8.34835 11.9305 6.95551 14.2146 6.95551C15.3088 6.95551 16.4531 7.15202 16.4531 7.15202V9.628H15.1922C13.95 9.628 13.5625 10.4036 13.5625 11.1993V13.0865H16.3359L15.8926 15.9948H13.5625V23.0254C18.3432 22.2706 22 18.1084 22 13.0865Z" fill="white"/>
                                </svg>
                                <p class="my-auto">Facebook</p>
                            </a>
                        <?php
                        }
                        ?>

                        <?php
                        if (!empty(get_field('instagram' , get_page_id_by_template('page-footerContent.php') ))) {
                        ?>
                        <a class="text-white d-flex gap-2" href="<?php echo get_ACF_by_filed_for_page('instagram' , '#' , 'page-footerContent.php' );?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 4.02539H8C5.23858 4.02539 3 6.26397 3 9.02539V17.0254C3 19.7868 5.23858 22.0254 8 22.0254H16C18.7614 22.0254 21 19.7868 21 17.0254V9.02539C21 6.26397 18.7614 4.02539 16 4.02539ZM19.25 17.0254C19.2445 18.818 17.7926 20.2699 16 20.2754H8C6.20735 20.2699 4.75549 18.818 4.75 17.0254V9.02539C4.75549 7.23274 6.20735 5.78088 8 5.77539H16C17.7926 5.78088 19.2445 7.23274 19.25 9.02539V17.0254ZM16.75 9.27539C17.3023 9.27539 17.75 8.82767 17.75 8.27539C17.75 7.72311 17.3023 7.27539 16.75 7.27539C16.1977 7.27539 15.75 7.72311 15.75 8.27539C15.75 8.82767 16.1977 9.27539 16.75 9.27539ZM12 8.52539C9.51472 8.52539 7.5 10.5401 7.5 13.0254C7.5 15.5107 9.51472 17.5254 12 17.5254C14.4853 17.5254 16.5 15.5107 16.5 13.0254C16.5027 11.8311 16.0294 10.685 15.1849 9.84047C14.3404 8.99598 13.1943 8.52273 12 8.52539ZM9.25 13.0254C9.25 14.5442 10.4812 15.7754 12 15.7754C13.5188 15.7754 14.75 14.5442 14.75 13.0254C14.75 11.5066 13.5188 10.2754 12 10.2754C10.4812 10.2754 9.25 11.5066 9.25 13.0254Z" fill="white"/>
                            </svg> 
                            <p class="my-auto">Instagram</p>
                        </a>
                        <?php
                        }
                        ?>

                        <?php
                        if (!empty(get_field('x' , get_page_id_by_template('page-footerContent.php') ))) {
                        ?>
                        <a class="text-white d-flex gap-2" href="<?php echo get_ACF_by_filed_for_page('x' , '#' , 'page-footerContent.php' );?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M17.1761 5.02539H19.9362L13.9061 11.8028L21 21.0254H15.4456L11.0951 15.432L6.11723 21.0254H3.35544L9.80517 13.7762L3 5.02539H8.69545L12.6279 10.138L17.1761 5.02539ZM16.2073 19.4008H17.7368L7.86441 6.56467H6.2232L16.2073 19.4008Z" fill="white"/>
                            </svg> 
                            <p class="my-auto">x</p>
                        </a>
                        <?php
                        }
                        ?>

                        <?php
                        if (!empty(get_field('linkedin' , get_page_id_by_template('page-footerContent.php') ))) {
                        ?>
                            <a class="text-white d-flex gap-2" href="<?php echo get_ACF_by_filed_for_page('linkedin' , '#' , 'page-footerContent.php' );?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 4.02539C3.67157 4.02539 3 4.69696 3 5.52539V20.5254C3 21.3538 3.67157 22.0254 4.5 22.0254H19.5C20.3284 22.0254 21 21.3538 21 20.5254V5.52539C21 4.69696 20.3284 4.02539 19.5 4.02539H4.5ZM8.52076 8.02811C8.52639 8.98436 7.81061 9.57358 6.96123 9.56936C6.16107 9.56514 5.46357 8.92811 5.46779 8.02952C5.47201 7.18436 6.13998 6.50514 7.00764 6.52483C7.88795 6.54452 8.52639 7.18999 8.52076 8.02811ZM12.2797 10.7872H9.75971H9.7583V19.347H12.4217V19.1473C12.4217 18.7674 12.4214 18.3874 12.4211 18.0073C12.4203 16.9935 12.4194 15.9786 12.4246 14.9651C12.426 14.719 12.4372 14.4631 12.5005 14.2282C12.7381 13.3507 13.5271 12.784 14.4074 12.9233C14.9727 13.0118 15.3467 13.3395 15.5042 13.8725C15.6013 14.2057 15.6449 14.5643 15.6491 14.9117C15.6605 15.9593 15.6589 17.0069 15.6573 18.0546C15.6567 18.4244 15.6561 18.7944 15.6561 19.1642V19.3456H18.328V19.1403C18.328 18.6883 18.3278 18.2364 18.3275 17.7845C18.327 16.655 18.3264 15.5255 18.3294 14.3956C18.3308 13.8851 18.276 13.3817 18.1508 12.8881C17.9638 12.154 17.5771 11.5465 16.9485 11.1078C16.5027 10.7956 16.0133 10.5945 15.4663 10.572C15.404 10.5694 15.3412 10.566 15.2781 10.5626C14.9984 10.5475 14.7141 10.5321 14.4467 10.5861C13.6817 10.7393 13.0096 11.0895 12.5019 11.7068C12.4429 11.7776 12.3852 11.8495 12.2991 11.9568L12.2797 11.9811V10.7872ZM5.68164 19.3498H8.33242V10.7927H5.68164V19.3498Z" fill="white"/>
                                </svg> 
                                <p class="my-auto">Linkedin</p> 
                            </a>
                        <?php
                        }
                        ?>

                        <?php
                        if (!empty(get_field('youtube' , get_page_id_by_template('page-footerContent.php') ))) {
                        ?>
                        <a class="text-white d-flex gap-2" href="<?php echo get_ACF_by_filed_for_page('youtube' , '#' , 'page-footerContent.php' );?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M21.5931 7.98572C21.4792 7.56312 21.2566 7.17773 20.9475 6.86789C20.6383 6.55805 20.2534 6.33458 19.8311 6.21972C18.2651 5.78972 12.0001 5.78272 12.0001 5.78272C12.0001 5.78272 5.73609 5.77572 4.16909 6.18672C3.74701 6.30687 3.36291 6.5335 3.05365 6.84486C2.7444 7.15621 2.52037 7.54184 2.40309 7.96472C1.99009 9.53072 1.98609 12.7787 1.98609 12.7787C1.98609 12.7787 1.98209 16.0427 2.39209 17.5927C2.62209 18.4497 3.29709 19.1267 4.15509 19.3577C5.73709 19.7877 11.9851 19.7947 11.9851 19.7947C11.9851 19.7947 18.2501 19.8017 19.8161 19.3917C20.2386 19.2771 20.6238 19.0541 20.9337 18.7449C21.2436 18.4357 21.4675 18.051 21.5831 17.6287C21.9971 16.0637 22.0001 12.8167 22.0001 12.8167C22.0001 12.8167 22.0201 9.55172 21.5931 7.98572ZM9.99609 15.7877L10.0011 9.78772L15.2081 12.7927L9.99609 15.7877Z" fill="white"/>
                            </svg> 
                            <p class="my-auto">Youtube</p>
                        </a>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="container footerMidle">
            <div class="row">
                    <div class="col-md-7 col-12">
                        <h5 class="text-white mb-4 ml-0">
                            <?php echo get_ACF_by_filed_for_page('footer_issues_title' , 'Issues' , 'page-footerContent.php' );?> 
                        </h5>
                        <div class="row footerMidle__FirstColumn">
                            <?php
                            // Include WordPress core files
                            require_once ('wp-load.php');
                            // Get all published posts
                            $IssueParentPosts = get_posts(
                                array(
                                    'post_type' => 'issue', // Change to 'page' if you want pages instead
                                    'post_status' => 'publish',
                                    'post_parent' => 0, // This ensures only parent posts are retrieved
                                    'numberposts' => 3, // Retrieve 2 posts
                                )
                            );


                            if ($IssueParentPosts) {
                                foreach ($IssueParentPosts as $recentPost) {
                                    echo ' <div class="col-md-4 col-12 d-flex flex-column">';
                                    if($recentPost->post_title) {
                                        echo '<a class="text-decoration-none mb-4 "  href="'. get_permalink($recentPost).'" style="color:#FFF">'. esc_html($recentPost->post_title) .'
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="12" viewBox="0 0 17 12" fill="#FFF" style="margin-left:8px; margin-bottom: 5px;">
                                                        <path d="M1 5.25C0.585786 5.25 0.25 5.58579 0.25 6C0.25 6.41421 0.585786 6.75 1 6.75V5.25ZM16.5303 6.53033C16.8232 6.23744 16.8232 5.76256 16.5303 5.46967L11.7574 0.696699C11.4645 0.403806 10.9896 0.403806 10.6967 0.696699C10.4038 0.989593 10.4038 1.46447 10.6967 1.75736L14.9393 6L10.6967 10.2426C10.4038 10.5355 10.4038 11.0104 10.6967 11.3033C10.9896 11.5962 11.4645 11.5962 11.7574 11.3033L16.5303 6.53033ZM1 6.75H16V5.25H1V6.75Z" fill="#FFF"/>
                                                    </svg> 
                                                </span> 
                                            </a>';
                                    }
                                    // Get all published childrenPosts
                                    $issueChildrenPosts = get_children( array(
                                        'post_parent' => $recentPost->ID, // The parent id.
                                        'post_type'   => 'issue',
                                        'post_status' => 'publish',
                                        'numberposts' => 6, // Retrieve 3 posts
                                    ));
                                    foreach ($issueChildrenPosts as $issuerecentPost) {
                                        if($issuerecentPost->post_title) {
                                            echo '<a class="text-white" href="'. get_permalink($issuerecentPost).'">'. esc_html($issuerecentPost->post_title) .'</a>';
                                        }
                                    }
                                    echo ' </div>';
                                } 
                            } 
                            ?>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 footerMidle__SecondColumn">
                        <h5 class="text-white mb-4">
                            <?php echo get_ACF_by_filed_for_page('footer_resources_title' , 'Resources' , 'page-footerContent.php' );?> 
                        </h5> 
                        <?php
                            // Include WordPress core files
                            require_once ('wp-load.php');
                            // Get all published posts
                            $ResourceParentPosts = get_posts(
                                array(
                                    'post_type' => 'resource', // Change to 'page' if you want pages instead
                                    'post_status' => 'publish',
                                    'post_parent' => 0, // This ensures only parent posts are retrieved
                                    'numberposts' => 2, // Retrieve 2 posts
                                )
                            );
                            if ($ResourceParentPosts[0]) {
                                if($ResourceParentPosts[0]->post_title) {
                                    echo ' <a class="text-white mb-md-4 mb-3" href="'. get_permalink($ResourceParentPosts[0]).'">'. esc_html($ResourceParentPosts[0]->post_title) .'</a>';
                                    // Get all published childrenPosts
                                    $ResourceChildrenPosts = get_children( array(
                                        'post_parent' => $ResourceParentPosts[0]->ID, // The parent id.
                                        'post_type'   => 'resource',
                                        'post_status' => 'publish',
                                        'numberposts' => 6, // Retrieve 3 posts
                                    ));
                                    if ($ResourceChildrenPosts) {
                                        foreach ($ResourceChildrenPosts as $ResourceRecentPost) {
                                            echo ' <a class="text-white" href="'. get_permalink($ResourceRecentPost).'">'. esc_html($ResourceRecentPost->post_title) .'</a>';
                                        }
                                    }
                                }
                            }
                            echo '</div>';
                            echo '<div class="col-md-3 col-12 footerMidle__TherdColumn">';
                            if ($ResourceParentPosts[1]) {
                                if($ResourceParentPosts[1]->post_title) {
                                    echo ' <a class="text-white mb-md-4 mb-3" href="'. get_permalink($ResourceParentPosts[1]).'">'. esc_html($ResourceParentPosts[1]->post_title) .'</a>';
                                    // Get all published childrenPosts
                                    $ResourceChildrenPosts1 = get_children( array(
                                        'post_parent' => $ResourceParentPosts[1]->ID, // The parent id.
                                        'post_type'   => 'resource',
                                        'post_status' => 'publish',
                                        'numberposts' => 6, // Retrieve 3 posts
                                    ));
                                    if ($ResourceChildrenPosts1) {
                                        foreach ($ResourceChildrenPosts1 as $ResourceRecentPost) {
                                            echo ' <a class="text-white" href="'. get_permalink($ResourceRecentPost).'">'. esc_html($ResourceRecentPost->post_title) .'</a>';
                                        }
                                    }
                                }
                            }
                            echo '</div>';
                        ?>
            
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-between footerDown">
                <p class="col-md-6 body-small">
                    <?php echo get_ACF_by_filed_for_page('copyright' , '© 2024 American Immigrant Investor Alliance. All rights reserved.' , 'page-footerContent.php' );?> 
                </p> 
                <div class="col-4 footerDown__subtitle">
                    <div class="row ">
                        <p class="col-md-8 text-end body-small">
                            <?php echo get_ACF_by_filed_for_page('privacy_policy' , 'Privacy Policy' , 'page-footerContent.php' );?>
                        </p>
                        <p class="col-md-4 text-end body-small">
                            <?php echo get_ACF_by_filed_for_page('terms_of_service' , 'Terms of Service' , 'page-footerContent.php' );?>
                        </p> 
                    </div>
                </div>     
            </div>
        </div>
    </div>
            
</footer>